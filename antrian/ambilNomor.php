<?php
	require_once("conn.php");
	$sql = "select ifnull(max(antrian_nomor)+1,1) as nomor from antrian";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();
	}
	$nomor = $data['nomor'];

	$sql = "INSERT INTO antrian(antrian_nomor) VALUES ($nomor)";
	$conn->query($sql);

?>