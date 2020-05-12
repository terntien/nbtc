<?php 
    session_start();
    $server = "localhost";
    $user = "root";
    $password = "1234";
    $db_name = "nbtc_tb";
    // print_r($_SESSION);exit;
    $conn = new mysqli($server,$user,$password,$db_name);

    if($conn->connect_errno) {
        printf("ไม่สามารถเชื่อมต่อฐานข้อมูลได้", $conn->connect_error);
        exit();
    }
    mysqli_set_charset($conn, 'utf8');


    // print_r($_POST);exit;
    (string) $username = $_POST["users_email"];
    (string) $password = $_POST['users_password'];
        $check_login = "SELECT * FROM users WHERE 
                                        users_email = '".$username."' and
                                        users_password = '".$password."'
                                        ";
        $check_login2 = $conn->query($check_login);
        $check_num = $check_login2->num_rows;
        // print_r($check_login2->fetch_assoc());exit;

        if($check_num <= 0) {
            echo "
                <!DOCTYPE html>
                <html>
                <head>
                    <title>ชื่อผู้ใช้งานหรือรหัสผ่านผิด</title>
                    <link rel='stylesheet' type='text/css' href='css/login.css'>
                </head>

                <body>
                    <div class='boxLogin'>
                        <div>
                            ชื่อผู้ใช้งาน หรือ รหัสผ่านผิด<br>
                            กรุณาเข้าสู่ระบบใหม่อีกครั้ง<br>
                            <a href='../../login.php'>กลับ</a>
                        </div>
                    </div>

                </body>
                </html>";
        }else{
            $user_member = $check_login2->fetch_assoc();
            $_SESSION['users_id'] = $user_member['users_id'];
            $_SESSION['users_fname'] = $user_member['users_fname'];
            $_SESSION['users_lname'] = $user_member['users_lname'];
            $_SESSION['users_status'] = $user_member['users_status'];
            if($user_member['users_status'] == 1){
                header('location:../views/dash.php');
            }else{
                header('location:../../login.php');
            }
            
        }
?>
