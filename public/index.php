<?php
//Inicializamos errores de php
ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

//Data Base Connection
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'curso',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
//
//Obtengo peticion mediante request Diactoros
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);
//var_dump($request);

//Inicializamos Aura
use Aura\Router\RouterContainer;
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('index', '/platziphp/', [
    'controller'=> 'App\Controllers\IndexController',
    'action'=>'indexAction']
);

//$map->get('addJobs', '/platziphp/jobs/', '../addJob.php');
$map->get('addJobs', '/platziphp/jobs/', [
        'controller'=> 'App\Controllers\JobsController',
        'action' => 'getAddJobAction'
    ]
);

$map->post('saveJobs', '/platziphp/jobs/', [
    'controller'=> 'App\Controllers\JobsController',
    'action' => 'getAddJobAction'
    ]   
);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
//var_dump($request);
//var_dump($route);

if(!$route){
    echo 'No Rute';
}else{
    $handlerData = $route->handler;

    $controller = new $handlerData['controller'];
    $actionName = $handlerData['action'];
    
    $controller -> $actionName($request);
    $response = $controller->$actionName($request);

    echo $response->getBody();

    //var_dump ($route->handler);
}

