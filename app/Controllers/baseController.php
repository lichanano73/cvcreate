<?php
namespace App\Controllers;

use \Twig_Loader_Filesystem;
use Zend\Diactoros\Response\HtmlResponse;

class BaseController {

    public $tempTwig;    

    public function __construct(){
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        
        $this->tempTwig = new \Twig\Environment($loader, [
            'debug' => true,
            'cache' => false,
        ]);    
    }

    public function renderHTML($fileName, $data = []) {
        return new HtmlResponse($this->tempTwig->render($fileName, $data));
    }

}