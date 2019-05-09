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
        $posts = $listChapterByNumber->getChapterById($id);
        $messages = $listMessage->getMessage($id);
        $view = new View(); 
        $chapterPage = $view->principalPage('view/chapterPage.tpl.php', array('posts'=>$posts, 'messages'=>$messages, 'countNbChapter'=>$countNbChapter));
        
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
            $idChapters = $chapterManager->getChapterById($id);
            foreach($idChapters AS $idChapter)
            {
                $chapter=  $idChapter->getChapterNumber();
            }
            
            $searchChapterId = $chapterManager->nextChapter($chapter);
            $id=$searchChapterId['id'];
            $this->chapterPage($id);
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
            $idChapters = $chapterManager->getChapterById($id);
            foreach($idChapters AS $idChapter)
            {
                $chapter=  $idChapter->getChapterNumber();
            }
            
            $searchChapterId = $chapterManager->beforeChapter($chapter);
            $id=$searchChapterId['id'];
            $this->chapterPage($id);
        }
        else {
			die("Impossible de voir le prochain chapitre");
        }
        
        
    }
    
}