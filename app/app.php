<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Count.php";

    $app = new Silex\Application();

    $app->get("/new_count", function() use $app {
      return $app['twig']->render(new_count.html.twig);
    });

    $app->get("/create_count", function() use($app) {
      $myCount = new Count;
      $count_result =
    });

    return $app;
?>
