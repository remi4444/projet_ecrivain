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

    public function chapterPage($chapter_number)
    {
        $listChapterByNumber = new ChapterManager();
        $listMessage = new MessageManager();
        $posts = $listChapterByNumber->getChapterByNumber($chapter_number);
        $messages = $listMessage->getMessage($chapter_number);
        $view = new View(); 
        $chapterPage = $view->principalPage('view/chapterPage.tpl.php', array('posts'=>$posts, 'messages'=>$messages));
        
        echo $chapterPage;
    }

    public function addMessage($author, $message, $chapter_number)
    {
        $addMessage = new MessageManager();
		$affectedLines = $addMessage->addMessage($author, $message, $chapter_number);
		if ($affectedLines == false){
			die("Impossible d'ajouter le commentaire");
        }
        $this->chapterPage($chapter_number);
    }

    public function MessageReporting($id, $chapter)
    {
        $messageReporting = new MessageManager();
        $reportUpdate = $messageReporting->updateReportMessage($id);
        
    }
    public function nextChapter($chapter)
    {
        $count = new ChapterManager;
        $countChapter = $count->countChapter();
        $countNbChapter = $countChapter['nbChapter'];
       
        $nextChapter =  $chapter+1;
        if($nextChapter > $countNbChapter)
        {
            $nextChapter = 1;
        }
        $this->chapterPage($nextChapter);
       
       
       
    }
    
}