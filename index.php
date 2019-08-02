<?php



    require "controller/controller.php";
    require "model/model.php";

if (!isset($_GET['controller'])) {

    $controller = new \App\controller\controller();
    $controller->accueil();

} else {

    if ($_GET['action'] === "tarif") {

        $controller = new \App\controller\controller();
        $controller->tarif();

    } elseif ($_GET['action'] === "decouverte") {

        $controller = new \App\controller\controller();
        $controller->decouvertedulieu();

    }


}