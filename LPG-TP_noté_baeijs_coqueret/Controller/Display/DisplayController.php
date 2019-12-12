<?php


namespace MVC\Controller;


class DisplayController
{

    public function __construct()
    {
    }

    public function displayViewStructure(){
        require(__DIR__."/../../View/viewStructure.php");
    }

    public function displayViewSetcuers(){
        require(__DIR__."/../../View/viewSecteurs.php");
    }

    public function displayMainVue(){
        require(__DIR__."/../../View/MainView.php");
    }

}