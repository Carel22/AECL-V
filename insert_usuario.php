<?php
include("conexion.php");
$con = conexion();

$Id_Usuario = null;
$nom = $_POST['nom'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$Ci = $_POST['Ci'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$telefono_de_emergencia = $_POST['telefono_de_emergencia'];
$fecha_nac = $_POST['fecha_nac'];
$password = $_POST['password'];

/*creando una sentencia de  QUERY; PARA insertar un nuevo usuario en la tabla */
$sql = "INSERT INTO usuario (nom, ap_paterno, ap_materno, Ci, genero, estado_civil, email, telefono, telefono_de_emergencia, fecha_nac, password) VALUES ('$nom', '$ap_paterno', '$ap_materno', '$Ci', '$genero', '$estado_civil', '$email', '$telefono', '$telefono_de_emergencia', '$fecha_nac', '$password')";

$query = mysqli_query($con, $sql);
if($query){
    /*HEADER permite que cuando el usuario de al botono submit se puede almcaenar a la ase de datos*/
   Header("Location: index.php");
}
else{

}

?>
