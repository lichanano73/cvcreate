<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//require_once 'BaseElement.php';

class Job extends Model {   
  // public function __construct($title,$description){
  //    parent::__construct($title,$description);
  // } 
  protected $table = 'jobs';

  public function getDurationMeses (){ 
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