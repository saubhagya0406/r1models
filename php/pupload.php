<?php
        require "class.mod.php";
        try
        {
            session_start();
            $name=test_input($_FILES['file']['name']);
            $tname=test_input($_FILES['file']['tmp_name']);
            $type=$_FILES['file']['type'];
            $ext=explode('.',$name);
            if(($type === "image/png" || $type === "image/jpeg" || $type === "image/jpg") && (count($ext) == 2) && ((strcasecmp($ext[1],"jpeg") === 0) || (strcasecmp($ext[1],"png") === 0) || (strcasecmp($ext[1],"jpg") === 0)))
            {
                $size=$_FILES['file']['size'];
                if($size <= 5000000)
                {
                    if($_FILES['file']['error']>0)
                    {
                        $val=$_FILES['file']['error'];
                        header("Location: ../error/err_file.php?error=4&val=$val");
                    }
                    else
                    {
                        $dirpath=$_SESSION['path'];
                        $path=$dirpath."/".$name;
                        
                        //Delete previous profile picture.
                        if($_SESSION['pp'])
                        {
                            $prepath=$dirpath."/".$_SESSION['pp'];
                            unlink($prepath);
                        }
                        if(file_exists($path))
                            header('Location: ../error/err_file.php?error=2');
                        else
                        {
                            move_uploaded_file($tname,$path);
                            $sql="UPDATE Profile SET PP=? where Username=?";
                            $query=$pdo->prepare($sql);
                            $query->execute([$name,$_SESSION['usr']]);
                            $_SESSION['pp']=$name;
                            header('Location: ../bio.php');
                        }
                    }
                }
                else
                   header('Location: ../error/err_file.php?error=3');
            }
            else
                header('Location: ../error/err_file.php?error=1');
        }
        catch(PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
?>