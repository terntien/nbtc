<?php include "header.php"; ?>
<?php include "menu.php"; ?> 
<div class="content-wrapper">
      <!-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                      สำนักงาน กสทช. เขต 6 ขอนแก่น
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" >Home</a></li>
                        <li class="breadcrumb-item active">หน้าแรก</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
   
    <section class="content">
        <div class="row row-main">
            <div class="col-md-12 logo text-center">
                <img src="../assets/image/NBTC.png" alt="logonbtc">
            </div>
            <!-- <div class="col-md-8 text-nbtc ">
                <h2>สำนักงาน กสทช. ภาค 2 จังหวัดขอนแก่น</h2>
                <p>คณะกรรมการกิจการกระจายเสียง กิจการโทรทัศน์ และกิจการโทรคมนาคมแห่งชาติ</p>
            </div> -->
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="col-md-12">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">แก้ไขข้อมูลผู้ให้บริการ </h3>
                                </div>
                                <div class="card-body">
                                <?php 
                                    // print_r ($_GET);exit;
                                    $customer_select = "SELECT * FROM tower_customer WHERE customer_id = '{$_GET['id']}'";
                                    $customer_query = $conn->query($customer_select);
                                    $result = $customer_query->fetch_assoc();
                                    // print_r ($result);exit;

                                ?>
                                    <form action="../models/update_customer.php" method="POST">
                                        <div class="card-body">
                                        <div class="form-group">
                                            <label for="customer_code">รหัสผู้ให้บริการ :</label>
                                            <input type="text" class="form-control" name="customer_code" value="<?=$result['customer_code'] ?>" require>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_name">ชื่อผู้ให้บริการ  :</label>
                                            <input type="text" class="form-control" name="customer_name" value="<?=$result['customer_name'] ?>" require>
                                        </div>
                                        </div>
                                        <input type="hidden" class="from-control" name="id" value="<?= $_GET['id']?>" >
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>



  
<?php include "footer.php";?>