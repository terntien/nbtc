<?php include "../assets/connectDB/connectDB.php";
// print_r ($_POST);exit;
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
                $update_tower = "UPDATE tower SET
                    tower_image         = '{$new_name}',
                    tower_sending       = '{$_POST['tower_sending']}',
                    tower_typeleaf      = '{$_POST['tower_typeleaf']}',
                    tower_parish        = '{$_POST['tower_parish']}',
                    tower_district      = '{$_POST['tower_district']}',
                    tower_pravince      = '{$_POST['tower_pravince']}',
                    tower_code          = '{$_POST['tower_code']}',
                    tower_customer      = '{$_POST['customer_select']}',
                    tower_network       = '{$_POST['network_select']}',
                    LATDEG              = '{$_POST['LATDEG']}',
                    LONGDEG             = '{$_POST['LONGDEG']}',
                    tower_license_code  = '{$_POST['tower_license_code']}',
                    tower_license_date  = '{$_POST['tower_license_date']}'
                    WHERE tower_id      = '{$_POST['id']}'";
                $query = $conn->query($update_tower);
        }
        // print_r ($_POST);exit;
        $tower = $_POST ;
        $update_tower = "UPDATE tower SET
            tower_sending       = '{$_POST['tower_sending']}',
            tower_typeleaf      = '{$_POST['tower_typeleaf']}',
            tower_parish        = '{$_POST['tower_parish']}',
            tower_district      = '{$_POST['tower_district']}',
            tower_pravince      = '{$_POST['tower_pravince']}',
            tower_code          = '{$_POST['tower_code']}',
            tower_customer      = '{$_POST['customer_select']}',
            tower_network       = '{$_POST['network_select']}',
            LATDEG              = '{$_POST['LATDEG']}',
            LONGDEG             = '{$_POST['LONGDEG']}',
            tower_license_code  = '{$_POST['tower_license_code']}',
            tower_license_date  = '{$_POST['tower_license_date']}'
            WHERE tower_id      = '{$_POST['id']}'";
        $query = $conn->query($update_tower);
    
    if($query){
         header ('Location:../views/dash.php');
    }
    else{
        echo mysqli_error($conn);exit;
    }
?>