<?php
/*
require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';
*/

use App\Models\{Job, Project, Printable, BaseElement};

/*
$job1 = new job('PHP Developer','Despription PHP');
$job1->meses = 14;
$job2 = new job('JavaScript Developer','Description JavaScript');
$job2->meses = 22;
var_dump($job1);
*/
$jobs = Job::all();

$project1 = new BaseElement('Project 1',"Description 1");
$project2 = new BaseElement('Project 2',"Description 2");

//$jobs = [ $job1, $job2 ];
$projects = [ $project1, $project2];

echo '<br>-------------------------------------------<br>';
//var_dump($projects);


function printElement($job){
  // if($element->visible == false){
  //   return;
  // } 
  echo '<h5>' .  $job->title . '</h5>';
  echo '<p>' .  $job->description . '</p>';
  echo '<p>' . $job->getDurationMeses() . '</p>';
  //echo '<p>' .  $job['description'] . '</p>'; Asi se hace uso de un arreglo 
  echo '<strong>Achievements:</strong>';
  echo '<br>';
}

//Jobs como Objetos, asignacion variables
// $job1->setTitle('PHP Developer');
// $job1->description = 'Despription PHP';
// $job1->visible = true;
// $job1->meses = 12;

// $job2 = new Job();
// $job2->setTitle('JavaScript Developer');
// $job2->description = 'Despription JavaScript';
// $job2->visible = true;
// $job2->meses = 16;

// $job3 = new Job();
// $job3->setTitle('');
// $job3->description = 'Despription C++';
// $job3->visible = true;
// $job3->meses = 18;

//Jobs en arreglos
//$jobs = [[
//     'title' => 'PHP Developer',
//     'description' => 'Despription PHP Developer',
//     'visible' => true,
//     'meses' => 12
//   ],
//   [
//     'title' => 'C++ Dev',
//     'description' => 'Despription C++ Dev',
//     'visible' => true,
//     'meses' => 18
//   ],
//   [
//     'title' => 'Javascript Developer',
//     'description' => 'Despription  Javascript',
//     'visible' => true,
//     'meses' => 24
//   ],
//   [
//     'title' => 'Nodejs',
//     'description' => 'Despription Nodejs',
//     'visible' => true,
//     'meses' => 6
//   ],
//   [
//     'title' => 'Frontend Dev',
//     'description' => 'Despription Frontend Dev',
//     'visible' => true,
//     'meses' => 8
//   ]
// ];

/*
$jobs = [
  'PHP Developer',
  'C++ Dev',
  'Frontend CSS, Javascript'
];
*/
//var_dump($jobs);

//Se puede no cerrar si es codigo puro php
?>