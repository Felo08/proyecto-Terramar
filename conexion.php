    <?php 

$conexion = new mysqli("localhost","root","","terramar");
if ($conexion->connect_error) {
    die('No conecta'. $conexion->connect_erro);
   // exit();
}


 ?>