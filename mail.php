<?php
    if(isset($_POST['email']) && $_POST['email'] != ''){

        $username = $_POST['name'];
        $mail = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = 'tonymascate@hotmail.com'
        $body = '';

        $body .= "De : ".$username. "/r/n";
        $body .= "Email : ".$mail. "/r/n";
        $body .= "Message : ".$message. "/r/n";

        mail($tp, $subject, $body);
    }
?>