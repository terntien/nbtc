<?php include "../assets/connectDB/connectDB.php";

    $customer = $_POST ;
    $insert = 'INSERT INTO tower_customer VALUE (
        null,
        "'.$customer['customer_code'].'",
        "'.$customer['customer_name'].'"
    )';
    $query = $conn->query($insert);

    if($query){
        header('location:../views/customer.php');
    }else{
        echo mysqli_error('ไม่สามารถเพิ่มข้อมูลได้ กรุณาสู้ๆนะจ่ะ');
    }


?>