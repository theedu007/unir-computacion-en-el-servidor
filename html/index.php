<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Actividad 1</a>
            </div>
         </nav>
    </header>
    <div class="container mt-3">
        <main>
            <div>
                <div class="row">
                    <h4>Calculadora</h4>
                </div>
                <form id="formOperador">
                    <div class="row mt-2">
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <label for="num1">Ingrese el primer numero:</label>
                                <input type="number" class="form-control" id="num1" name="num1">
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <label for="num2">Ingrese el segundo numero:</label>
                                <input type="number" class="form-control" id="num2" name="num2">
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <label for="operador">Ingrese el operador:</label>
                                <select name="operador" id="operador" class="form-control">
                                    <?php 
                                        // Definimos un array con las operaciones soportadas por la calculadora
                                        // la llave de un elemento del array sera el valor enviado al archivo calculadora.php
                                        // el valor de un elemento del array es el texto a mostrar en las opciones del despegable
                                        $operacionesArray = array (
                                            "sum" => "Suma", 
                                            "res" => "Resta", 
                                            "mul" => "Multiplicacion", 
                                            "div" => "Division"
                                        );

                                        //Creamos el codigo html para el desplegable
                                        foreach ($operacionesArray as $op => $texto) {
                                            echo <<<EOT
                                            <option value="$op">$texto</option>
                                            EOT;
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <label for="resultado">Resultado:</label>
                                <input type="text" class="form-control" name="resultado" id="resultado" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <div class="form-group">
                                <button class="btn btn-primary" id="submitBtn">Resultado</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <div class="row">
                    <h4>Obtener longitud de una cadena de texto</h4>
                </div>
                <form id="formCadena">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cadena">Ingrese una cadena de texto:</label>
                                <input type="text" class="form-control" name="cadena" id="cadena">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="longitudResultado">La Longitud es de:</label>
                                <input type="text" class="form-control" id="longitudResultado" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-8">
                            <div class="form-group">
                                <button class="btn btn-primary" id="btnSubmitCadena">Obtener longitud de cadena</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <div class="row">
                     <h4>Girar una cadena de texto</h4>
                </div>
                <form id="girarCadena">
                    <div class="row">
                        <div class="col-6 col-sm-8">
                            <div class="form-group">
                                <label for="cadenaGiro">Ingrese una cadena de texto:</label>
                                <input type="text" class="form-control" name="cadenaGiro" id="cadenaGiro">
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="form-group">
                                <label for="operadorGiro">Ingrese la estructura de control que se utilizara:</label>
                                <select name="operadorGiro" id="operadorGiro" class="form-control">
                                    <?php 
                                        // Definimos un array con las operaciones soportadas por la operacion girarCadena
                                        // la llave de un elemento del array sera el valor enviado al archivo girarCadena.php
                                        // el valor de un elemento del array es el texto a mostrar en las opciones del despegable
                                        $operaciones = array (
                                            "for" => "Usando for", 
                                            "while" => "Usando while", 
                                            "dowhile" => "Usando do-while"
                                        );

                                        //Creamos el codigo html para el desplegable
                                        foreach ($operaciones as $op => $texto) {
                                            echo <<<EOT
                                            <option value="$op">$texto</option>
                                            EOT;
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm-8">
                            <div class="form-group">
                                <label for="resultadoGiro">Resultado:</label>
                                <input type="text" class="form-control" name="resultadoGiro" id="resultadoGiro" disabled>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row mt-2">
                    <div class="col-3">
                        <div class="form-group">
                            <button class="btn btn-primary" id="btnSubmitCadenaGiro">Girar cadena</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>

        //Configurando la accion del boton de la calculadora
        const botonCalc = document.querySelector('#submitBtn');
        const formCalc = document.querySelector('#formOperador')
        botonCalc.addEventListener('click', function(e) {
            e.preventDefault();
            fetch("files/calculadora.php", {
                method: 'POST',
                body: new FormData(formCalc)
            })
            .then(result => result.text())
            .then(txt => {
                const inputResultado = document.querySelector('#resultado');
                inputResultado.value = txt;
            })
        });

        //Configurando la accion del boton para obtener la longitud de una cadena
        const botonLongitud = document.querySelector('#btnSubmitCadena');
        const formLongitud = document.querySelector('#formCadena');
        botonLongitud.addEventListener('click', function(e) {
            e.preventDefault();
            fetch('files/longitudCadena.php', {
                method: 'POST',
                body: new FormData(formLongitud)
            })
            .then(result => result.text())
            .then(txt => {
                const inputResultado = document.querySelector('#longitudResultado');
                inputResultado.value = txt;
            });
        });

        //Configurando la accdion del boton para girar la cadena de texto
        const botonGiro = document.querySelector('#btnSubmitCadenaGiro');
        const formGiro = document.querySelector('#girarCadena');
        botonGiro.addEventListener('click', function(e) {
            e.preventDefault();
            fetch('files/girarCadena.php', {
                method: 'POST',
                body: new FormData(formGiro)
            })
            .then(result => result.text())
            .then(txt => {
                const inputResultado = document.querySelector('#resultadoGiro');
                inputResultado.value = txt;
            });
        })
    </script>
</body>
</html>