<?php



class ControllerAdmin
{

    public function connexionAdmin()
    {
        session_start();
        if(isset($_SESSION['name']))
        {
            $searchMessageReport = new MessageManager();
            $reportMessage = $searchMessageReport->getReportsMessages();
            $searchChapter = new ChapterManager();
            $chapters = $searchChapter->getChapter();
            $viewAdmin = new ViewAdmin;
            $adminPage = $viewAdmin->adminPage('view/adminPage.php',array('reportMessage'=>$reportMessage, 'chapters'=>$chapters));  
            echo $adminPage;
        }
        else 
        {
            $viewAdmin = new ViewAdmin;
            $connexionPage = $viewAdmin->adminPage('view/connexion.php');  
            echo $connexionPage;
        }
            
        
    }
    public function adminPage()
    {
        $password = '$2y$10$ff4O7fTP/EYT6MbnbMuTJ.d9RDuPES1n396Pwtv4u0ExWkKooBAni';
        $passwordHash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    
        $isPasswordCorrect = password_verify($_POST['pass'], $password);
        if($isPasswordCorrect) 
        {
            session_start();
            $_SESSION['name'] = 'Jean Forteroche';
            
            $searchMessageReport = new MessageManager();
            $reportMessage = $searchMessageReport->getReportsMessages();
            $searchChapter = new ChapterManager();
            $chapters = $searchChapter->getChapter();
            $viewAdmin = new ViewAdmin;
            $adminPage = $viewAdmin->adminPage('view/adminPage.php',array('reportMessage'=>$reportMessage, 'chapters'=>$chapters));  
            echo $adminPage;
        }
        else 
        {
            echo "Vous n'avez pas rentré le bon mot de passe ou login";
        }
        
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
    public function updateMessage()
    {
        $allMessage = new MessageManager();
        $updateMessages = $allMessage->getAllMessage();
        $viewUpdate = new ViewAdmin();
        $updatePage = $viewUpdate->adminPage('view/updateMessage.php', ['updateMessages' => $updateMessages]);
        echo $updatePage;
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
    public function updateChapterPage($id_chapter)
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
    public function deconnexion()
    {
        
        session_start();

        // Suppression des variables de session et de la session
        $_SESSION = array();
        session_destroy();
        header('Location: ../index.php');
        
    }
}


