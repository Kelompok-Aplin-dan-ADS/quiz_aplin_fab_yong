<?php 
	require_once("conn.php");

	$username = $_POST["username"];
	$password = $_POST["password"];

	echo $password;
	$sql = "SELECT * FROM user WHERE username = '$username' AND password='$password' ";
	$result = $conn->query($sql);

	$sql2 = "SELECT * FROM loket WHERE user = '$username'";
	$result2 = $conn->query($sql2);

	if ($result->num_rows > 0) {
		$_SESSION['user'] = $username;
		$_SESSION['loket'] = $result2->fetch_assoc()["loket_id"];
		$val = array(
			"status"=>"1"
		);
		//echo json_encode($val);
		//header('Location: dashboard.php');
	} else {
		//header('Location: index.php');
		$val = array(
			"status"=>"0"
		);
		//echo json_encode($val);
	}
?>