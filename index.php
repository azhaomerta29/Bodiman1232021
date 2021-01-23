<?php
$title = "Castles In England";
require_once(".//includes//header.php");
?>

<!-- MAIN CONTENT -->
<header>
<h1>Castles in England</h1>
<img id="HeaderImage" src=".//img//MainHeader.jpg" alt="Main Header">
</header>

<?php

global $conn;

$q = "select * ";
$q .= "from castles";
$result = mysqli_query($conn, $q);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {

        echo "<div class=\"row\">";	// row
                echo "<div class=\"column\">".strtoupper($row["name"])."<br/><button class=\"Explore\">Explore ".$row["name"]." Castle</button></div>";
                echo "<div class=\"column\" ><img class=\"CastleImage\" src=.//img//".$row["image"]." alt=".$row["image"]."></div>";
        echo "</div>"; 	// row
	}
} else {
  echo "0 results";
}

db_disconnect($conn);
?>

<!-- END PAGE CONTENT -->

<?php
// page footer
require_once(".\\includes\\footer.php");
?>
