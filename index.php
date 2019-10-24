<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Code\Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {
    
	$page = new Code\PageAdmin();

	$page->setTpl("index");

});

$app->run();

