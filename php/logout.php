<?php
    try
    {
        session_start();
        if(isset($_SESSION['usr']))
            session_destroy();
        header('Location: ../index.html');
    }
    catch(PDOException $e)
    {
        header('Location: ../error/err_sql.html');
    }
?>