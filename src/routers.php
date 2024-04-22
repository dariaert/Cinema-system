<?php

use router\Router;

Router::myGet('/','home');
Router::myGet('/about.php', 'about');
Router::myGet('/login', 'login');
Router::myGet('/register', 'register');
Router::myGet('/profile', 'profile');
Router::myGet('/admin', 'admin');
Router::myPost('/auth/register', \core\controllers\UserController::class, 'register');
Router::myPost('/auth/login', \core\controllers\UserController::class, 'login');
Router::myPost('/auth/logout', \core\controllers\UserController::class, 'logout');
Router::getContent();