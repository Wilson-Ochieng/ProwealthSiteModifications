<?php

    $to = 'corammers@gmail.com';
    
    $user_email= $_POST["email"];
    

  
    $headers = "From: " . $user_email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
       
        <tr>
            <td>Inbox Developer </td>
        </tr>
        <tr><td>Subscriber Email: '.$user_email.'</td></tr>
        

       
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo "Mail send successfully";
    }else{
        echo 'failed';
    }

?>