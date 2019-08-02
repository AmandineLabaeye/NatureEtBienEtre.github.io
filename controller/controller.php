<?php


namespace App\controller;

use App\model\model;

class controller
{

    private $model;

    public function __construct()
    {
        $this->model = new model();
    }

    public function accueil()
    {
        include "view/accueil.php";
    }

    public function tarif()
    {
        include "view/tarif.php";
    }

    public function decouvertedulieu()
    {
        include "view/decouverte.php";
    }

}