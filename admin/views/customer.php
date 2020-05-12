<?php include "header.php"; ?>
<?php include "menu.php"; ?> 


<link rel="stylesheet" type="text/css" href="../assets/css/customer.css">

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ผู้ให้บริการ</li>
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
              <div class="offset-md-1 col-md-10 offset-md-1">

                <div class="card card-success">
                  <div class="card-header">
                <h3 class="card-title">ผู้ให้บริการ</h3>
                  </div>
                  <form action="../models/add_customer.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="customer_code">รหัสผู้ให้บริการ :</label>
                        <input type="number" class="form-control" name="customer_code" placeholder="รหัสผู้ให้บริการ" require>
                      </div>
                      <div class="form-group">
                        <label for="customer_name">ชื่อผู้ให้บริการ  :</label>
                        <input type="text" class="form-control" name="customer_name" placeholder="ชื่อผู้ให้บริการ" require>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="offset-md-1 col-md-10 offset-md-1">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">ข้อมูลผู้ให้บริการ </h3>
                  </div>
                    <?php 
                      $customer_select = "SELECT * FROM tower_customer ";
                      $customer_query = $conn->query($customer_select);
                      // echo mysqli_error($conn);exit;
                      // print_r($customer_result);
                      
                    ?>
                    <?php while ($result_secon = $customer_query->fetch_assoc()) { ?>
                      <div class="card-body">
                        <div class="row">
                          <div class="offset-1 col-md-2">
                            <div class="form-group">
                              <label for="customer_code">รหัสผู้ให้บริการ :</label>
                              <p><?= $result_secon['customer_code'] ?></p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="customer_name">ชื่อผู้ให้บริการ :</label>
                              <p><?= $result_secon['customer_name'] ?></p>
                            </div>
                          </div>
                          <div class="col-md-3" style="margin-top:15px;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" <?= $result_secon['customer_id'] ?>>
                              <a href ="edit_customer.php?id=<?= $result_secon['customer_id'] ?> "id="link">แก้ไขข้อมูล</a>
                            </button>

                            <!-- Modal -->

                            <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลผู้ให้บริการ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  
                                    <form action="../models/add_customer.php" method="POST">

                                      <div class="card-body">
                                        <div class="form-group">
                                          <label for="customer_code">รหัสผู้ให้บริการ :</label>
                                          
                                          <input type="number" class="form-control" name="customer_code" value="" require>
                                        </div>
                                        <div class="form-group">
                                          <label for="customer_name">ชื่อผู้ให้บริการ  :</label>
                                          <input type="text" class="form-control" name="customer_name" value=""  require>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- End Modal -->
                          </div>
                        </div><hr>
                      </div>
                    <?php } ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->




  
 <?php include "footer.php";?>