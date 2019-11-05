<?php 
	require_once("conn.php");

	$sql = "SELECT max(antrian_nomor) as nomor FROM antrian";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();
	}
?>