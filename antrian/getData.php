<?php 
	require_once("conn.php");

	$user = $_SESSION['user'];
	$loket = $_SESSION['loket'];
	$sql = "SELECT * FROM loket WHERE loket_id = $loket";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();

		$sql2 = "select ifnull(max(antrian_nomor),0) as nomor from antrian where loket_id= $loket";
		$result2 = $conn->query($sql2);
		$nomor = $result2->fetch_assoc()["nomor"];
	}
?>