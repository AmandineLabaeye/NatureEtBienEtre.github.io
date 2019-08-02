<?php

if (!isset($_GET['controller'])) {

    require "controller/controller.php";
    require "model/model.php";

    if ($_GET['action'] === "tarif") {

        $controller = new \App\controller\controller();
        $controller->tarif();

    } elseif ($_GET['action'] === "decouverte") {

        $controller = new \App\controller\controller();
        $controller->decouvertedulieu();

    } else {

        $controller = new \App\controller\controller();
        $controller->accueil();

    }

}