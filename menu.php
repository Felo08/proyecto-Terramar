<?php
include "headers.php";
include 'conexion.php';

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TERRAMAR&nbsp|&nbspMenu</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon"  href="images/logo.png">
</head>
<body>
<center>

<section class="banner">
                <center>
                <img alt="logo" class="logo" src="images/logo.png">
                </img>
            </center>

               <?php echo $bienvenidad ?>

            </section>


<nav>
    <ul>
        <li>
            <?php echo $menu ?>
        </li>
    </ul>
</nav>


<article>
    <section class="menu" >

    <?php

    $sql     = "SELECT * FROM platos;";
    $mostrar = $conexion->query($sql);

    while ($buscaPlatos = $mostrar->fetch_assoc()) {

        echo '        <a href="'.$info_plato.'=' . $buscaPlatos['id_plato'] . '"><div class="platos">

            <img class="foto" src="' . $buscaPlatos['ruta'] . '" alt="' . $buscaPlatos['nom_plato'] . '" style="width: 150px;height: 150px;padding:30px;border-radius:3em;">
            <h1>' . $buscaPlatos['nom_plato'] . '</h1>
            </div></a>
';

    }

    ?>

    </section>

</article>
<footer>
            <p>
                Desarrollado Por:
    Felipe Guzmán   David Ríos   Juan  Esteban Porras
            </p>
            <p>
                Correo: terramar@gmail.com
    Telefonos:No Tenemos Linea Telefonica
    Gracias Por Visitar Nuestra Pagina ;)
            </p>
</footer>
</body>
</html>
