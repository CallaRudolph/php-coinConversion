<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/MakeChange.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('form.html.twig');
    });

    $app->get('/change', function() use ($app) {
      $change = new MakeChange;
      $make_change = $change->convertCoin($_GET['input']);
      return $app['twig']->render('change.html.twig', array('coins' => $make_change, 'input' => $_GET['input']));
    });

    return $app;
?>
