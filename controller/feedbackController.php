<?php
    session_start();
    
    if(isset($_POST['feedbackFormBtn'])){
        $err = 0;

        if(isset($_POST['feedback']) && $_POST['feedback'] != ""){
            $feedback = $_POST['feedback'];
        } else {
            $err = 1;
        }
        if(isset($_POST['feedbackTxtArea']) && $_POST['feedbackTxtArea'] != ""){
            $feedbackTxtArea = $_POST['feedbackTxtArea'];
        } else {
            $err = 1;
        }
        if(isset($_POST['feedbackUserId']) && $_POST['feedbackUserId'] != ""){
            $feedbackUserId = $_POST['feedbackUserId'];
        } else {
            $err = 1;
        }

        if($err == 0){
            require('../../shopFinderDbConfig.php');
            // echo $feedback, $feedbackTxtArea, $feedbackUserId;

            $res = $db->query('INSERT INTO feedback(star, textarea, userId) VALUES ('.$feedback.', "'.$feedbackTxtArea.'", '.$feedbackUserId.')');

            if($res){
                $userId = $db->insert_id;

                echo 200;
                
            } else {

                echo 501;
            }
        }
    } else {
        echo 501;
    }
?>