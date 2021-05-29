<?php

if (isset($_POST['enviar'])){
  if((!empty($_POST['nombre'])) &&
  !empty($_POST['apellido']) &&
  !empty($_POST['telefono']) &&
  !empty($_POST['email']) &&
  !empty($_POST['mensaje'])){
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$teñefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = "From: noreply@example.com" . "\r\n";
$header. = "Reply-To:noreply@example.com" . "\r\n";
$header. = "X-Mailer: PHP/" . phpversion();
$mail = @mail($email,$asunto,$mensaje,$header);
    if ($mail){
      echo "<h4>Mensaje enviado exitosamente</h4>";
    }
  }
}
?>