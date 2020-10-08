<?php
if(isset($_POST["nombre"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["empresa"]) && isset($_POST["sede"]) && isset($_POST["size"]) 

{
$to = "info@wor.mx";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Telefono: ".$_POST["tel"]."\n\n\n";
$contenido .= "Email: ".$_POST["email"]."\n";
$contenido .= "Empresa: ".$_POST["empresa"]."\n";
$contenido .= "Sede de interes: ".$_POST["sede"]."\n";
$contenido .= "Numero de empleados: ".$_POST["size"]."\n";

$header = "From: info@wor.mx\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido, $header)){
echo '<script language="javascript">alert("¡Gracias! Hemos recibido tu información. Muy pronto uno de nuestros asesores se pondrá en contacto contigo.");window.location.href="../index.html"</script>';
}
}
?>