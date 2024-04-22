<?php

namespace router;

use core\controllers\MovieController;

class Router
{

    public static $list = [];

    public static function myGet(string $url, string $namePage)
    {
        self::$list[] = [
            'url' => $url,
            'namePage' => $namePage
        ];
    }

    public static function myPost(string $url, string $controller, string $method)
    {
        self::$list[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public static function getContent()
    {
        $rout = $_GET['rout'] ?? '';
        foreach (self::$list as $item)
        {
            if($item['url'] === '/' . $rout)
            {
                if ($_SERVER['REQUEST_METHOD'] === "GET")
                {
                    $Movie = new MovieController();
                    switch ($item['namePage'])
                    {
                        case 'home':
                            $Movie -> AllMovie($item['namePage']);
                            die();
                        case 'login':
                            require_once __DIR__ . '/../../views/pages/' . $item['namePage'] . '.php';
                            die();
                        case 'register':
                            require_once __DIR__ . '/../../views/pages/' . $item['namePage'] . '.php';
                            die();
                        case 'about':
                            $Movie -> OneMovie($item['namePage'], $_GET['id']);
                            die();
                        case 'profile':
                            require_once __DIR__ . '/../../views/pages/' . $item['namePage'] . '.php';
                            die();
                        case 'admin':
                            require_once __DIR__ . '/../../views/admin/' . $item['namePage'] . '.php';
                            die();
                    }
                }
                elseif ($_SERVER['REQUEST_METHOD'] === "POST")
                {
                    $method = $item['method'];
                    switch ($method)
                    {
                        case 'register':
                            $action = new $item['controller'];
                            $action->$method($_POST);
                            die();
                        case 'login':
                            $action = new $item['controller'];
                            $action->$method($_POST);
                            die();
                        case 'logout':
                            $action = new $item['controller'];
                            $action->$method($_POST);
                            die();
                    }
                }
            }
        }
    }

}