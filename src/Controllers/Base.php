<?php

namespace APIDesign\Controllers;

class Base
{
    public static function getController()
    {
        return new Base();
    }

    public function hello($name = '')
    {
        return "Hello $name";
    }
}