<?php

include("ConexionBD.php");
// Recuperar las variables
$nombre =trim($_POST['nombre']);
$email =trim($_POST['email']);
$asunto =$_POST['asunto'];
$mensaje =$_POST['mensaje'];

$sql = "INSERT INTO Contacto(nombre, email, asunto, mensaje) VALUES ('$nombre','$email','$asunto','$mensaje')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

 ?>
