<?php
    //AJAX Imp. to check Username
    require "class.php";
    if(isset($_GET['q']) && !empty($_GET['q']))
    {
        $usr=test_input($_GET['q']);
        $sql="SELECT * from Main where Username=?";
        $query=$pdo->prepare($sql);
        $query->execute([$usr]);
        $row=$query->fetch(PDO::FETCH_ASSOC);
        if($row)
            echo "";
        else
            echo "Success";
    }
?>