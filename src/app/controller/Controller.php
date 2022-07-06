<?php
class Controller
{
    function __construct()
    {
        
    }

    function view($view)
    {
        include(dirname(__DIR__)."/view/$view.php");
    }
    function viewOne($view)
    {
        include_once(dirname(__DIR__).'app/view/'.$view.'.php');
    }
}
?>