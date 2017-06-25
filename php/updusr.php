<?php
    //After User updates bio.html
    require "class.mod.php";
    try
    {
            session_start();
            $fname=test_input($_POST['first_name']);
            $lname=test_input($_POST['last_name']);
            $phone=test_input($_POST['phone']);
            $state=test_input($_POST['state']);
            $city=test_input($_POST['city']);
            $zip=test_input($_POST['zip']);
            $web=stripslashes(htmlspecialchars(trim( $_POST['website'])));
            $about=stripslashes(htmlspecialchars(trim( $_POST['about'])));
            $h=test_input($_POST['height']);
            $w=test_input($_POST['weight']);
            $a=test_input($_POST['age']);
            $fb=stripslashes(htmlspecialchars(trim(($_POST['fb']))));
            $insta=stripslashes(htmlspecialchars(trim( $_POST['insta'])));
            $tweet=stripslashes(htmlspecialchars(trim( $_POST['tweet'])));
            $id=$_SESSION['id'];
            $usr=$_SESSION['usr'];
            $em=$_SESSION['email'];

            //UPDATE table 'About';
            $sql="UPDATE About SET FName=?,LName=?,Phone=?,State=?,City=?,Zip=?,Web=?,About=? where Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$fname,$lname,$phone,$state,$city,$zip,$web,$about,$usr]);

            //UPDATE table 'Bio'
            $sql="UPDATE Bio SET Height=?,Weight=?,Age=? where Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$h,$w,$a,$usr]);

             //UPDATE table 'Connect'
            $sql="UPDATE Connect SET Facebook=?,Instagram=?,Twitter=? where Username=?";
            $query=$pdo->prepare($sql);
            $query->execute([$fb,$insta,$tweet,$usr]);

            session_fetch($pdo,$usr);
            header('Location: ../bio.php');
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>