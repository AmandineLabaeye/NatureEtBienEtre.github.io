<?php

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

/*if (!isset($_GET['controller'])) {

    $controller = new \App\controller\controller();
    $controller->accueil();

} else {

    if ($_GET['action'] === "tarif") {

        $controller = new \App\controller\controller();
        $controller->tarif();

    } elseif ($_GET['action'] === "decouverte") {

        $controller = new \App\controller\controller();
        $controller->decouvertedulieu();

    }*/


}