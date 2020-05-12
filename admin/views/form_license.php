<?php include "header.php"; ?>
  <?php include "menu.php"; ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
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
              <div class="offset-1 col-md-10">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">แบบฟอร์มขอใบอนุญาต</h3>
                  </div>
                  <form action="../models/add_license.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="license_heading">หัวเรื่องแบบฟอร์ม:</label>
                        <input type="text" class="form-control" name="license_heading" placeholder="หัวเรื่องแบบฟอร์ม" required>
                      </div>
                      <div class="form-group">
                        <label for="license_url">URL :</label>
                        <input type="text" class="form-control" name="license_url" placeholder="URL ข้อมูลเว็บ" required>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                  </form>               
                </div>
              </div>
              <div class="offset-1 col-md-10">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">ข้อมูลแบบฟอร์มขอใบอนุญาต</h3>
                  </div>
                    <?php 
                      $license_select = "SELECT * FROM form_license ";
                      $license_query = $conn->query($license_select);
                      // echo mysqli_error($conn);exit;
                      // print_r($license_result);
                    ?>
                    <?php while ($result_secon = $license_query->fetch_assoc()) { ?>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="license_heading">หัวเรื่องแบบฟอร์ม :</label>
                          <p><?= $result_secon['license_heading'] ?></p>
                        </div>
                        <div class="form-group">
                          <label for="license_url">URL :</label>
                          <p><?= $result_secon['license_url'] ?></p>
                          <hr>
                        </div>
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