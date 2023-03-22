<?php
    session_start();

    // $recPassId = $_SESSION['recPassId'];
    // echo $recPassId;

    if(isset($_POST['recPassBtn1'])) {
        $err = 0;

        if(isset($_POST['recPass']) && $_POST['recPass'] != ""){

            $recPass = $_POST['recPass'];

        } else {

            $err = 1;
        } 

        if(isset($_POST['recCPass']) && $_POST['recCPass'] != ""){

            $recCPass = $_POST['recCPass'];

        } else {

            $err = 1;
        } 

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res = $db->query('UPDATE users SET pass = '.$recPass.' WHERE id ='.$shopId.'');

            $affectedRows = $db->affected_rows;  

            if($affectedRows > 0){
                echo 200;
            } else {
                echo 501;
            }
        }
    } else {

        echo 'Failed!';
    }
?>