<?php
	require("header.php");
	include("getData.php");

	if(!isset($_SESSION['user'])){
		header('Location: index.php');
	}
?>
<div class="loket"></div>
<script>
	$.ajax({
		method: "post",
		url: "loket.php",
		success: function (data) {
			$(".loket").html(data);
		}
	});
	function panggil(){
		$.ajax({
			method: "post",
			url: "panggil.php",
			success: function (data) {
				$(".tempat").html(data["antrian_id"]);
			}
		});
		$.ajax({
			method: "post",
			url: "loket.php",
			success: function (data) {
				$(".loket").html(data);
			}
		});
	}
</script>
<?php require("footer.php"); ?>