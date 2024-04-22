<?php

namespace core\models;

use services\Connect;

class Movie
{

    public function getAllMovie()
    {
        $query = Connect::Connect()->query("SELECT * FROM ((film INNER JOIN genre ON film.id_genre = genre.id) INNER JOIN age_limit ON film.id_ageLimit = age_limit.id)");
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getOneMovie($id)
    {
        $query = Connect::Connect()->query("SELECT * FROM ((film INNER JOIN genre ON film.id_genre = genre.id) INNER JOIN age_limit ON film.id_ageLimit = age_limit.id) WHERE id_film = '$id'");
        $row = mysqli_fetch_assoc($query);
        return $row;
    }

}