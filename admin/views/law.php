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
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-success">
                <div class="card-header">
              <h3 class="card-title">กฎหมายที่เกี่ยวข้อง</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">หัวเรื่องกฎหมายที่เกี่ยวข้อง :</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="หัวเรื่องกฎหมายที่เกี่ยวข้อง">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">URL :</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="URL">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
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