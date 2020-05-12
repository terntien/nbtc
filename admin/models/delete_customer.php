<?php include "../assets/connectDB/connectDB.php";
    print_r($_POST);exit;
    
    $delete_customer = "DELETE FROM tower_customer WHERE customer_id = {$_GET['id']}" ;
    $query = $conn->query($delete_customer);

    if($query){
        header ('Location:../views/customer.php');
    }else{
        echo mysqli_error($conn);exit;
    }
?>
