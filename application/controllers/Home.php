<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:44
 */
class Home extends CI_Controller
{
    public function index()
    {
        echo "Hello";
    }

    public function test($name = "My test", $lastname = "Skyline")
    {
        $name = "Horizon";
        echo "My name is : " . $name . " " . $lastname;
    }



}