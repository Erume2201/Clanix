<?php
    //validando los datos del metodo POST
    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['date']) && isset($_POST['flexRadioDefault']) 
        && isset($_POST['select']) && isset($_POST['exampleFormControlTextarea1']) && isset($_POST['email'])){
            /*
        # codificando los valores
        echo "Los valores son : <br>".$_POST['name']. 
        "<br>".$_POST['age']."<br>".$_POST['date']."<br>".$_POST['flexRadioDefault']."<br>".$_POST['select'] 
        ."<br>".$_POST['exampleFormControlTextarea1'] 
        ."<br>";
            */
        #Asigno valores a variables de tipo PHP
        $name = $_POST['name'];
        $gmail = $_POST['email'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $sex = $_POST['flexRadioDefault'];
        $selec = $_POST['select'];
        $comentario = $_POST['exampleFormControlTextarea1'];


/*
        $subject = "Mensaje";
        $message.= "Nombre de usuario: ". $name."<br>";
        $message.= "Email de usuario: ". $gmail."<br>";
        $message.= "edad de usuario: ". $age."<br>";
        $message.= "Sexo de usuario: ". $sex."<br>";
        $message.= "Ubicación de usuario: ". $selec."<br>";
        $message.= "Fecha de nacimiento: ". $date."<br>";
        $message.= $_POST['message'];*/
          // Construir mensaje de correo electrónico
          $subject = "Mensaje";
          $message = "Nombre de usuario: " . $name . "<br>";
          $message .= "Email de usuario: " . $gmail . "<br>";
          $message .= "Edad de usuario: " . $age . "<br>";
          $message .= "Sexo de usuario: " . $sex . "<br>";
          $message .= "Ubicación de usuario: " . $selec . "<br>";
          $message .= "Fecha de nacimiento: " . $date . "<br>";
          $message .= "Comentario: " . $comentario . "<br>";

        #variables de correo electronico
        $to = "efrenmar.0118@gmail.com";
        #cabeceza
        $cabeceras = 'De:'. $gmail. "\r\n" .
        'Responder a:'. $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        #enviar correo
        if (mail($to, $subject, $message, $cabeceras)) {
            # code...
            echo "<script> window.location = '../../index.php?module=contact&status=Enviado'</script>";
            #echo "<script>window.location = '../../index.php?module=contact&status=NoEnviado'</script>";
        }else {
            # code...
           # echo "No enviado";
            echo "<script> window.location = '../../index.php?module=contact&status=NoEnviado'</script>";
        }

    }else {
        echo "<p> Algunas variables sin valor.</p>";
    }

?>