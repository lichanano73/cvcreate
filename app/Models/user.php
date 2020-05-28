<?php

namespace App\Models;

class Usuarios {

    private $userName;
    private $userEmail;
    private $userPass;

    public function __construct($userName,$userEmail,$userPass){

        $this->setUserName($userName);
        $this->setUserEmail($userEmail);
        $this->$userPass = $userPass;

    }

    public function setUserName($userName){
        if($userName == ''){
          $this->userName = 'Sin especificar';
        }else{
          $this->userName = $userName;
        }
    }
    
    public function setUserEmail($userEmail){

        if($userEmail == ''){
          $this->userEmail = 'Sin especificar';
        }else{
          $this->userEmail = $userEmail;
        }
    }

}