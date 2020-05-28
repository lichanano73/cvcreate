<?php

namespace App\Models;

//require_once 'Printable.php';

class BaseElement implements Printable {
    public $title;
    public $description;
    public $visible = true;  
    public $meses;  

    public function __construct($title,$description){
      $this->setTitle($title);
      $this->description = $description;     
    }
  
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
      if($title == ''){
        $this->title = 'Sin especificar';
      }else{
        $this->title = $title;
      }
    }
    public function getDescription(){
      return $this->description;
    }
    
    public function getDurationMeses (){ 
        if($this->meses == 0){
            return;
        }
        $years = floor($this->meses / 12);//redondea para abajo el modulo
        $aux = $this->meses % 12;
      
        if($years != 0){
          if($aux != 0){
            return "$years years $aux meses";
          }else{
            return "$years years";
          }
        }else{
          return "$aux meses";
        }    
    }

}

  
?>