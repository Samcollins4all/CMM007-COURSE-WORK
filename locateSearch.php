<?php
    session_start();

    if(isset($_POST['searchBtn'])){
        $err = 0;

        if(isset($_POST['search']) && $_POST['search'] != ""){

            $search = $_POST['search'];

        } 
        else {

            $err = 1;
        }
        
        if($err == 0){

            require('../shopFinderDbConfig.php');

            $res = $db->query('INSERT INTO userspreferedplace(usersChoice, bookedDate) VALUES ("'.$search.'", NOW())');

            if($res){
                $userId = $db->insert_id;

                $_SESSION['choosed'] = true;
                $_SESSION['id'] = $userId;
                $_SESSION['search'] = $search;
                // $_SESSION['checkInDateInput'] = $checkInDateInput;
                // $_SESSION['checkOutDateInput'] = $checkOutDateInput;
                // $_SESSION['addGuestsInput'] = $addGuestsInput;

                echo 200;

            } else {
                
                echo 501;
            }
        }
    } else {
        echo 501;
    }
?>