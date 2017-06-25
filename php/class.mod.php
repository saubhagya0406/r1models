<?php
    //DATABASE OPERATIONS
    require "class.php";

    //Register a Model
    function register_usr($pdo,$email,$usr,$pwd)
    {
        try
        {
            $sql="INSERT INTO Main (Username,Email,Hash) Values (?,?,?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr,$email,$pwd]);
            $code=sha1($usr);
            $sql="INSERT INTO Status (Username,Code) Values (?,?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr,$code]);
            $sql="INSERT INTO About (Username) Values (?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $sql="INSERT INTO Bio (Username) Values (?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $sql="INSERT INTO Connect (Username) Values (?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $sql="INSERT INTO Gallery (Username) Values (?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $sql="INSERT INTO Profile (Username) Values (?)";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            return 1;
        }
        catch(PDOExcepiton $e)
        {
            header('Location:../error/err_sql.html');
        }
    }

    //Checking if Already Registered
    function check_usr($pdo,$email,$usr)
    {
        try
        {
            $sql="SELECT * from Main where Username=? OR Email=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr,$email]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
                return 0;
            else
                return 1;
        }
        catch(PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Checking if gallery already exists
    function check_usr_gal($pdo,$usr)
    {
        try
        {
            $sql="SELECT * from Gallery WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row["DPath"] === NULL && $row["GStatus"] == 'N')
                return 0;
            else 
                return 1;
        }
        catch(PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Make Gallery for Regsitered Users
    function make_gallery($pdo,$id,$usr)
    {
        try
        {
            $dir="gallery/".md5($usr)."d".$id;
            if(mkdir($dir,0755) && mkdir($dir."/images",0755))
            {
                $sql="UPDATE Gallery SET DPath=?,GCount=?,GStatus=? WHERE Username=?";
                $stat='Y';
                $count=0;
                $query=$pdo->prepare($sql);
                $query->execute([$dir,$count,$stat,$usr]);
            }
            else
               header('Location: ./error/err_dir.html');
        }
        catch(PDOException $e)    
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Confirm User Status
    function conf_usr($pdo,$usr)
    {
        try
        {
            $cstat='Y';
            $sql="UPDATE Status SET CStatus=? WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$cstat,$usr]);
        }
        catch (PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Checking if User Present in Pwd_Recov
    function checkPR($pdo,$usr)
    {
        try
        {
            $sql="SELECT * from Pwd_Recov WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
                return 1;
            else 
                return 0;
        }
        catch(PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Rrmoving User Present in Pwd_Recov
    function remPR($pdo,$usr)
    {
        try
        {
            $sql="DELETE from Pwd_Recov WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
                return 1;
            else 
                return 0;
        }
        catch(PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }
    //SESSION FETCH
    function session_fetch($pdo,$usr)
    {
        try
        {
            session_start();
            //FETCH from Main
            $sql="SELECT * from Main WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['id']=$row['ID'];
                $_SESSION['usr']=$row['Username'];
                $_SESSION['email']=$row['Email'];
            }

            //FETCH from Status
            $sql="SELECT * from Status WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['cstat']=$row['CStatus'];
            }
            
            //FETCH from About
            $sql="SELECT * from About WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['fname']=$row['FName'];
                $_SESSION['lname']=$row['LName'];
                $_SESSION['phone']=$row['Phone'];
                $_SESSION['state']=$row['State'];
                $_SESSION['city']=$row['City'];
                $_SESSION['zip']=$row['Zip'];
                $_SESSION['web']=$row['Web'];
                $_SESSION['about']=$row['About'];
            }

            //FETCH from Bio
            $sql="SELECT * from Bio WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['h']=$row['Height'];
                $_SESSION['w']=$row['Weight'];
                $_SESSION['a']=$row['Age'];
            }

            //FETCH from Gallery
            $sql="SELECT * from Gallery WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['path']=$row['DPath'];
                $_SESSION['gstat']=$row['GStatus'];
                $_SESSION['count']=$row['GCount'];
            }

            //FETCH from Profile
            $sql="SELECT * from Profile WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['usr']=$usr;
                $_SESSION['pv']=$row['PViews'];
                $_SESSION['pp']=$row['PP'];
            }

            //FETCH from Connect
            $sql="SELECT * from Connect WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $_SESSION['fb']=$row['Facebook'];
                $_SESSION['insta']=$row['Instagram'];
                $_SESSION['tweet']=$row['Twitter'];
            }      
        }
        catch (PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }

    //Profile Fetch
    function profile_fetch($pdo,$usr)
    {
        try
        {
            $sql="SELECT * from Profile WHERE Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$usr]);
            $row=$query->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $USER['usr']=$usr;
                $USER['pv']=$row['PViews'];
                $USER['pp']=$row['PP'];

                //FETCH from Main
                $sql="SELECT * from Main WHERE Username=?";
                $query=$pdo->prepare($sql);
                $query->execute([$usr]);
                $row=$query->fetch(PDO::FETCH_ASSOC);
                if($row)
                {
                    $USER['email']=$row['Email'];
                
                    //FETCH from About
                    $sql="SELECT * from About WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr]);
                    $row=$query->fetch(PDO::FETCH_ASSOC);
                    if($row)
                    {
                        $USER['fname']=$row['FName'];
                        $USER['lname']=$row['LName'];
                        $USER['phone']=$row['Phone'];
                        $USER['state']=$row['State'];
                        $USER['city']=$row['City'];
                        $USER['zip']=$row['Zip'];
                        $USER['web']=$row['Web'];
                        $USER['about']=$row['About'];
                    }

                    //FETCH from Bio
                    $sql="SELECT * from Bio WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr]);
                    $row=$query->fetch(PDO::FETCH_ASSOC);
                    if($row)
                    {
                        $USER['h']=$row['Height'];
                        $USER['w']=$row['Weight'];
                        $USER['a']=$row['Age'];
                    }

                    //FETCH from Gallery
                    $sql="SELECT * from Gallery WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr]);
                    $row=$query->fetch(PDO::FETCH_ASSOC);
                    if($row)
                    {
                        $USER['path']=$row['DPath'];
                        $USER['count']=$row['GCount'];
                    }

                    //FETCH from Connect
                    $sql="SELECT * from Connect WHERE Username=?";
                    $query=$pdo->prepare($sql);
                    $query->execute([$usr]);
                    $row=$query->fetch(PDO::FETCH_ASSOC);
                    if($row)
                    {
                        $USER['fb']=$row['Facebook'];
                        $USER['insta']=$row['Instagram'];
                        $USER['tweet']=$row['Twitter'];
                    }
                    return $USER;
                }
                else
                    header('Location:http://www.r1models.com/error/err_user.php?error=1');
            }
            else
                header('Location: http://www.r1models.com/error/err_user.php?error=1');
        }
        catch (PDOException $e)
        {
            header('Location: ../error/err_sql.html');
        }
    }
?>