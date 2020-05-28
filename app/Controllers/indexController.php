<?php

//require_once ('jobs.php');
//include 'jobs.php';

namespace App\Controllers;
use App\Models\{Job,Project,BaseElement};

class IndexController extends BaseController {
    public function indexAction(){        

        $apellido = 'Blanco';
        $nombre = "$apellido Lisandro Matías";
        $titulo = "Ingeniero en Informática";
        $limitmeses = 111;


        $jobs = Job::all();

        $project1 = new BaseElement('Project 1',"Description 1");
        $project2 = new BaseElement('Project 2',"Description 2");
        $projects = [$project1,$project2];

        return $this->renderHTML('index.twig', [
            'nombre'=> $nombre,
            'titulo'=> $titulo,
            'jobs'=> $jobs,
            'projects'=> $projects
        ]);
    }
}




