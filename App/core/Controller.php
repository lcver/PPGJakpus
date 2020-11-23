<?php
namespace App\Core;

class Controller
{
    /**
     * View Controller
     * @return Pageview
     * 
     * @param View View Page
     * @param Array $data
     */
    public function view(String $view, $data = null){

        $section['navbar'] = $this->section('template/navbar');
        $section['sidebar'] = $this->section('template/sidebar');
        $section['footer'] = $this->section('template/footer');


        // $section['test'] = $this->section('home/test');

        require VPATH.$view.'.php';

    }
    
    /**
     * Model Controller
     * @return Model
     */
    public function model(String $model){
        require MPATH.$model.'.php';
        return new $model;
    }

    /**
     * Section Controller
     * @return Content
     */
    public function section(String $view)
    {
        /** Validation */
        if ( !file_exists(VPATH.$view.".php") )
        {
            return "File No Existing";
        }


        /** Geting Content */
        $file = fopen(VPATH.$view.".php","r");
        $content = "";
        while($line = fgets($file))
        {
            $line = str_replace('<?= BASEURL ?>',BASEURL,$line);
            // $line = htmlspecialchars($line);
            $content .= $line;
        }

        return $content;
    }
}
