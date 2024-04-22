<?php

namespace core\controllers;

use core\models\Movie;

class MovieController
{

    public function AllMovie($namePage)
    {
        $Movie = new Movie();
        $data = $Movie -> getAllMovie();
        require_once __DIR__ . '/../../../views/pages/' . $namePage . '.php';
    }

    public function OneMovie($namePage, $id)
    {
        $Movie = new Movie();
        $data = $Movie -> getOneMovie($id);
        require_once __DIR__ . '/../../../views/pages/' . $namePage . '.php';
    }

}