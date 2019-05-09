
<?php
function chargerClasseModel($classe)
{
    if(file_exists('model/' .$classe.'.php'))
    {
        require_once('model/' .$classe.'.php');
    }
    else
    {
        require_once('utils/Debug.php');
        require_once('view/View.php');
        require_once('controller/Controller.php');
        require_once('view/View.php');
    }
  
}

spl_autoload_register('chargerClasseModel'); 

if(isset($_GET['action'])){
	
    if($_GET['action']== 'chapterById')
    {
        
        $controller = new Controller();
		$controller->chapterPage($_GET['id']);
    }

    elseif($_GET['action']== 'messageReport')
    {
        $controller = new Controller();
        $controller->MessageReporting($_GET['id'], $_GET['chapter_id']);
    }

    elseif($_GET['action']== 'addMessage')
    {
        $controller = new Controller();
        $controller->addMessage($_POST['author'],$_POST['message'], $_GET['chapter_id']);
    }
    elseif($_GET['action']== 'nextChapter')
    {
        $controller = new Controller();
        $controller->nextChapter($_GET['id']);
    }
    elseif($_GET['action']== 'beforeChapter')
    {
        $controller = new Controller();
        $controller->beforeChapter($_GET['id']);
    }
	else {
		echo 'Erreur tous les champs ne sont pas remplis';
    }
}
else 
{
    $controller = new Controller();
    $controller->principalPage();
}
