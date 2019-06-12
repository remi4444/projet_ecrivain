
<?php

function chargerClasseModel($classe)
{
    if(file_exists('model/' .$classe.'.php'))
    {
        require('model/' .$classe.'.php');
    }
    elseif(file_exists('utils/' .$classe.'.php'))
    {
        require('utils/' .$classe.'.php');
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
        if(preg_match("#^ +$#", $_POST['message']) || preg_match("#^ +$#", $_POST['author']))
        {
            echo ('Votre message ou pseudonyme ne peut pas comporter que des espaces');
        }
        
        elseif(empty($_POST['message']) || empty($_POST['author']))
        {
            echo ('Les champs ne sont pas renseignés');
        }
        else
        {
            $controller->addMessage(htmlspecialchars($_POST['author']),htmlspecialchars($_POST['message']), $_GET['chapter_id']);
        }
        
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
