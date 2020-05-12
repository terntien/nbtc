<?php 
    include "../assets/connectDB/connectDB.php";session_start(); 
    // print_r($_FILES);exit;
    // print_r($_POST);exit;

    if ($_FILES['users_img']['tmp_name']) {
        if ($_FILES['users_img']['tmp_name']) {
                $new_name = date('Ymd-His');
                if ($_FILES['users_img']['type'] == 'image/png') {
                    $new_name .= '.png';
                }
                if ($_FILES['users_img']['type'] == 'image/jpg') {
                    $new_name .= '.jpg';
                }
                if ($_FILES['users_img']['type'] == 'image/jpeg') {
                    $new_name .= '.jpg';
                }
                if ($_FILES['users_img']['type'] == 'image/gif') {
                    $new_name .= '.gif';
                }
                $uploading = move_uploaded_file($_FILES["users_img"]["tmp_name"], "../assets/image/" . $new_name);

                $update = "UPDATE users SET 
                    users_fname     =   '{$_POST['users_fname']}',
                    users_lname     =   '{$_POST['users_lname']}',
                    users_gender    =   '{$_POST['users_gender']}',
                    users_img       =   '{$new_name}',
                    users_address   =   '{$_POST['users_address']}',
                    users_age       =   '{$_POST['users_age']}',
                    users_email     =   '{$_POST['users_email']}',
                    users_password  =   '{$_POST['users_password']}'
                    WHERE users_id  =   '{$_POST['id']}' ";
                $query = $conn->query($update);
        }

    }else{
        $update = "UPDATE users SET 
            users_fname     =   '{$_POST['users_fname']}',
            users_lname     =   '{$_POST['users_lname']}',
            users_gender    =   '{$_POST['users_gender']}',
            users_address   =   '{$_POST['users_address']}',
            users_age       =   '{$_POST['users_age']}',
            users_email     =   '{$_POST['users_email']}',
            users_password  =   '{$_POST['users_password']}'
            WHERE users_id  =   '{$_POST['id']}' ";
        $query = $conn->query($update);
    }
    if($query){
        header ('location:../views/map.php');
    }
    else{
        echo mysqli_error($conn);exit;
    }
    


?>
