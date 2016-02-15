<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('pong.twig');
    });

    $app->get("/result", function() use ($app) {
        $pingPong = new PingPongGenerator();
        $pingPongResult = $pingPong->generatePingPongArray($_GET['number']);
        return $app['twig']->render('result.twig', array('results' => $pingPongResult));
    });

    return $app;

?>
