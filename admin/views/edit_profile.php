<?php include "header.php"; ?>
<?php include "menu.php"; ?>
 <div class="content-wrapper">
   
    <section class="content">
     <div class="row row-main">
        <div class="col-md-12 logo text-center">
            <img src="../assets/image/NBTC.png" alt="logonbtc">
        </div>
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-12 connectedSortable">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Dashboard</h3>
                </div>
             <?php
            // print_r ($_SESSION);exit;
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE users_id = ".$_GET['id']." ");
                while($row = mysqli_fetch_array($sql)){
                    $id         =   $row['users_id'];
                    $f_name     =   $row['users_fname'];
                    $l_name     =   $row['users_lname']; 
                    $gender     =   $row['users_gender'];
                    $img        =   $row['users_img'];
                    $age        =   $row['users_age'];
                    $email      =   $row['users_email'];
                    $addr       =   $row['users_address'];
                    $pass       =   $row['users_password'];

                    $checkedA ="";
                    $checkedB ="";
                    
                    if($gender=='1'){
                        $checkedA = "checked";
                    }
                    if($gender=='2'){
                        $checkedB = "checked";
                    }
                }
        ?>
            <form action="../models/update_profile.php" method="POST" enctype="multipart/form-data">
                <div class="row row-register">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">เลือกไฟล์รูปภาพ</label>
                            <input type="file" name="users_img" class="form-control-file" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="text" class="form-control" class="form-control" name="users_fname" id="users_fname" value="<?php echo $f_name ;?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="text" class="form-control" name="users_lname" id="users_lname"  value="<?php echo $l_name ;?>" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="text" class="form-control" name="users_address" id="users_address" value="<?php echo $addr ;?>" >
                        </div>
                    </div>

                    
                    <div class="col-md-12">
                        <div class="input-group">
                            <b>เพศ :</b>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" class="form-control" name="users_gender" 
                                        value="1" <?php echo $checkedA;?>>ชาย
                                </label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" class="form-control" name="users_gender" 
                                        value="2" <?php echo $checkedB;?>>หญิง
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="text" class="form-control" name="users_age" id="users_age"
                               value="<?php echo $age ;?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="email" class="form-control" name="users_email" id="users_email"  value="<?php echo $email ;?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="text" class="form-control" name="users_password" id="users_password"
                                 value="<?php echo $pass ;?>">
                        </div>
                    </div>
                    <input type="hidden" class="from-control" class="form-control" name="id" value="<?php echo $id ;?>" >
                    <div class="offset-2 col-md-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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