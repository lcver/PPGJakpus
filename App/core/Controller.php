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

        $section['cpanel']['navbar'] = $this->section('template/cpanel/navbar');
        $section['cpanel']['sidebar'] = $this->section('template/cpanel/sidebar');
        $section['cpanel']['footer'] = $this->section('template/cpanel/footer');
        $section['cpanel']['content-header'] = $this->section('template/cpanel/content-header');

        $section['page']['navbar'] = $this->section('template/homepage/navbar');
        $section['page']['header'] = $this->section('template/homepage/header');
        $section['page']['sidebar'] = $this->section('template/homepage/sidebar');
        $section['page']['footer'] = $this->section('template/homepage/footer');

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
