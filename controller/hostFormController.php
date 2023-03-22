<?php
    session_start();

    if(isset($_POST['fileUpload'])){
        $err = 0;

        if(isset($_POST['addr']) && $_POST['addr'] != ""){

            $addr = $_POST['addr'];

        } else {
            $err = 1;
        }
        if(isset($_POST['exact']) && $_POST['exact'] != ""){

            $exact = $_POST['exact'];

        } else {

            $err = 1;

        }
        if(isset($_POST['title']) && $_POST['title'] != ""){

            $title = $_POST['title'];

        } else {

            $err = 1;

        } 
        if(isset($_POST['houseD']) && $_POST['houseD'] != ""){

            $houseD = $_POST['houseD'];

        } else {

            $err = 1;

        }
        if(isset($_POST['price']) && $_POST['price'] != ""){

            $price = $_POST['price'];

        } else {

            $err = 1;

        }

        if(isset($_FILES['file']['name'])){
            $imageDir = '../media';
            $uploadOk = 0;
            $errMsg = '';

            $fileName = $_FILES['file']['name'];
            $fileExt = strrchr($fileName, ".");

            if($fileExt == '.jpg' || $fileExt == '.png'){
                $targetDir = $imageDir;
            } else {
                $uploadOk = 1;
                $errMsg .= '<li>Please ensure the file is one of the following file types: [jpg, png]</li>';
            }

            $target_file = $targetDir.'/'.basename($fileName);
            if(file_exists($target_file)){
                $uploadOk = 1;
                $errMsg .= '<li>Sorry, file already exists.</li>';
            }

            if($uploadOk == 0){
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                    // file has been uploaded.
                } else {
                    $err = 1;
                    echo 'Sorry, there was an error uploading your file.';
                }
            } else {
                $err = 1;
                echo '<ul>'.$errMsg.'</ul>';
            }
        } else {
            echo 'Sorry, something went wrong!';
            $err = 1;
        }
        if($err == 0){
            // echo $addr, $exact, $title, $houseD, $price, $fileName;
            require('../../shopFinderDbConfig.php');

            $res = $db->query('INSERT INTO choosedplacefile(files, choosedPlaceAddress, exactPlace, title, houseDescription, price, datePosted) VALUES ("'.$fileName.'", "'.$addr.'", "'.$exact.'", "'.$title.'", "'.$houseD.'", "'.$price.'", NOW())');

            if($res){
                $hostId = $db->insert_id;

                $_SESSION['addr'] = $addr;
                $_SESSION['exact'] = $exact;
                $_SESSION['title'] = $title;
                $_SESSION['houseD'] = $houseD;
                $_SESSION['price'] = $price;
                
                echo 200;
            } else {

                echo 501;
            }
        }
    } else {
        header('Location: ../index.php');
    }
