<?php
$to = "nadeemkp181@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: nadeemkp181@gmail.com" . "\r\n" .
"CC: nadeemkp181@gmail.com";

mail($to,$subject,$txt,$headers);
?>