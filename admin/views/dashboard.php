<?php include "header.php"; ?>
  <?php include "menu.php"; ?> 
  <!-- Content Wrapper. Contains page content -->
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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="row row-main">
                  <div class="col-md-12 logo text-center">
                      <img src="../assets/image/NBTC.png" alt="logonbtc">
                  </div>
              <section class="col-lg-12 connectedSortable">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">เพิ่มข้อมูลเสาสัญญาณ</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                  <form action="../models/add_tower.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body ">
                      <div class="form-group">
                          <label for="tower_image">เพิ่มรูปภาพของเสา:</label>
                          <input type="file" class="form-control-file" name="tower_image" id="tower_image" > 
                      </div>
                        <?php
                            $customer_select = "SELECT * FROM tower_customer";
                            $customer_query = $conn->query($customer_select);
                            // print_r ($customer_query);exit;
                            // print_r($result = $customer_query->fetch_assoc());exit; 
                            // echo mysqli_error($conn);exit;
                          ?>
                        <div class="form-group">
                          <label>ผู้ให้บริการ :</label>
                          <select class="form-control" name="customer_select">
                            <?php while ($result = $customer_query->fetch_assoc()) { ?>
                              <option value="<?= $result['customer_id'] ?>" ><?= $result['customer_code']. " : " .$result['customer_name']?></option>
                            <?php }?>
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
                                <?php 
                                  if ($result_secon['network_id'] ){
                                    $result_secon['network_code']. " : " .$result_secon['network_name'];
                                  }
                                ?>
                              </option>
                            <?php } ?>
                          </select>
                        
                      </div>
                      <div class="form-group">
                          <label for="tower_parish">ตำบล</label>
                          <input type="text" class="form-control" name="tower_parish" placeholder="กรุณาเพิ่มตำบล" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_district">อำเภอ</label>
                          <input type="text" class="form-control" name="tower_district" placeholder="กรุณาเพิ่มอำเภอ" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_pravince">จังหวัด</label>
                          <input type="text" class="form-control" name="tower_pravince" placeholder="กรุณาเพิ่มจังหวัด" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_code">รหัสไปรษณีย์</label>
                          <input type
                          ="text" class="form-control" name="tower_code" placeholder="กรุณาเพิ่มรหัสไปรษณีย์" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_license_code">รหัสใบอนุญาต</label>
                          <input type="text" class="form-control" name="tower_license_code" placeholder="กรุณาเพิ่มรหัสใบอนุญาต" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_license_date">วันขอใบอนุญาต</label>
                          <input type="date" class="form-control" name="tower_license_date" placeholder="กรุณาเพิ่มDate" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_typeleaf">ประเภทใบตั้ง</label>
                          <input type="text" class="form-control" name="tower_typeleaf" placeholder="กรุณาเพิ่มประเภทใบที่ตั้ง" required>
                      </div>
                      <div class="form-group">
                          <label for="tower_sending">กำลังส่ง</label>
                          <input type="text" class="form-control" name="tower_sending" placeholder="กรุณาเพิ่มกำลังส่ง" required>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="LATDEG">Latitude</label>
                            <input type="text" class="form-control" name="LATDEG" placeholder="องศา" required>
                        </div>
                        <!-- <div class="form-group col-md-3">
                            <label for="LATMIN">LATMIN</label>
                            <input type="text" class="form-control" name="LATMIN" placeholder="ลิปตา" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="LATSEC">LATSEC</label>
                            <input type="text" class="form-control" name="LATSEC" placeholder="ฟิลิปตา" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="LATDIR">LATDIR</label>
                            <input type="text" class="form-control" name="LATDIR" placeholder="ทิศ" required>
                        </div> -->
                        
                        <div class="form-group col-md-12">
                            <label for="LONGDEG">Longitude</label>
                            <input type="text" class="form-control" name="LONGDEG" placeholder="องศา" require>
                        </div>
                        <!-- <div class="form-group col-md-3">
                            <label for="LONGMIN">LONGMIN</label>
                            <input type="text" class="form-control" name="LONGMIN" placeholder="ลิปตา" require>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="LONGSEC">LONGSEC</label>
                            <input type="text" class="form-control" name="LONGSEC" placeholder="ฟิลิปตา" require>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="LONGDIR">LONGDIR</label>
                            <input type="text" class="form-control" name="LONGDIR" placeholder="ทิศ" require>
                        </div> -->
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                  </form>
                </div>
              </section>
            <!-- right col -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>





  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.php";?>