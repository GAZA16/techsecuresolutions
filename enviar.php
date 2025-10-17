<?php
// ====== CONFIGURA AQUÍ TU CORREO ======
$destino = "techsecuresolutions25@gmail.com"; // 🔹 Cámbialo por el correo donde quieres recibir las solicitudes

// ====== RECIBE LOS DATOS DEL FORMULARIO ======
$servicio = $_POST["servicio"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$detalle = $_POST["detalle"];

// ====== PREPARA EL MENSAJE ======
$asunto = "Nueva solicitud de servicio: $servicio";
$contenido = "Has recibido una nueva solicitud de servicio desde tu sitio web:\n\n";
$contenido .= "Servicio: $servicio\n";
$contenido .= "Nombre: $nombre\n";
$contenido .= "Correo: $correo\n";
$contenido .= "Teléfono: $telefono\n";
$contenido .= "Detalles:\n$detalle\n";

// ====== CABECERAS DEL CORREO ======
$headers = "From: $correo\r\n";
$headers .= "Reply-To: $correo\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ====== ENVÍA EL CORREO ======
if (mail($destino, $asunto, $contenido, $headers)) {
    header("Location: gracias.html"); // Redirige a una página de agradecimiento
    exit;
} else {
    echo "Error: no se pudo enviar el mensaje. Verifica tu servidor PHP o correo.";
}
?>
