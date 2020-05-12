    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
                  เสาสัญญาณ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="./map.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>หน้าแรก</p>
                  </a>
                </li>
              <li class="nav-item">
                <a href="./dash.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลเสาสัญญาณ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./form_license.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบฟอร์มขอใบอนุญาต</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ให้บริการ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./network.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เครือข่ายร่วม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เพิ่มข้อมูลเสา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                กฎหมายที่เกี่ยวข้อง
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-user"></i>
              <p>
                ผู้ใช้งาน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ใช้งานทั่วไป</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ดูแลระบบ</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-exclamation-circle"></i>
              <p>
                การแจ้งปัญหา
                <span class="badge badge-info right">2</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>การแจ้งปัญหา
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./report_problem.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ประเภทการแจ้งปัญหา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./contact.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                ติดต่อเรา
              </p>
            </a>
          </li>
          <?php if($_SESSION['users_status'] == 1){ ?>
          <li class="nav-item">
            <a href="../models/admin_logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>