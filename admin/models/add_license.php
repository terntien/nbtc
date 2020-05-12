<?php include "../assets/connectDB/connectDB.php";

    $license = $_POST ;
    $insert = 'INSERT INTO form_license VALUE (
        null,
        "'.$license['license_heading'].'",
        "'.$license['license_url'].'"
    )';
    $query = $conn->query($insert);

    if($query){
        header('location:../views/form_license.php');
    }else{
        echo mysql_error('เพิ่มไม่ได้จ้า แง');
    }


?>