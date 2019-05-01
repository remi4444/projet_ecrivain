<?php 
class View
{
    public function principalPage($template, $param=null)
    {
        $content=$this->calculateContent($template, $param);
        $title="Roman un billet pour l'alaska";
        ob_start();
        require('view/main.tpl.php');
        $pagePrincipal = ob_get_clean(); 
        return $pagePrincipal; 
    }

    

    public function calculateContent($template, $param)
    {
        if($param!=null)
        {
            extract($param);
        }
        
        ob_start();
        require($template);
        $content = ob_get_clean();
        return $content;
    }

    /*public function connexionPage()
    {
        ob_start();?>
        <body>
            <h1 class="text-center text-danger">Connexion à l'interface d'administration</h1> 
            <form action="index.php?action=password" method="post" class="jumbotron">
                <div class="form-group">
                    <label for="pseudo">Pseudo:</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo">
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" id="pwd" name="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Se souvenir de moi
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Envoyer</button>
            </form>
        </body>
        <?php $connexion = ob_get_clean(); ?>
        <?php return $connexion;
    }*/
    
}