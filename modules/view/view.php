 <div class = "container"> 
    <div class ="row">
        <div class="col-6"> 
            <!--Creamos un formulario de PHP Y HTML PARA MANDAR LOS PARAMETROS-->
            <form action="#" method="GET" align="center"> <!--podemos usar POST-->
                <div>
                    <label for="num1">Agregar un numero: </label>
                </div>
                <input type="text" class="form-control" name="num1" id="num1" placeholder="Ejemplo: 10" required>
                </input>
                <div>
                    <label for="num2">Agregar un numero: </label>
                </div>
                <input type="text" class="form-control" name="num2" id="num2" placeholder="Ejemplo: 10" required>
                </input>
                <br>
                <div>
                    <label>Selecciona el tipo de operador:</label>
                    <br>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="+">Suma</option>
                        <option value="-">Resta</option>
                        <option value="*">Multiplicacion</option>
                        <option value="/">Division</option>
                    </select>
                    <div>
                        <br>
                        <input type="submit" class="btn-success" name="btn_enviar" 
                        id="btn_enviar" value="Enviar Valores">
                    </div>
        
                </div>
            </form>
        
        </div>
    </div>
 </div>