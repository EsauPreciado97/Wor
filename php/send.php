<?php
if(isset($_POST["nombre"]) && isset($_POST["tel"]) && isset($_POST["ciudad"]) && isset($_POST["empresa"]) && isset($_POST["distribuidor"])  

{
$to = "mercadotecnia@packlife.mx";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Telefono: ".$_POST["tel"]."\n\n\n";
$contenido .= "Ciudad: ".$_POST["ciudad"]."\n";
$contenido .= "Empresa: ".$_POST["empresa"]."\n";
$contenido .= "¿Te interesa ser distribuidor?: ".$_POST["distribuidor"]."\n";
$header = "From: mercadotecnia@packlife.mx\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo '<script language="javascript">alert("¡Gracias! Hemos recibido tu información. Muy pronto uno de nuestros asesores se pondrá en contacto contigo.");window.location.href="index.php"</script>';
}
}
?>