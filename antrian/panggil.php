<?php
	require_once("conn.php");

	$user = $_SESSION['user'];
	$loket = $_SESSION['loket'];

	$sql = "SELECT * FROM antrian WHERE loket_id is null";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();
	}
	$id = $data['antrian_id'];

	$query = "UPDATE antrian SET loket_id='$loket' where antrian_id = $id";
	$conn->query($query);

	header('Location: dashboard.php');
?>