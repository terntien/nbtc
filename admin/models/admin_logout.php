<?php session_start();
        unset ( $_SESSION['ses_userid']); 
        unset ( $_SESSION['ses_date']);
        unset ( $_SESSION['ses_time']); 
        session_destroy(); echo "<meta http-equiv='refresh' content='1; URL=../../login.php'>";
?>