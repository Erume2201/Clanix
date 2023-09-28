<?php
    if (isset($_GET["cliente"])) {  
        # code...
        $option = $_GET["cliente"];
        switch ($option) {
            case 'pago':
                ?>
                <script >
                    Swal.fire(
                    'Correo enviado!',
                    'You clicke!',
                    'success');
                </script>
                <?php
                break;
            default:
                # code...
                break;
        }
    }else{
        include_once("modules/view/home.php");
    }


?>