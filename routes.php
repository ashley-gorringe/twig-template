<?php
use Steampixel\Route;

Route::add('/', function() {
	echo $GLOBALS['twig']->render('pages/homepage.twig');
});

Route::pathNotFound(function() {
  header('HTTP/1.0 404 Not Found');
  echo $GLOBALS['twig']->render('pages/404.twig');
});

Route::run('/');
?>