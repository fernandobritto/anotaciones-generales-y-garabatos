<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
// nova chamada dos namespaces do PHP7
use \Store\{Page, PageAdmin, Model\User};


$app = new Slim();

$app->config('debug', true);

// main route
$app->get('/', function() {    
	$page = new Page();
	$page->setTpl("index");
});

// admin page
$app->get('/admin', function(){

	// Chamada do metodo statico que verifica o login
	User::verifyLogin();

	$page = new PageAdmin();
	$page->setTpl("index");
});



// Login 
$app->get('/admin/login', function() {
    
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

});


// Validação do Login
$app->post('/admin/login', function() {

	//User::login(post('login'), post('password'));
	User::login($_POST['login'], $_POST['password']);
	header("Location: /admin");
	exit;

});


// Rota para efetuar o logout
$app->get('/admin/logout', function() {
	User::logout();
	header("Location: /admin/login");
	exit;

});


// Rota da lista de usuarios
$app->get("/admin/users", function(){
	User::verifyLogin();
	$users = User::listAll();	
	$page = new PageAdmin();
	$page->setTpl("users", array("users"=>$users));
});


$app->get("/admin/users/create", function(){
	User::verifyLogin();
	$page = new PageAdmin();
	$page->setTpl("users-create");
});


$app->get("/admin/users/:id_user/delete", function($iduser){
	User::verifyLogin();
});


$app->get("/admin/users/:id_user", function($iduser){
	User::verifyLogin();
	$page = new PageAdmin();
	$page->setTpl("users-update");
});





$app->run();
