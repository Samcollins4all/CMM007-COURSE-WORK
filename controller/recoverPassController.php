<?php
    // start session
    session_start();

    if(isset($_POST['recPassBtn'])){
        $err = 0;

        if(isset($_POST['recPassEmail']) && $_POST['recPassEmail'] != ""){

            $recPassEmail = $_POST['recPassEmail'];

        } else {
            $err = 1;
        }

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res = $db->query('SELECT * FROM users WHERE email = "'.$recPassEmail.'" ');

            $numRows = $res->num_rows;

            if($numRows > 0){
                $rows = $res->fetch_assoc();

                $recPassId = $rows['id'];

                $_SESSION['recPassId'] = $rows['id'];
                
                echo $recPassId;
            } else {
                
                echo 501;
            }
        }
    } else if(isset($_POST['recCPassBtn'])) {
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

        if(isset($_POST['recPassId']) && $_POST['recPassId'] != ""){

            $recPassId = $_POST['recPassId'];

        } else {

            $err = 1;
        } 

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res = $db->query('UPDATE users SET pass = '.$recPass.' WHERE id ='.$recPassId.'');

            $affectedRows = $db->affected_rows;  

            if($affectedRows > 0){
                echo 200;
            } else {
                echo 501;
            }
        }

    } else if(isset($_POST['recLogPassBtn'])){
        $err = 0;

        if(isset($_POST['recPassLogEmail']) && $_POST['recPassLogEmail'] != ""){

            $recPassLogEmail = $_POST['recPassLogEmail'];

        } else {
            $err = 1;
        }

        if(isset($_POST['recLogPass']) && $_POST['recLogPass'] != ""){

            $recLogPass = $_POST['recLogPass'];

        } else {
            $err = 1;
        }

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res = $db->query('SELECT * FROM users WHERE email = "'.$recPassLogEmail.'" AND pass = "'.$recLogPass.'" ');

            $numRows = $res->num_rows;

            if($numRows > 0){
                $rows = $res->fetch_assoc();

                $_SESSION['loggedIn'] = true;
                $_SESSION['id'] = $rows['id'];
                $_SESSION['name'] = $rows['fName'].' '.$rows['lName'];
                $_SESSION['userType'] = $rows['userType'];
                
                echo 200;
            } else {
                
                echo 501;
            }
        }
    }
?>