<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    </head>
    <body>
    <?php  
        require("app/view/header.php");
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];
        
        switch($_SERVER['REQUEST_URI']){
            case '/':
                require("app/controller/HomeController.php");
                break;
            case '/cart':
                require("app/view/component/cart/index.php");
                break;
            case '/login':
                require("app/view/component/login/index.php");
                break;
            case '/register':
                require("app/view/component/login/register.php");
                break;
            case '/detail':
                require("app/view/component/single-product/index.php");
                break;
            case '/admin/product':
                require("app/view/admin/product.php");
                break;
        }
        require("app/view/footer.php");
    ?>   
    
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/public/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="public/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="public/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="public/js/bxslider.min.js"></script>
	<script type="text/javascript" src="public/js/script.slider.js"></script>

  </body>
</html>