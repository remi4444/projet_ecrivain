<?php



class ControllerAdmin
{
    public function adminPage()
    {
        
        $searchMessageReport = new MessageManager();
        $reportMessage = $searchMessageReport->getReportsMessages();
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
    public function searchText($id_chapter)
    {
        $updateText = new ChapterManager();
        $chapterElement = $updateText->getChapterById($id_chapter);
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

    public function deleteChapter($id_chapter)
    {
        $deleteChapter = new ChapterManager();
        $deleteChapter->deleteChapter($id_chapter);
        header('Location: indexAdmin.php');
    }
}


