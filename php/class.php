<?php
    require "db.php";
    /*General Use Operations*/
    
    //Testing the Data Input by the User.
    function test_input($data)
    {
        if(!empty($data))
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            if(!empty($data))
                return $data;
            else
                header("Location: ../error/err_form.php?error=1");
        }
        else
            header("Location: ../error/err_form.php?error=1");
    }

    //Google reCAPTCHA V2
    function _capture($resp)
    {
        if(!$resp)
            header('Location: ../error/err_cap.html');
        else
        {
            $secret="6LeVtiYUAAAAAJKycWTQN--Y-qWGQzm_z_U04PPC";
            $rip=$_SERVER['REMOTE_ADDR'];
            $capt=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$resp"),true);
            //error-codes:timeout-orduplicate----error page make.
            if($capt['success'] == false)
                return 0;
            else
                return 1;
        }
    }

    //Password Encryption
    function _pwdencrypt($data)
    {
        $hash = password_hash($data, PASSWORD_BCRYPT, array("cost" => 12));
        return $hash;
    }

    //Sending Confirmation Mail
    function confmail($email,$subject,$message)
    {
        require ('mailer/class.phpmailer.php');
        $mail=new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = "smtp.sendgrid.net";      
		$mail->Port       = 587;             
		$mail->AddAddress($email);
		$mail->Username="apikey";  
		$mail->Password="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";            
		$mail->SetFrom('r1models@r1models.com','R1models');
		$mail->AddReplyTo('no-reply-to@r1models.com','R1Models');
		$mail->Subject= $subject;
		$mail->MsgHTML($message);
        if(!$mail->Send())
            header('Location: ../error/err_mail.html');
        else
            header('Location: ../index.html');
    }
 ?>