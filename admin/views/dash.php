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
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Dashboard </h3>
                                    </div>
                                    <div class="card-body">
                                            <div class="form-group">
                                            <?php 
                                                $dashboard = "SELECT * FROM tower
                                                                LEFT JOIN tower_network ON tower_network = network_id
                                                                    LEFT JOIN tower_customer ON tower_customer = customer_id";
                                                $query = $conn->query($dashboard);
                                                // echo mysqli_error($conn);exit;
                                                // print_r ($query->fetch_assoc());exit;
                                            ?>
                                            <?php while ($result = $query->fetch_assoc()) { ?>
                                                <table class="table" width="100%">
                                                    <tbody>
                                                        <tr> 
                                                            <td style="width: 240px"><?=$result['tower_license_code']?></td>
                                                            <td style="width: 240px"><?=$result['customer_name'] ?></td>
                                                            <td style="width: 360px"><?=$result['network_name']?></td>
                                                            <td style="width: 180px"><?=$result['tower_pravince']?></td>
                                                            <td style="width: 20px"> 
                                                                <a href="dashboard_tower.php?id=<?=$result['tower_id']?>">
                                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php } ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include "footer.php"; ?>
