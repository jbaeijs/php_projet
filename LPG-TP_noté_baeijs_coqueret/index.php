<?php

require_once(__DIR__."./Controller/Display/DisplayController.php");
use MVC\Controller;

$controller = new MVC\Controller\DisplayController();

try {
    if (isset($_GET["action"])){
        switch ($_GET["action"]){
            case "saveStructure":
                if (isset($_POST["genre"]) && isset($_POST["adresse"]) && isset($_POST["code_postal"]) && isset($_POST["ville"]) && isset($_POST["secteurs"]) && isset($_POST["secteurs"]) && isset($_POST["nbAssocies"]) && isset($_POST["nbDonateurs"])){
                    if (($_POST["genre"] == "entreprise" && $_POST["nbDonateurs"] == 0) || ($_POST["genre"] == "association" && $_POST["nbAssocies"] == 0)) {
                        $controller->displayViewStructure();
                    } else {
                        $error = "Error : wrong number of Associates ou Donators";
                    }
                } else {
                    $error = "Wrong number of arguments";
                }
                break;

            case "saveSecteurs":
                $controller->displayViewSetcuers();
                break;
        }
    } else {
        $error = "Redirection vers MainVue";
    }
} catch (Exception $ex){
    $error="Error ".$ex->getCode()." : ".$ex->getMessage()."<br/>".str_replace("\n","<br/>",$ex->getTraceAsString());
}

if (isset($error)){
    $controller->displayMainVue();
}