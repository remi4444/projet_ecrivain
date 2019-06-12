<?php
function chargeClass($classe)
{
    if(file_exists('../model/' .$classe.'.php'))
    {
        require('../model/' .$classe.'.php');
    }
    elseif(file_exists('../utils/' .$classe.'.php'))
    {
        require('../utils/' .$classe.'.php');
    }
    elseif(file_exists('controller/' .$classe. '.php'))
    {
        require('controller/' .$classe.'.php');
    }
    elseif(file_exists('view/' .$classe. '.php'))
    {
        require('view/' .$classe. '.php');
    }
}
spl_autoload_register('chargeClass');

if(isset($_GET['action'])){
	
    if($_GET['action']== 'publishChapter')
    {
        
        $controller = new ControllerAdmin();
		$controller->addNovelChapter($_POST['text_paragraph'], htmlspecialchars($_POST['title']), htmlspecialchars($_POST['chapter_number']));
    }

    elseif($_GET['action']== 'removeMessageAdmin')
    {
        $controller = new ControllerAdmin();
        $controller->removeMessageInAdmin($_GET['id']);
    }
    elseif($_GET['action']=='removeMessage')
    {
        $controller = new ControllerAdmin();
        $controller->removeMessage($_GET['id']);
    }
    elseif($_GET['action']== 'searchText')
    {
        $controller= new ControllerAdmin();
        $controller->updateChapterPage($_GET['id_page']);
    }
    elseif($_GET['action']== 'updateChapter')
    {
        $controller = new ControllerAdmin();
        $controller->updateChapter(htmlspecialchars($_POST['chapter_number']), htmlspecialchars($_POST['title']), $_POST['text_paragraph'], $_GET['id']);
    }
    elseif($_GET['action']== 'deleteChapter')
    {
        $controller = new ControllerAdmin();
        $controller->deleteChapter($_GET['id_page']);
    }
    elseif($_GET['action']== 'updateMessageAdmin')
    {
        $controller = new ControllerAdmin();
        $controller->updateMessage();
    }

    elseif($_GET['action']== 'adminPage')
    {
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->adminPage();
    }

    elseif($_GET['action']== 'deconnexion')
    {
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->deconnexion();
        
    }
	else {
		echo 'Erreur tous les champs ne sont pas remplis';
    }

    
}
else
{
    $controllerAdmin = new ControllerAdmin();
    $controllerAdmin->connexionAdmin();
}


 
 