<?php



class ControllerAdmin
{
    public function adminPage()
    {
        /*$view = new View();
        $connexionPage = $view->connexionPage();
        require('view/ViewAdmin.php');
        $title= 'adminPage';
        require('admin/indexAdmin.php');*/
        $searchMessageReport = new MessageManager();
        $reportMessage = $searchMessageReport->getReportsMessages();
        /*$countChapter = new AdminManager();
        $count= $countChapter->countChapter();*/
        $searchChapter = new ChapterManager();
        $chapters = $searchChapter->getChapter();
        $viewAdmin = new ViewAdmin;
        $adminPage = $viewAdmin->adminPage('view/adminPage.php',array('reportMessage'=>$reportMessage, 'chapters'=>$chapters));  
        echo $adminPage;
    }

    public function addNovelChapter($textParagraph, $title, $number_chapter)
	{
		$addChapter = new ChapterManager();
		$affectedLines = $addChapter->addParagraphChapter($textParagraph, $title, $number_chapter);
		if ($affectedLines == false){
			die("Impossible d'ajouter le commentaire");
        }
        header('Location: ../index.php');
    }
    public function removeMessage($idMessage)
    {
        $removeMessage = new MessageManager();
        $removeMessage->removeMessage($idMessage);
        
        header('Location: indexAdmin.php');
    }
    public function removeMessageInAdmin($id)
    {
        $removeMessageInAdmin = new MessageManager();
        $removeMessageInAdmin->removeMessageInadmin($id);
        header('Location: indexAdmin.php');
    }
    public function searchText($chapter_number)
    {
        $updateText = new ChapterManager();
        $chapterElement = $updateText->getChapterByNumber($chapter_number);
        $viewUpdate = new ViewAdmin();
        $updatePage = $viewUpdate->adminPage('view/updatePage.php', ['chapterElement' => $chapterElement]);
        echo $updatePage;
    }

    public function updateChapter($chapter_number, $title, $textParagraph, $id)
    {
        $updateDb = new ChapterManager();
        $updateDb->update($chapter_number, $title, $textParagraph, $id);
        header('Location: indexAdmin.php');
    }

    public function deleteChapter($chapter)
    {
        $deleteChapter = new ChapterManager();
        $deleteChapter->deleteChapter($chapter);
        header('Location: indexAdmin.php');
    }
}


