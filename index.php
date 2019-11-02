<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Store\Page;


$app = new Slim();

$app->config('debug', true);

// main route
$app->get('/', function() {    
	$page = new Page();
	$page->setTpl("index");
});

// admin page
$app->get('/admin', function(){
	$page = new \Store\PageAdmin();
	$page->setTpl("index");
});


$app->run();
