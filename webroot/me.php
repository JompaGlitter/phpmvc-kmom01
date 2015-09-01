<?php
/**
 * This is a Idun front controller for my personal site.
 *
 */

// Get the enviroment, autoloader and the $app object
require __DIR__.'/config_with_app.php';

// Add site specifik configurations
$app->theme->configure(ANAX_APP_PATH . '/config/theme_me.php');

// Add site specifik navbar
$app->navbar->configure(ANAX_APP_PATH . '/config/navbar_me.php');




// Home rout, the 'me' page
$app->router->add('', function() use ($app) {
    
    $app->theme->setTitle("Om mig");
    $app->views->add('idun/about');

});

// Rout to show site for reports
$app->router->add('redovisning', function() use ($app) {
    
    $app->theme->setTitle("Redovisning");
    $app->views->add('idun/redovisning');

});

// Rout to show source code
$app->router->add('source', function() use ($app) {

});




// Check for matching routes and dispatch to controller/handler of route
$app->router->handle();

// Leave the rest to the rendering phase
$app->theme->render();