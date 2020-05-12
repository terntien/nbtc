<?php include "../assets/connectDB/connectDB.php";

    $update = "UPDATE tower_network SET
    network_name = '{$_POST['network_name']}' ,
    network_code = '{$_POST['network_code']}'
    WHERE network_id = '{$_POST['id']}'";
    $query = $conn->query($update);
    
    if($query){
        header ('Location:../views/network.php');
    }else{
        echo mysqli_error($conn);exit;
    }
?>
