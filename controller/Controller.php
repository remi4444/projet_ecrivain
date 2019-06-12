<?php

class Controller
{
    
    public function principalPage()
    {
        $listChapter = new ChapterManager();
        $posts = $listChapter->getChapter();
        $view = new View(); 
        $principalPage = $view->principalPage('view/pagePrincipal.tpl.php', ['posts'=>$posts]);
        echo $principalPage;
    }

    public function chapterPage($id)
    {
        $listChapterByNumber = new ChapterManager();
        $listMessage = new MessageManager();
        $countChapter = $listChapterByNumber->countChapter();
        $countNbChapter = $countChapter['nbChapter'];
        $chapter = $listChapterByNumber->getChapterById($id);
        $messages = $listMessage->getMessageByIdChapter($id);
        $view = new View(); 
        $chapterPage = $view->principalPage('view/chapterPage.tpl.php', array('chapter'=>$chapter, 'messages'=>$messages, 'countNbChapter'=>$countNbChapter));
        
        echo $chapterPage;
    }

    public function addMessage($author, $message, $id)
    {
        $addMessage = new MessageManager();
		$affectedLines = $addMessage->addMessage($author, $message, $id);
		if ($affectedLines == false){
			die("Impossible d'ajouter le commentaire");
        }
        $this->chapterPage($id);
    }

    public function MessageReporting($id, $chapter_id)
    {
        $messageReporting = new MessageManager();
        $reportUpdate = $messageReporting->updateReportMessage($id);
        $this->chapterPage($chapter_id);
    }
    public function nextChapter($id)
    {
        if (is_numeric($id))
        {
            $chapterManager = new ChapterManager;
            $chapter = $chapterManager->getChapterById($id);
            $idNextChapter = $chapterManager->getNextChapterId($chapter->getChapterNumber());
            $this->chapterPage($idNextChapter);
        }
        else {
			die("Impossible de voir le prochain chapitre");
        }
        
    }
    public function beforeChapter($id)
    {
        if (is_numeric($id))
        {
            $chapterManager = new ChapterManager;
            $chapter = $chapterManager->getChapterById($id);
            $idBeforeChapter = $chapterManager->getBeforeChapterId($chapter->getChapterNumber());
            $this->chapterPage($idBeforeChapter);
        }
        else {
			die("Impossible de voir le prochain chapitre");
        }
        
        
    }
    
}