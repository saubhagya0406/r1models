<?php
    //After Singup Form
    require "class.mod.php";
    try{
        if(isset($_POST['g-recaptcha-response']) && _capture($_POST['g-recaptcha-response']))
        {
                $email=test_input($_POST['Email']);
                $usr=test_input($_POST['Username']);
                $pwd=test_input($_POST['Password']);
                $cpwd=test_input($_POST['CPassword']);
                if($pwd === $cpwd)
                {
                    $pwd=_pwdencrypt($pwd);
                    if(check_usr($pdo,$email,$usr))
                    {
                        if(register_usr($pdo,$email,$usr,$pwd))
                        {
                            $m=sha1($usr).".".sha1(strrev($usr));
                            $message=file_get_contents("http://www.r1models.com/email/cpage.php?i=$usr&&m=$m");
                            $sub="Confirmation Mail";
                            confmail($email,$sub,$message);
                        }
                        else
                            header('Location: ../error/err_user.php?error=4');
                    }
                    else
                        header('Location: ../error/err_user.php?error=2');
                }
                else
                    header('Location: ../error/err_form.php?error=2');
        }
        else
            //var_dump($_POST['g-recaptcha-response']);
            header('Location: ../error/err_cap.html');
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>