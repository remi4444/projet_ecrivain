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
 
}