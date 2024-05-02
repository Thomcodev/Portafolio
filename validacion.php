<?php
// Recibe los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

// Configura el correo electrónico
$to = 'pedrotompachecop@gmail.com'; // Reemplaza con tu dirección de correo
$subject = 'Nuevo mensaje de ' . $name;
$body = "Nombre: $name\nCorreo electrónico: $email\nAsunto: $subject\nMensaje:\n$message";

// Envía el correo electrónico
$mailSent = mail($to, $subject, $body);

// Verifica si el correo se envió correctamente
if ($mailSent) {
    echo '¡El mensaje se envió correctamente!';
} else {
    echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
}
?>
