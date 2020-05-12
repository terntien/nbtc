<?php include "../assets/connectDB/connectDB.php";
    // print_r ($_FILES['tower_image']['name']);exit;

    $new_name = '';
    if ($_FILES['tower_image']['tmp_name']) {
        $new_name = date('Ymd-His');
        if ($_FILES['tower_image']['type'] == 'image/png') {
            $new_name .= '.png';
        }
        if ($_FILES['tower_image']['type'] == 'image/jpg') {
            $new_name .= '.jpg';
        }
        if ($_FILES['tower_image']['type'] == 'image/jpeg') {
            $new_name .= '.jpg';
        }
        if ($_FILES['tower_image']['type'] == 'image/gif') {
            $new_name .= '.gif';
        }
        $uploading = move_uploaded_file($_FILES["tower_image"]["tmp_name"], "../assets/image/tower/" . $new_name);

    }
    $tower = $_POST ;
    // print_r ($_POST);exit;
    // $sum_customer = $_POST['customer_select'];
    // $sum_network   = $_POST['network_select'];
    $insert = 'INSERT INTO tower (tower_image, tower_sending, tower_typeleaf, tower_parish, tower_district, tower_pravince, 
                                    tower_code, LATDEG, LATMIN, LATSEC, LATDIR, 
                                        LONGDEG, LONGMIN, LONGSEC, LONGDIR, tower_customer, 
                                            tower_network, tower_license_code, tower_license_date) VALUES (
        "'.$new_name.'",
        "'.$tower['tower_sending'].'", 
        "'.$tower['tower_typeleaf'].'",
        "'.$tower['tower_parish'].'",
        "'.$tower['tower_district'].'",
        "'.$tower['tower_pravince'].'",
        "'.$tower['tower_code'].'",
        "'.$tower['LATDEG'].'",
        0,
        0,
        0,
        "'.$tower['LONGDEG'].'",
        0,
        0,
        0,
        "'.$tower['customer_select'].'",
        "'.$tower['network_select'].'",
        "'.$tower['tower_license_code'].'",
        "'.$tower['tower_license_date'].'"
    )';
    
    $query = $conn->query($insert);

    if($query){
        $msg = 'บันทึกข้อมูลเรียบร้อยแล้ว';
        header('location:../views/map.php');
    }else{
        $msg = 'ไม่สามารถเพิ่มข้อมูล';
        echo mysqli_error($conn);exit;
    }


?>