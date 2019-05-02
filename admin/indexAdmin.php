<?php
function chargeClass($classe)
{
    if(file_exists('../model/' .$classe.'.php'))
    {
        require_once('../model/' .$classe.'.php');
    }
    else
    {
        require_once('../utils/Debug.php');
        require_once('controller/ControllerAdmin.php');
        require_once('view/ViewAdmin.php');
    }
}
spl_autoload_register('chargeClass');

if(isset($_GET['action'])){
	
    if($_GET['action']== 'publishChapter')
    {
        
        $controller = new ControllerAdmin();
		$controller->addNovelChapter($_POST['text_paragraph'], $_POST['title'], $_POST['chapter_number']);
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
        $controller->searchText($_GET['chapter_page']);
    }
    elseif($_GET['action']== 'updateChapter')
    {
        $controller = new ControllerAdmin();
        $controller->updateChapter($_POST['chapter_number'], $_POST['title'], $_POST['text_paragraph'], $_GET['id']);
    }
    elseif($_GET['action']== 'deleteChapter')
    {
        $controller = new ControllerAdmin();
        $controller->deleteChapter($_GET['chapter_page']);
    }
	else {
		echo 'Erreur tous les champs ne sont pas remplis';
    }
}
else 
{
    $controllerAdmin = new ControllerAdmin();
    $controllerAdmin->adminPage();
}

 
 