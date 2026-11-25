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
    <section class="seccion1">
        <img src="logo1.png" alt="">
        <button>Let's get buzzin'</button>
    </section>
    <section class="seccion2">
        <div>
            <p style="color: white;">Welcome to the Hive!</p>
            <p style="color:orange">Let’s get you started.</p>
        </div>
        <form action="index.php" method="POST">
            <input type="text" placeholder="Enter your name" name="nombre">
            <input type="email" placeholder="Enter your email" name="correo">
            <input type="password" placeholder="Enter password">
            <div class="prueba">
                <input type="text" value="<?php
                                            $dni = $_POST['dni'];
                                            echo $dni;
                                            ?>" name="dni">
                <input type="date" value="<?php
                                            $nacer = $_POST['nacido'];
                                            echo $nacer;
                                            ?>" name="nacido">
                <input type="text" value="<?php
                                            $genero = $_POST['genero'];
                                            echo $genero;
                                            ?>" name="genero">
                <input type="text" value="<?php
                                            $Ntell = $_POST['Ntell'];
                                            echo $Ntell;
                                            ?>" name="Ntell">
                <input type="text" value="<?php
                                            $direcc = $_POST['direccion'];
                                            echo $direcc;
                                            ?>" name="direccion">
            </div>
            <button>Register</button>
            <p style="position: absolute;">Already have an account?<a href="formulario.php"> Sign In</a></p>
        </form>
    </section>
    <section class="seccion3">
        <div class="showEmail">
            <p>
                <?php
                echo "\n";
                date_default_timezone_set("America/Bogota");
                echo date("d/m/Y") . "\n";
                ?>
            </p>
            <p><?php
                $email = $_POST['correo'];
                echo $email;
                ?></p>
            <p>
                <?php
                date_default_timezone_set("America/Bogota");
                echo date("H:i a") . "\n";
                $morning = date("H");
                $afternoom = date("H");
                $night = date("H");
                if ($morning >= 5 && $morning <= 11) {
                    echo "Hola buenos dias";
                } elseif ($afternoom >= 12 && $afternoom <= 17) {
                    echo "Hola buenas tardes";
                } else{
                    echo "Hola buenas noches";
                }
                ?>
            </p>
            <div class="showName">
                <p>
                    <?php
                    $name = $_POST['nombre'];
                    echo $name;
                    ?>
                </p>
            </div>
        </div>
        <div class="resume">
            <div class="prueba">
                <form action="resumen.php" method="POST">
                    <button></button>
                    <input type="text" value="<?php
                                                $nombre = $_POST['nombre'];
                                                echo $nombre;
                                                ?>" name="nombre">
                    <input type="text" value="<?php
                                                $dni = $_POST['dni'];
                                                echo $dni;
                                                ?>" name="dni">
                    <input type="text" value="<?php
                                                $correo = $_POST['correo'];
                                                echo $correo;
                                                ?>" name="correo">
                    <input type="date" value="<?php
                                                $nacer = $_POST['nacido'];
                                                echo $nacer;
                                                ?>" name="nacido">
                    <input type="text" value="<?php
                                                $genero = $_POST['genero'];
                                                echo $genero;
                                                ?>" name="genero">
                    <input type="text" value="<?php
                                                $Ntell = $_POST['Ntell'];
                                                echo $Ntell;
                                                ?>" name="Ntell">
                    <input type="text" value="<?php
                                                $direcc = $_POST['direccion'];
                                                echo $direcc;
                                                ?>" name="direccion">
                </form>
            </div>
        </div>
        <div class="main">
            <div class="title">
                <a href="">
                    <h2>Featured</h2>
                </a>
                <h5><a href="">See All (17)</a></h5>
            </div>
            <div class="content">
                <div class="card">
                    <div class="punto">⭐4.7</div>
                    <img src="art1.png" alt="">
                    <p>Amy’smock Interviews</p>
                </div>
                <div class="card">
                    <div class="punto">⭐4.5</div>
                    <img src="art2.png" alt="">
                    <p>Lion Tutors</p>
                </div>
                <div class="card">
                    <div class="punto">⭐4.8</div>
                    <img src="art3.png" alt="">
                    <p>Jacob’s resume tips</p>
                </div>
            </div>
            <div class="title">
                <a href="">
                    <h2>Graphics and Design</h2>
                </a>
                <h5><a href="">See All (33)</a></h5>
            </div>
            <div class="content">
                <div class="card">
                    <img src="art4.png" alt="">
                    <p>Poster Design</p>
                </div>
                <div class="card">
                    <img src="art5.png" alt="">
                    <p>Vector Illustrations</p>
                </div>
                <div class="card">
                    <img src="art6.png" alt="">
                    <p>Photography</p>
                </div>
            </div>
            <div class="title">
                <a href="">
                    <h2>Hobbies</h2>
                </a>
                <h5><a href="">See All (29)</a></h5>
            </div>
            <div class="content">
                <div class="card">
                    <img src="hob1.png" alt="">
                    <p>Music</p>
                </div>
                <div class="card">
                    <img src="hob2.png" alt="">
                    <p>Sports</p>
                </div>
                <div class="card">
                    <img src="hob3.png" alt="">
                    <p>Debate</p>
                </div>
            </div>
            <button>Show more categories</button>
            <div class="btnrapido">
                <div class="icon">
                    <img src="home.png" alt="">
                    <p>home</p>
                </div>
                <div class="icon">
                    <img src="lupa.png" alt="">
                    <p>Search</p>
                </div>
                <div class="icon">
                    <img src="mas.png" alt="">
                    <p>Create</p>
                </div>
                <div class="icon">
                    <img src="dashboard.png" alt="">
                    <p>Dashboard</p>
                </div>
                <div class="icon">
                    <img src="user.png" alt="">
                    <p>Profile</p>
                </div>
            </div>
    </section>
    <section class="seccion4">
        <img src="foto1.png" alt="">
        <div>
            <h2>Gabriel’s studio</h2>
            <button>$20/Commision</button>
        </div>
        <div>
            <h3>Description:</h3>
            <br>
            <p>Hi I’m Gabriel, I’m a rising sophmore. I can make these for you:</p>
            <ol>
                <li>Posters</li>
                <li>Vector Illustrations</li>
                <li>Photoshop Composites</li>
                <li>Book Covers</li>
                <li>Social Media Banners</li>
            </ol>
            <br>
            <p>Please note: </p>
            <p>Other services may be available on request (prices may vary)</p>
        </div>
        <div>
            <h3>Reviews:</h3>
            <div class="rese">
                <img src="rese1.png" alt="">
                <div>
                    <h3>Lisa Markov</h3>
                    <p>⭐⭐⭐⭐</p>
                </div>
                <p>23rd January 2022</p>
            </div>
            <p>Gabriel is amazing, he helped me with my project even though I came to him last minute. He’s amazing at
                his work, I would highly recommend him for any graphic related work you may have.</p>
        </div>
        <h5><a href="">See All (23)</a></h5>
        <div class="btnrapido2">
            <div class="icon">
                <img src="home.png" alt="">
                <p>home</p>
            </div>
            <div class="icon">
                <img src="lupa.png" alt="">
                <p>Search</p>
            </div>
            <div class="icon">
                <img src="mas.png" alt="">
                <p>Create</p>
            </div>
            <div class="icon">
                <img src="dashboard.png" alt="">
                <p>Dashboard</p>
            </div>
            <div class="icon">
                <img src="user.png" alt="">
                <p>Profile</p>
            </div>
        </div>
    </section>
</body>

</html>