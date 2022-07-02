<?php
class Controller
{
    function __construct()
    {
        
    }

    function view($view)
    {
        include('app/view/'.$view.'.php');
    }
}
?>