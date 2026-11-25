<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="fase1R">
        <img src="logo1.png" alt="">
        <h1>RESUMEN DE REGISTRO</h1>
        <p>
            NOMBRE:
            <?php
            $nombre = $_POST['nombre'];
            echo $nombre;
            ?></p>
        <p>
            N.DOCUMENTO:
            <?php
            $dni = $_POST['dni'];
            echo $dni;
            ?></p>
        <p>
            EMAIL:
            <?php
            $correo = $_POST['correo'];
            echo $correo;
            ?></p>
        <p>
            FECHA DE NACIMIENTO:
            <?php
            $nacer = $_POST['nacido'];
            echo $nacer;
            ?></p>
        <P>
            GENERO:
            <?php
            $genero = $_POST['genero'];
            echo $genero;
            ?>
        </P>
        <p>
            N.DE TELEFONO:
            <?php
            $Ntell = $_POST['Ntell'];
            echo $Ntell;
            ?></p>
        <p>
            DIRECCIÓN:
            <?php
            $direcc = $_POST['direccion'];
            echo $direcc;
            ?></p>

        <p>
            EDAD:
            <?php
            $nacimiento = new DateTime($nacer);
            $actual = new DateTime();
            $edad = $actual->diff($nacimiento);
            echo $edad->y . " años.";
            ?></p>
        <p>
            ¿ES MAYOR DE EDAD?:
            <?php
            if ($edad->y > 18) {
                echo "Si es mayor de edad";
            } else {
                echo "No es mayor de edad";
            }
            ?>
        </p>
    </section>
</body>

</html>