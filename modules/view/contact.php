<?php
    
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <!--Codigo para las alertas-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
</head>
<br>
<br>
<div class="container">
    <div class="row">
        <h4>Comunicate con nosotros</h4>
        <div class="col-3"></div>
        <div class="col-3">
            <form action="modules/controller/sentEmail.php" method="POST">
                <div>
                    <label for="email">Correo Electronico:</label>
                    <input class="form-control" type="email" name="email" id="email" required
                        placeholder="Escribe tu correo electroncio: a@...com">
                </div>
                <div>
                    <label for="name">Nombre:</label>
                    <input class="form-control" type="text" name="name" id="name" required
                        placeholder="Escribe tu nombre">
                </div>
                <div class="form-group">
                    <label for="age">EDAD</label>
                    <input type="number" name="age" id="age" required class="
                    form-control" min="18" max="60">
                </div>
                <div class="form-group">
                    <label for="age">Fecha de nacimiento</label>
                    <input type="date" name="date" id="date" required class="
                    form-control" min="18" max="60">
                </div>
                <div class="form-group">
                    <label>Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            value="masculino">
                        <label class="form-check-label" for="flexRadioDefault1">Hombre</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            value="femenino" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Mujer</label>
                    </div>
                </div>
                <!-- <br>  salto de linea -->
                <div>
                    <!-- Select para los municipios -->
                    <select class="form-select" aria-label="Default select example" name="select">
                        <option selected>Seleccione su municipio</option>
                        <option value="cardenas">Cárdenas</option>
                        <option value="tacotalpa">Tacotalpa</option>
                        <option value="cunduacan">Cunduacán</option>
                        <option value="teapa">Teapa</option>
                        <option value="huimanguillo">Huimanguillo</option>
                        <option value="comalcalco">Comalcalco</option>
                        <option value="paraiso">Paraíso</option>
                    </select>
                </div>
                <!--<br>  salto de linea -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Escribe tu comentario aqui:</label>
                    <textarea class="form-control" name="exampleFormControlTextarea1" id="exampleFormControlTextarea1"
                        rows="3" required></textarea>
                </div>
                <button class="btn btn-primary form-control" type="submit">Enviar</button>
                <br>
                <br>
                <br>
            </form>
            <div>
                <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == "NoEnviado") {
            // <p>Su mensaje no pudo ser enviado</p>
            ?>
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '¡Mensaje No Enviado!',
                    footer: '<a href="./modules/view/mensNoEnviado.html">¿por qué no funciona?</a>'
                });
                </script>
                <?php
           // echo '<script>alertaError();</script>';
        } else {
            ?>
            <script >
                Swal.fire(
                'Correo enviado!',
                'You clicke!',
                'success')
            </script>
               <!-- <div class="alert alert-danger">
                    <p>Su mensaje fue enviado correctamente</p>
                </div>-->
                <?php
        }
    }
    ?>
            </div>
        </div>
        <div class="col-6">
            <div class="responsive-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9187.964081070173!2d-93.29338987522925!3d18.11180165118332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ee9c8022599539%3A0x7d5b09d64e6c4e86!2sCl%C3%ADnica%20Santa%20Elvira!5e0!3m2!1ses!2smx!4v1684416633987!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>
    </div>
</div>