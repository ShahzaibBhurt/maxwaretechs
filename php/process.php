<?php
    if(isset($_POST['submitMsg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        //sending mail to user email
        $to = 'shazaibbhurt@gmail.com';
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->IsMail();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'maxwaretechnologies@outlook.com';                 // SMTP username
        $mail->Password = 'VenominmyVeins77';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->SMTPDebug = 3;
        $mail->setFrom('maxwaretechnologies@outlook.com', 'MaxWare');
        $mail->addAddress($to);
        $mail->isHTML(true);    
        $mail->Subject = "Got New msg from Maxware";
        $mail->Body    = "Name: ".$name."<br>Email: ".$email."<br>Message: ".$message;


        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            header("Location: ../index.html#contact");
        }
    }
    if(isset($_POST['Request'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $select = $_POST['select'];
        
        //sending mail to user email
        $to = 'shazaibbhurt@gmail.com';
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->IsMail();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'maxwaretechnologies@outlook.com';                 // SMTP username
        $mail->Password = 'VenominmyVeins77';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->SMTPDebug = 3;
        $mail->setFrom('maxwaretechnologies@outlook.com', 'MaxWare');
        $mail->addAddress($to);
        $mail->isHTML(true);    
        $mail->Subject = "Got New Request from Maxware";
        $mail->Body    = "Name: ".$name."<br>Number: ".$number."<br>Email: ".$email."<br>Option: ".$select;


        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            header("Location: ../index.html#request");
        }
    }
?>