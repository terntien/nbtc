<?php include "../assets/connectDB/connectDB.php";

    $update = "UPDATE tower_customer SET
    customer_name = '{$_POST['customer_name']}' ,
    customer_code = '{$_POST['customer_code']}'
    WHERE customer_id = '{$_POST['id']}'";
    $query = $conn->query($update);
    
    if($query){
        header ('Location:../views/customer.php');
    }else{
        echo mysqli_error($conn);exit;
    }
?>
