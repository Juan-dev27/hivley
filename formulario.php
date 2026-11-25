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
    <section class="fase1F">
        <img src="logo1.png" alt="">
    <h1>REGISTRO DE PERSONA</h1>
    <p>Por favor diligencie los siguintes campos con los datos correspondientes.</p>
    <form action="index.php" method="POST">
        <p>Ingrese su nombre</p>
        <input type="text" placeholder="nombre" name="nombre">
        <p>Ingrese su numero de documento</p>
        <input type="number" placeholder="documento" name="dni">
        <p>ingrese su direccion de email</p>
        <input type="email" placeholder="email" name="correo">
        <p>ingrese su fecha de nacimiento</p>
        <input type="date" name="nacido">
        <p>seleccione su genero</p>
        <select name="genero" id="">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
        <p>ingrese su numero de telefono</p>
        <input type="number" placeholder="numero de telefono" name="Ntell">
        <p>ingrese una contraseña</p>
        <input type="password" placeholder="crear una contraseña" name="pass">
        <p>Ingrese su Dirección</p>
        <input type="text" placeholder="Direccion" name="direccion">
        <button>enviar</button>
    </form>
    </section>
</body>
</html>