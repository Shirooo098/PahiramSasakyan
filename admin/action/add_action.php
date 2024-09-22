<?php
    include "connection.php";

    if(isset($_POST['submit'])){
        $model = $_POST['model'];
        $brand = $_POST['brand'];
        $quantity = $_POST['quantity'];
        if($_FILES['image']['error'] === 4){
            echo
            "<script> alert('Image does not Exist')</script>";
        } else  if(!$model || !$brand || !$quantity || !$_FILES){
            echo "<script> alert('Please Fill up the form!') </script>";
        } else {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $tmpName = $_FILES['image']['tmp_name'];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if(!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert('Invalid Image Extension')</script>";
            }
            else if ($fileSize > 10000000){
                echo
                "<script> alert('Image Size is too large')</script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                $destination = $_SERVER['DOCUMENT_ROOT'] . '/PahiramSasakyan/carsImg/' . $newImageName;

                move_uploaded_file($tmpName, $destination);
                $query = "INSERT INTO carsTbl (carId, model, brand, quantity, image )VALUES ('', '$model', '$brand', '$quantity', '$newImageName')";

                mysqli_query($conn, $query);
                echo 
                "<script> alert('Submission Success!')</script>";
            }
        }
       
    }

?>