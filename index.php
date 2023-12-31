<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>.:CLANIX:.</title>
    <link rel='stylesheet' type='text/css' 
    href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>

    <!--icono en la pestaña-->
    <link rel="icon" href="image/iconoN.ico" type="image/x-icon">

    
</head>
<body>
    <!--Cargo el archivo de operacion para mandar a llamar el modelo-->
    <?php
    include_once("modules/view/navbar.php");
    //include_once("modules/view/view.php");-->
    include_once("modules/controller/operating.php");
    include_once("modules/controller/menu.php");

    //incluimos las ventanas modal
    include_once("modules/view/modal.php");
    //Pie de pagina
    include_once("modules/view/footer.php");
    
    ?>
    <script type ="text/javascript" 
    src ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!--agregamos el poper y js-->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>