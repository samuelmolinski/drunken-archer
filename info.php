<?php phpinfo();

    $send_html_messages = "no"; 
    $adminmail="admin@http://telhanorte.hospedagemdesites.ws"; //change to your adminmail 
   	$useremail="sjmolinski@cabanacriacao.com"; //change to your own personal mail 
    $subject = "subject test"; 
    $content = "test content"; 
        $xheaders = "From: " . $adminmail . " <" . $adminmail . ">\n"; 
        $xheaders .= "X-Sender: <" . $adminmail . ">\n"; 
        $xheaders .= "X-Mailer: PHP\n"; // mailer 
        $xheaders .= "X-Priority: 6\n"; // Urgent message! 
        if ($send_html_messages == "yes") { 
                $xheaders .= "Content-Type: text/html; charset=iso-8859-1\n"; // Mime type 
        } 
        //mail("$useremail","$subject","$content",$xheaders); 