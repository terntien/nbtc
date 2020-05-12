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
          <!-- <div class="col-md-12 logo text-center">
              <img src="../assets/image/NBTC.png" alt="logonbtc">
          </div> -->
          <!-- <div class="col-md-8 text-nbtc ">
              <h2>สำนักงาน กสทช. ภาค 2 จังหวัดขอนแก่น</h2>
              <p>คณะกรรมการกิจการกระจายเสียง กิจการโทรทัศน์ และกิจการโทรคมนาคมแห่งชาติ</p>
          </div> -->
          <div class="container-fluid">
              <div class="row">
                  <section class="col-lg-12 connectedSortable">
                      <div class="col-md-12">
                          <div class="card card-success">
                              <div class="card-body">
                                  <div class="offset-md-5"></div>
                                      <div class="offset-md-2"></div>
                                      <div class="col-md-12 map">
                                          <div id="map"></div>
                                      </div>
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




  






<?php include "footer.php";?>



<script>
      var customLabel = {
        1: {
          label: 'TRU'
        },
        2:{
          label: 'TOT'
        },
        3: {
          label: 'D-TAC'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(16.5178,104.121),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('../models/marker.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              console.log(markerElem);
              var id = markerElem.getAttribute('id');
              var image = markerElem.getAttribute('image');
              var name = markerElem.getAttribute('name');
              var sending = markerElem.getAttribute('sending');
              var parish = markerElem.getAttribute('parish');
              var district = markerElem.getAttribute('district');
              var pravince = markerElem.getAttribute('pravince');
              var code = markerElem.getAttribute('code');
              var customer = markerElem.getAttribute('customer');
              var network = markerElem.getAttribute('network');
              var license_code = markerElem.getAttribute('license_code');
              var license_date = markerElem.getAttribute('license_date');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = `
                <div class="conn-info-tower">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col" width="120px" class="text-right">หัวข้อ</th>
                        <th scope="col">รายละเอียด</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-right">รูปภาพ</th>
                        <td><img src="../assets/image/tower/${image}" width="150px" hieght="190px"></td>
                        </tr>
                      <tr>
                        <th scope="row" class="text-right">ประเภทใบตั้ง</th>
                        <td>${name}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">ที่อยู่</th>
                        <td>ตำบล${parish} อำเภอ${district} จังหวัด${pravince} ${code}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">ผู้ให้บริการ</th>
                        <td>${customer}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">เครือข่ายร่วม</th>
                        <td>${network}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">รหัสใบอนุญาต</th>
                        <td>${license_code}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">วันขอใบอนุญาต</th>
                        <td>${license_date}</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              `;
              
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkgXuCpP3BauX9EIlnHlqtC8IP1SUoYbw&callback=initMap" asyncdefer></script>