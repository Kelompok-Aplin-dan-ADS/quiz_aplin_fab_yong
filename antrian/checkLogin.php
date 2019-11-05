<?php 
	require_once("conn.php");

	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM user WHERE username = '$username' AND password='$password' ";
	$result = $conn->query($sql);

	$sql2 = "SELECT * FROM loket WHERE user = '$username'";
	$result2 = $conn->query($sql2);

	if ($result->num_rows > 0) {
		$_SESSION['user'] = $username;
		$_SESSION['loket'] = $result2->fetch_assoc()["loket_id"];
		$val = "1";
		echo $val;
	} else {
		$val = "0";
		echo $val;
	}
?>