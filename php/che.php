<?php
    //AJAX Imp. to check EmailID
    require "class.php";
    if(isset($_GET['q']) && !empty($_GET['q']))
    {
        $em=test_input($_GET['q']);
        $sql="SELECT * from Main where Email=?";
        $query=$pdo->prepare($sql);
        $query->execute([$em]);
        $row=$query->fetch(PDO::FETCH_ASSOC);
        if($row)
            echo "";
        else
            echo "Success";
    }
?>