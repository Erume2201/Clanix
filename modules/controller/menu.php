<?php
    if (isset($_GET["module"])) {  
        # code...
        $option = $_GET["module"];
        switch ($option) {
            case 'home':
                include_once("modules/view/home.php");
                break;
            case 'service':
                include_once("modules/view/service.php");
                break;
            case 'contact':
                include_once("modules/view/contact.php");
                break;
            case 'calculadora':
                include_once("modules/view/view.php");
                break;    
            default:
                # code...
                break;
        }
    }else{
        include_once("modules/view/home.php");
    }


?>