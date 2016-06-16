<?php
require 'getprueba.php';
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();
// GET route
$app->get(
    '/:id_facultad', function($id_facultad){
    $result = getprueba::readfacultad($id_facultad);
    if ($result) {

        $datos["estado"] = 1;
        $datos["facultad"] = $result;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
    }
);

// POST route
$app->post(
    '/post',
    function() {
        //echo 'This is a POST route';
   //$datosform=$app->request;
   getprueba::Createfacultad();
    }  
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
