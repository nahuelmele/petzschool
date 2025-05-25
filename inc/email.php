<?php

    //$toEmail = "nahuel.melee@gmail.com";
	$toEmail = "hola@petzschool.com";
	
    $mailHeaders = "From:petzschool <hola@petzschool.com>\r\n";
	
	$mensaje = "De: ".$_POST["user_name"]."\r\n";
	$mensaje .="Email: ".$_POST["user_email"]."\r\n";
	$mensaje .="Mensaje: ".$_POST["msg"]."\r\n";
	
    if(mail($toEmail,$_POST["subject"],$mensaje, $mailHeaders)) {
        echo 1;
    } else {
        echo 2;
    }
?>