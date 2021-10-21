<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'PHPMailer/PHPMailer.php';
    require_once 'PHPMailer/Exception.php';
    require_once 'PHPMailer/SMTP.php';

    function sendEmail($email, $authCode){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'halodayakpky@gmail.com';                     //SMTP username
            $mail->Password   = 'cuneng73';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('halodayakpky@gmail.com', 'onMart');
            $mail->addAddress($email);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'onMart Account Verification';
            $mail->Body    = "<a href='http://localhost:8080/UTS_PAW/page/loginPage.php?authCode=$authCode'>Confirm your Account</a>";
            

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>