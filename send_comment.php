@use(App\Models\User)
@php
@endphp
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = htmlspecialchars($_POST['comment']);
    
    $to = "MOTOWORD@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo Comentario";
    $message = "Has recibido un nuevo comentario:\n\n" . $comment;
    $headers = "From: \r\n"; // Reemplaza con tu dominio

    if (mail($to, $subject, $message, $headers)) {
        echo "Comentario enviado exitosamente";
    } else {
        echo "Hubo un error al enviar el comentario";
    }
} else {
    echo "Método no permitido";
}
?>

