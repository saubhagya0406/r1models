<?php
    //After User Logs In
        require "class.mod.php";
        session_start();
        if(isset($_SESSION['usr']))
            header('Location: ../profile.php');
        else
        {
            try
            {
                if(isset($_POST['submit']))
                {
                    $usr=test_input($_POST['Username']);
                    $pwd=test_input($_POST['Password']);
                    $sql="SELECT * from Main WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr]);
                    $row=$query->fetch(PDO::FETCH_ASSOC);
                    if($row)
                    {
                        $hash=$row['Hash'];
                        if(password_verify($pwd,$hash))
                        {
                            session_fetch($pdo,$usr);
                            if($_SESSION['cstat'] != 'Y')
                            {
                                header('Location: ../error/err_conf.html');
                                session_destroy();
                            }
                            else
                                header('Location: ../bio');
                        }
                        else
                            header('Location: ../error/err_user.php?error=3');
                    }
                    else
                        header('Location: ../error/err_user.php?error=1');
                }
                else
                    header('Location: ../error/err_form.php?error=3');
            }
            catch(PDOException $e)
            {
                header('Location: ../error/err_sql.html');
            }
        }
?>