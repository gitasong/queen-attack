<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/QueenAttack.php';

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {

        return $app['twig']->render('input_form.html.twig');
    });

    $app->post('/attack-result', function() use ($app) {
        $new_queenAttack = new QueenAttack($_POST['queen_x'], $_POST['queen_y'], $_POST['other_x'], $_POST['other_y']);
        $result = $new_queenAttack->attackOpponent($_POST['queen_x'], $_POST['queen_y'], $_POST['other_x'], $_POST['other_y']);

        return $app['twig']->render('input_form.html.twig', array('result' => $result));
    });

    return $app;
?>
