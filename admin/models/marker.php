<?php 
    include "../assets/connectDB/connectDB.php";

    // Start XML file, create parent node
    $dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

    // Select all the rows in the markers table
    $tower = "SELECT * FROM tower
                LEFT JOIN tower_customer ON tower_customer = customer_id
                  LEFT JOIN tower_network ON tower_network = network_id ";
    $query = $conn->query($tower);
    // print_r ($query->fetch_assoc());exit;

    if (!$query) {
      die('Invalid query: ' . mysql_error());exit;
    }

   
    header("Content-type: text/xml");
    // Iterate through the rows, adding XML nodes for each
    while ($row = @$query->fetch_assoc()){
    // Add to XML document node
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    
    $newnode->setAttribute("id", $row['tower_id']);
    $newnode->setAttribute("image", $row['tower_image']);
    $newnode->setAttribute("name", $row['tower_typeleaf']);
    $newnode->setAttribute("sending", $row['tower_sending']);
    $newnode->setAttribute("parish", $row['tower_parish']);
    $newnode->setAttribute("district", $row['tower_district']);
    $newnode->setAttribute("pravince", $row['tower_pravince']);
    $newnode->setAttribute("code", $row['tower_code']);
    $newnode->setAttribute("customer", $row['customer_name']);
    $newnode->setAttribute("network", $row['network_name']);
    $newnode->setAttribute("license_code", $row['tower_license_code']);
    $newnode->setAttribute("license_date", $row['tower_license_date']);
    $newnode->setAttribute("lat", $row['LATDEG']);
    $newnode->setAttribute("lng", $row['LONGDEG']);
    $newnode->setAttribute("type", $row['customer_id']);
    }

    $xmlfile = $dom->saveXML();
    echo $xmlfile; 
?> 