<?php
    require "class.mod.php";
    try
    {
        session_start();
        if(isset($_SESSION['usr']))
            header('Location: ../profile.php');
        else
        {
            if(isset($_POST['submit']))
            {
                $usr=test_input($_POST['user']);
                $eid=test_input($_POST['email']);
                $sql="SELECT * from Main WHERE Username=? AND Email=?";
                $query=$pdo->prepare($sql);
                $query->execute([$usr,$eid]);
                $row=$query->fetch(PDO::FETCH_ASSOC);
                if($row)
                {
                    $code=hash("haval128,5",rand());
                    $current=time();
                    $exp=$current+(60*60*12);
                    if(checkPR($pdo,$usr))
                        remPR($pdo,$usr);
                    $sql="INSERT INTO Pwd_Recov (Username,Token,Current,Expiry) Values (?,?,?,?)";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr,$code,$current,$exp]);
                    $message=file_get_contents("http://www.r1models.com/email/rpage.php?i=$code&u=$usr");
                    $sub="Reset your Password";
                    confmail($eid,$sub,$message);
                    header("Location: ../reset.php?u=$usr");
                }
                else
                    header('Location: ../error/err_user.php?error=1');
            }
            else
                header('Location: ../error/err_form.php?error=3');
        }
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>