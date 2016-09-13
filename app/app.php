<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
     return $app['twig']->render("form.html.twig");
   });

   $app->post("/confirm", function() use ($app) {
    $userInput1 = $_POST['input1'];
    $userInput2 = explode(" ", $_POST['input2']);
    $newAnagram = new Anagram;
    $result = $newAnagram->findAnagrams($userInput1, $userInput2);
    return $app['twig']->render("confirm.html.twig", array('results'=>$result));
    });

    return $app;
 ?>
