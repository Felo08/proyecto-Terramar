<?php
   
   include "headers.php";
if(isset($_GET['correo'])){
if ($_GET['correo'] == 'si') {
    echo "<script>alert('El correo ya existe');</script>";
    }
}
 

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                TERRAMAR |&nbspInicio
            </title>
            <link href="css/estilo.css" rel="stylesheet" type="text/css">
                <link href="images/logo.png" rel="icon">
                </link>
            </link>
        </meta>
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
        </center>
        <nav>
            <ul>
                <li>
                   <?php echo $menu ?>
                </li>
            </ul>
        </nav>

<?php echo $formulario ?>




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
</footer>s
</body>
</html>
