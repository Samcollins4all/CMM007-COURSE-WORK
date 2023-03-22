<?php
    session_start();

    if(isset($_POST['delShopBtn'])) {
        $err = 0;

        if(isset($_POST['shopId']) && $_POST['shopId'] != ""){

            $shopId = $_POST['shopId'];

        } else {

            $err = 1;
        } 

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res = $db->query('UPDATE choosedplacefile SET dateDeleted = NOW() WHERE id ='.$shopId.'');

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