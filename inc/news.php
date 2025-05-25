<?php

    //$toEmail = "nahuel.melee@gmail.com";
	$toEmail = "hola@petzschool.com";
	
    $mailHeaders = "From:petzschool <hola@petzschool.com>\r\n";
	
	$mensaje ="Email: ".$_POST["email"]."\r\n";
	
    if(mail($toEmail,"Suscriptor nuevo",$mensaje, $mailHeaders)) {
        echo 1;
    } else {
        echo 2;
    }
?>