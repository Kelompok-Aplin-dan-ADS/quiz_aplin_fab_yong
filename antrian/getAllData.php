<?php 
	require_once("conn.php");

	$sql = "SELECT loket.*, IFNULL(MAX(antrian_nomor), 0) AS antrian FROM loket
	LEFT JOIN antrian ON antrian.`loket_id` = loket.`loket_id`
	GROUP BY loket.loket_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$data = [];
		while($row = $result->fetch_assoc()) {
			array_push($data, $row);
		}
	}
?>