<?php
    require "class.mod.php";
    try
    {
        $token=test_input($_POST['Token']);
        $pwd=test_input($_POST['Password']);
        $cpwd=test_input($_POST['CPassword']);
        $sql="SELECT * from Pwd_Recov WHERE Token=?";
        $query=$pdo->prepare($sql);
        $query->execute([$token]);
        $row=$query->fetch(PDO::FETCH_ASSOC);
        if($row)
        {
            $usr=$row['Username'];
            $curr=$row['Current'];
            $exp=$row['Expiry'];
            $t=time();
            if(($curr<=$t) && ($t<=$exp))
            {
                if($pwd === $cpwd)
                {
                    $pwd=_pwdencrypt($pwd);
                    $sql="UPDATE Main SET Hash=? WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$pwd,$usr]);
                    remPR($pdo,$usr);
                    header('Location: ../index.html');
                }
                else 
                    header('Location: ../error/err_form.php?error=2');
            }
            else
            {
                remPR($pdo,$usr);
                header('Location: ../error/err_exp.html');
            }
        }
        else
            header('Location: ../error/err_user.php?error=5');
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>