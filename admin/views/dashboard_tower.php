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
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <section class="col-lg-12 connectedSortable">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Dashboard</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                <form action="../models/update_tower.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body ">
                  
                    <div class="form-group">
                        <label for="tower_image">เพิ่มรูปภาพของเสา:</label>
                        <input type="file" class="form-control-file" name="tower_image" id="tower_image" > 
                    </div>
                    <?php
                          $customer_select = "SELECT * FROM tower_customer ";
                          $customer_query = $conn->query($customer_select);
                          // print_r ($customer_query);exit;
                          // print_r($result = $customer_query->fetch_assoc());exit; 
                          // echo mysqli_error($conn);exit;
                        ?>
                      <div class="form-group">
                        <label>ผู้ให้บริการ :</label>
                        <select class="form-control" name="customer_select">
                          <?php while ($dashboard_result = $customer_query->fetch_assoc()) { ?>
                            <option value="<?= $dashboard_result['customer_id'] ?>" >
                                              <?= $dashboard_result['customer_code']. " : " .$dashboard_result['customer_name']?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>

                      <?php
                          $network_secon_select = "SELECT * FROM tower_network";
                          $network_secon_query = $conn->query($network_secon_select);
                      ?>
                      <div class="form-group">
                          <label>เครือข่ายร่วม :</label>
                          <select class="form-control" name="network_select">
                              <?php while ($result_secon = $network_secon_query->fetch_assoc()) { ?>
                              <option value="<?= $result_secon['network_id'] ?>" require> 
                                                <?=  $result_secon['network_code']. " : " .$result_secon['network_name'] ?>
                              </option>
                              <?php } ?>
                          </select>
                      </div>
                    <?php
                          // print_r ($_GET);exit;
                          $dashboard = "SELECT * FROM tower 
                                                  LEFT JOIN tower_customer ON customer_id = customer_id
                                                      LEFT JOIN tower_network ON network_id = network_id
                                                          WHERE tower_id = '{$_GET['id']}'";
                          $dashboard_query = $conn->query($dashboard);
                          $dashboard_result = $dashboard_query->fetch_assoc();
                          // print_r ($dashboard_result);exit;
                          // print_r ($result = $dashboard_query->fetch_assoc());exit; 
                          // echo mysqli_error($conn);exit;
                        ?>
                    <div class="form-group">
                        <label for="tower_parish">ตำบล</label>
                        <input type="text" class="form-control" name="tower_parish" value="<?=$dashboard_result['tower_parish'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_district">อำเภอ</label>
                        <input type="text" class="form-control" name="tower_district" value="<?=$dashboard_result['tower_district'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_pravince">จังหวัด</label>
                        <input type="text" class="form-control" name="tower_pravince" value="<?= $dashboard_result['tower_pravince']?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_code">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name="tower_code" value="<?= $dashboard_result['tower_code']?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_license_code">รหัสใบอนุญาต</label>
                        <input type="text" class="form-control" name="tower_license_code" value="<?= $dashboard_result['tower_license_code']?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_license_date">วันขอใบอนุญาต</label>
                        <input type="date" class="form-control" name="tower_license_date" value="<?= $dashboard_result['tower_license_date']?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_typeleaf">ประเภทใบตั้ง</label>
                        <input type="text" class="form-control" name="tower_typeleaf" value="<?= $dashboard_result['tower_typeleaf']?>">
                    </div>
                    <div class="form-group">
                        <label for="tower_sending">กำลังส่ง</label>
                        <input type="text" class="form-control" name="tower_sending" value="<?= $dashboard_result['tower_sending']?>">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="LATDEG">Lattitude</label>
                          <input type="text" class="form-control" name="LATDEG" value="<?= $dashboard_result['LATDEG']?>">
                      </div>
                      <!-- <div class="form-group col-md-3">
                          <label for="LATMIN">LATMIN</label>
                          <input type="text" class="form-control" name="LATMIN" value="<?= $dashboard_result['LATMIN']?>" >
                      </div>
                      <div class="form-group col-md-3">
                          <label for="LATSEC">LATSEC</label>
                          <input type="text" class="form-control" name="LATSEC" value="<?= $dashboard_result['LATSEC']?>">
                      </div>
                      <div class="form-group col-md-3">
                          <label for="LATDIR">LATDIR</label>
                          <input type="text" class="form-control" name="LATDIR" value="<?= $dashboard_result['LATDIR']?>">
                      </div> -->
                      
                      <div class="form-group col-md-12">
                          <label for="LONGDEG">Longtitude</label>
                          <input type="text" class="form-control" name="LONGDEG" value="<?= $dashboard_result['LONGDEG']?>">
                      </div>
                      <!-- <div class="form-group col-md-3">
                          <label for="LONGMIN">LONGMIN</label>
                          <input type="text" class="form-control" name="LONGMIN" value="<?= $dashboard_result['LONGMIN']?>">
                      </div>
                      <div class="form-group col-md-3">
                          <label for="LONGSEC">LONGSEC</label>
                          <input type="text" class="form-control" name="LONGSEC" value="<?= $dashboard_result['LONGSEC']?>">
                      </div>
                      <div class="form-group col-md-3">
                          <label for="LONGDIR">LONGDIR</label>
                          <input type="text" class="form-control" name="LONGDIR" value="<?= $dashboard_result['LONGDIR']?>">
                      </div> -->
                    </div>
                  </div>
                  <input type="hidden" class="from-control" name="id" value="<?= $_GET['id']?>" >
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                  </div>
                </form>
              </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </div>
    </section>





  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.php";?>