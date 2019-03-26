<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];
      
    // Set your email address where you want to receive emails. 
    $to = 'nitheeshjoseph90@gmail.com';
      
    $subject = 'Contact Request From Portfolio Website';
    $headers = "From: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$phone,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>