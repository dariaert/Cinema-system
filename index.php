<?php

session_start();

require __DIR__ . "/src/services/Connect.php";
require __DIR__ . "/src/services/Helper.php";
require __DIR__ . "/src/core/controllers/UserController.php";
require __DIR__ . "/src/core/controllers/MovieController.php";
require __DIR__ . "/src/core/models/User.php";
require __DIR__ . "/src/core/models/Movie.php";
require __DIR__ . "/src/router/Router.php";
require __DIR__ . "/src/routers.php";