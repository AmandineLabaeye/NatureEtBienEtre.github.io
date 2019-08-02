<?php

if (!isset($_GET['controller'])) {

    require "controller/controller.php";
    require "model/model.php";

    switch ($_GET['action']) {

        case "tarif":
            $controller = new \App\controller\controller();
            $controller->tarif();
            break;

        case "decouverte":
            $controller = new \App\controller\controller();
            $controller->decouvertedulieu();
            break;

        default:
            $controller = new \App\controller\controller();
            $controller->accueil();
            break;

    }

}