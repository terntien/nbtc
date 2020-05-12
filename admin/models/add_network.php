<?php include "../assets/connectDB/connectDB.php";

    $network = $_POST ;
    $insert = 'INSERT INTO tower_network VALUE (
        null,
        "'.$network['network_name'].'",
        "'.$network['network_code'].'"
    )';
    $query = $conn->query($insert);

    if($query){
        header('location:../views/network.php');
    }else{
        echo mysql_error('เพิ่มไม่ได้จ้า แง');
    }


?>