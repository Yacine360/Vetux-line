<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/espaceadmin' => [[['_route' => 'espaceadmin', '_controller' => 'App\\Controller\\BackEnd\\AdminController::espaceadmin'], null, null, null, false, false, null]],
        '/algorithme' => [[['_route' => 'algorithme', '_controller' => 'App\\Controller\\BackEnd\\AlgorithmeController::algorithmeCSV'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\BackEnd\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\BackEnd\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\BackEnd\\SecurityController::logout'], null, null, null, false, false, null]],
        '/espacemembre' => [[['_route' => 'espacemembre', '_controller' => 'App\\Controller\\BackEnd\\UserController::espacemembre'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
