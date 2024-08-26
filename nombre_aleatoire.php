<?php 
require 'phpqrcode/qrlib.php' ;

function generateTicketCode($length = 10) {

    return  substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
$name= 'code.png';
$chemein = $name;

for ($i=0; $i <5 ; $i++) { 
    $ticket_code = generateTicketCode();
    QRcode::png($ticket_code,$name);
    $name= 'code'.$i.'.png';
    echo $ticket_code .'<br>'; 
}

?>




