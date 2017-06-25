<?php
    //After User confirms EmailAdd
    require "class.mod.php";
    try
    {
        $usr=$_GET['i'];
        $m=explode(".",$_GET['m'])[0];
        $sql="SELECT * from Status WHERE Username=? AND Code=?";
        $query=$pdo->prepare($sql);
        $query->execute([$usr,$m]);
        $row=$query->fetch(PDO::FETCH_ASSOC);
        if($row)
        {
            if($row['CStatus']!='Y')
            {
                conf_usr($pdo,$usr);
                //Make a directory for each user to upload pictures.
                if(!check_usr_gal($pdo,$usr))
                    make_gallery($pdo,$id,$usr);
                session_fetch($pdo,$usr);
                header('Location: http://www.r1models.com/bio');
            }
            else
                header('Location: http://www.r1models.com/');
        }
        else
            header('Location: http://www.r1models.com/error/err_user.php?error=1');
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>