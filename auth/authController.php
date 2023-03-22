<?php
    session_start();

    if(isset($_POST['regBtn'])){
        $err = 0;

        if(isset($_POST['fName']) && $_POST['fName'] != ""){
            $fName = $_POST['fName'];
        } else {
            $err = 1;
        }
        if(isset($_POST['regLName']) && $_POST['regLName'] != ""){
            $regLName = $_POST['regLName'];
        } else {
            $err = 1;
        }
        if(isset($_POST['oName']) && $_POST['oName'] != ""){
            $oName = $_POST['oName'];
        } else {
            $err = 1;
        }
        if(isset($_POST['phone']) && $_POST['phone'] != ""){
            $phone = $_POST['phone'];
        } else {
            $err = 1;
        }
        if(isset($_POST['email']) && $_POST['email'] != ""){
            $email = $_POST['email'];
        } else {
            $err = 1;
        }
        if(isset($_POST['pass']) && $_POST['pass'] != ""){
            $pass = $_POST['pass'];
        } else {
            $err = 1;
        }
        if(isset($_POST['cPass']) && $_POST['cPass'] != ""){
            $cPass = $_POST['cPass'];
        } else {
            $err = 1;
        }
        
        if($err == 0){
            require('../../shopFinderDbConfig.php');
            // echo $fName, $regLName, $oName, $phone, $email, $pass;

            $res = $db->query('INSERT INTO users(fName, lName, oName, email, phone, pass) VALUES ("'.$fName.'", "'.$regLName.'", "'.$oName.'", "'.$email.'", "'.$phone.'", "'.$pass.'")');

            if($res){
                $userId = $db->insert_id;

                echo 200;
                
            } else {

                echo 501;
            }
        }
    } else if(isset($_POST['logBtn'])){
        $err = 0;

        if(isset($_POST['logEmail']) && $_POST['logEmail'] !=""){
            $logEmail = $_POST['logEmail'];
        } else {
            $err = 1;
        } 
        if(isset($_POST['logPass']) && $_POST['logPass'] !=""){
            $logPass = $_POST['logPass'];
        } else {
            $err = 1;
        }

        if($err == 0){
            require('../../shopFinderDbConfig.php');

            $res1 = $db->query('SELECT * FROM users WHERE email="'.$logEmail.'" AND pass="'.$logPass.'"');

            $numRows = $res1->num_rows;

            if($numRows > 0){
                $rows = $res1->fetch_assoc();

                $_SESSION['loggedIn'] = true;
                $_SESSION['id'] = $rows['id'];
                $_SESSION['feedbackUserId'] = $rows['id'];
                $_SESSION['name'] = $rows['fName'].' '.$rows['lName'];
                $_SESSION['userType'] = $rows['userType'];

                echo 200;
            } else {

                echo 501;
            }
        }
    }
?>