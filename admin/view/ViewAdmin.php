<?php 
class ViewAdmin
{
    public function adminPage($template, $param=null)
    {
        $content=$this->calculateContent($template, $param);
        $title="Page admin";
        ob_start();
        require('view/mainAdmin.tpl.php');
        $pageAdmin = ob_get_clean(); 
        return $pageAdmin; 
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



