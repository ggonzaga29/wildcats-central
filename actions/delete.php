<?php 

include_once "../includes/db.php";

if(isset($_GET['id'])) {
	// echo "DELETE FROM tblbuilding WHERE buildingid=" . $_GET['id'];
	 $resultset = $mysqli->query("DELETE FROM tblbuilding WHERE buildingid=" . $_GET['id']) or die($mysqli->error);	

	 print_r($resultset);
}

?>