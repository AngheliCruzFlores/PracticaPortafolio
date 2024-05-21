<?php
include("controller.php");
$conn = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title> Mi Porfolio</title>
</head>
<body>
<!-- sección inicio -->
    <span class="sombra">
        <section id="inicio" class="inicio">
            <div class="contenido">
                <header>
                    <div class="logo">
                        <i class="fa-brands fa-codepen"></i>
                        <h1>Angheli Cruz Flores</h1>
                    </div>
                    <nav id="nav" class="">
                        <a href="#inicio">Inicio</a>
                        <a href="#trabajos">Trabajos</a>
                        <a href="#registro">Registrate</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
    
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                </header>
    
                <div class="fila">
                    <div class="col">
                        <h2>Estudiante de Ing de Sistemas e Informática</h2 >
                        <p>Presentando actualmente la primera versión de su portafolio</p>
                    </div>
                    <div class="col">
                        <div class="contenedor-img">
                            <img src="Imagenes/foto-inicio.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </span>

<!-- sección trabajos -->
    <section class="trabajos" id="trabajos">
        <h2>Mis Trabajos</h2>
        <nav>
            <a href="javascript:void(0)" class="borde" id="item" onclick="verCategoria('item')">Todos</a>
            <a href="javascript:void(0)" class="" id="Sis" onclick="verCategoria('Sis')">Sistemas Distribuidos</a>
            <a href="javascript:void(0)" class="" id="BdD" onclick="verCategoria('BdD')">Base de Datos</a>
            <a href="javascript:void(0)" class="" id="ApW" onclick="verCategoria('ApW')">Aplicaciones Web</a>
        </nav>
        <div class="galeria">
            <div class="item Sis">
                <img src="Imagenes/sis-dis.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>github</span><span>bootstrap</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item Sis">
                <img src="Imagenes/sis-dis2.jpeg" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>github</span><span>bootstrap</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item Sis">
                <img src="Imagenes/sis-dis3.jpeg" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>github</span><span>bootstrap</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item BdD">
                <img src="Imagenes/bdd.jpg" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>bdd</span><span>sql</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item BdD">
                <img src="Imagenes/bdd2.jpeg" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>bdd</span><span>sql</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item ApW">
                <img src="Imagenes/apw.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>html</span><span>css</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item ApW">
                <img src="Imagenes/apw2.jpg" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>html</span><span>css</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item ApW">
                <img src="Imagenes/apw3.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <span>html</span><span>css</span>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
        </div>
    </section>

<!-- sección registro -->
<section class="registro" id="registro">
    <div class="users-form">
        <h2>Registrar usuario</h2>
        <form action="insert.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="telefono" placeholder="Telefono">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="submit" value="Agregar">
        </form>
    </div>
</section>
    <div class="users-table">
        <h2> Usuarios Registrados </h2>
            <table border=0.5px>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Contraseña</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['Id'] ?></th>
                        <th> <?= $row['Nombre'] ?> </th>
                        <th> <?= $row['Email'] ?> </th>
                        <th> <?= $row['Telefono'] ?> </th>
                        <th> <?= $row['Contraseña'] ?> </th>
                        <th><a href="update.php?Id=<?= $row['Id'] ?>" class="users-table--edit" >Editar</a></th>
                        <th><a href="delete.php?Id=<?= $row['Id'] ?>" class="users-table--delete"> Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </div>

    <!-- sección contacto -->
    <section class="contacto" id="contacto">
        <div class="contenedor-contacto">
            <h2>Contacto</h2>
            <div class="fila">
                <div class="col">
                    <div class="info">
                        <h3>Email:</h3>
                        <p>anghelimcruz@gmail</p>
                    </div>
                    <div class="info">
                        <h3>Teléfono:</h3>
                        <p>965435675</p>
                    </div>
                    <div class="info">
                        <h3>Pais:</h3>
                        <p>Perú</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Creado por Angheli Cruz - 2023 - UNAM</p>
    </footer>
    <script src="app.js"></script>
</body>
</html>