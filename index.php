<?php



error_reporting(E_ALL^ E_STRICT);
ini_set('display_errors', 'On');
require 'vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_sqlite',
        'host'   => 'localhost',
        'dbname' => 'ksiegowosc',
        'user' => 'root',
        'password' => 'bocisko123',
        'charset' => 'utf8m4b'
    ),
    )
        );

$app->get('/', function () use ($app) {
  
    return App\Helpers\ViewGen::create('login', array());
});


$app->get('/bad', function () use ($app) {
    return App\Helpers\ViewGen::create('bad_login');
});
$app->run();