<?php
// Obtener los datos del formulario
if(isset($_POST['Enviar'])){
    if(!empty($_POST['Nombre']) && !empty($_POST['Apellido']) &&empty($_POST['Email']) &&empty($_POST['Telefono']) &&empty($_POST['Organizacion']) &&empty($_POST['Pais']) &&empty($_POST['Comentario'])){
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];
        $organizacion = $_POST['Organizacion'];
        $pais = $_POST['Pais'];
        $comentario = $_POST['Comentario'];
        // Configurar el correo electrónico
        $to = 'juandavid0102sr@gmail.com'; // Reemplaza con tu dirección de correo electrónico
        $subject = 'Formulario de contacto'; // Asunto del correo electrónico
        $message = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nOrganización: $organizacion\nPaís: $pais\nComentario: $comentario"; // Cuerpo del correo electrónico

        // Enviar el correo electrónico
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $mailSent = mail($to, $subject, $message, $headers);

        // Verificar si el correo fue enviado correctamente
        if ($mailSent) {
             echo '¡Gracias por contactarnos! Tu mensaje ha sido enviado.';
        } else {
            echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
        }
    }
}

?>