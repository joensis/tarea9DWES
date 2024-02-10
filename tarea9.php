<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extraer información de una API externa</title>

    <style>
        body {
            background-color: #FAF9F6;

            font-family: Arial, Helvetica, sans-serif;
        }

        .usuarios {
            border: 1px solid black;
            border-radius: 10px;
            width: 40vh;
            padding: 15px;
            background-color: #EDE9E2;
        }

        #nombres {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h2>Nombres de usuarios</h2>

    <?php

    //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
    $api = file_get_contents('users.json');
    //// Se decodifica el fichero JSON y se convierte a objeto
    $datos = json_decode($api);
    ?>

    <div class="usuarios">

        <h3>Usuarios</h3>

        <?php
        /**
         * La funcion obtenerDatos() recorre el objeto obtenido de la api y muestra 
         * el valor seleccionado
         * @return null
         */
        function obtenerDatos()
        {
            global $datos;
            $numero = 1;
            foreach ($datos as $nombre) {
                echo '<p id="nombres">' . "Nombre " . $numero . ": " . $nombre->name . '</p>';
                $numero++;

            }

        }
        $llamada = obtenerDatos();
        ?>


    </div>


</body>

</html>