<?php

require("Controller.php");
include(dirname(__DIR__)."/config/db.php");
include(dirname(__DIR__).'/model/productModel.php');
include(dirname(__DIR__).'/model/categoryModel.php');

$home = new Controller();

$action=filter_input(INPUT_POST,'action');
if(empty($action)){
	$action =filter_input(INPUT_GET,'action');
	if(empty($action)){
		$action='home_product';
	}
}
switch ($action) {
	case 'home_product':
        $productModel=new productModel();
        $categoryModel=new categoryModel();
        $_SESSION['list_product_1']=$productModel->get_products_home();
        $_SESSION['list_product_2']=$productModel->get_products_home();
        $_SESSION['list_product_3']=$productModel->get_products_home();
        $_SESSION['list_product']=$productModel->get_products();
        $_SESSION['list_brands']=$categoryModel->get_brands(2);
        $home->view("component/home/index");
        break;
	default:
		# code...
	    break;
}
if(isset($_GET['alias'])){
    $home->view("component/single-product/index");
}
?>
