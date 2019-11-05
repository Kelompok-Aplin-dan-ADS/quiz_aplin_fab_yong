<?php
	require("header.php");
	include("getNomor.php");
?>
<div class="con"></div>
<script>
	$.ajax({
		method: "post",
		url: "nomor.php",
		success: function (data) {
			$(".con").html(data);
		}
	});
	function ganti(){
		$.ajax({
			method: "post",
			url: "ambilNomor.php",
			success: function (data) {
				$(".nomer").html(data["nomor"]);
			}
		});
		$.ajax({
			method: "post",
			url: "getNomor.php",
			success: function (data) {
				$(".nomer").html(data["nomor"]);
			}
		});
		$.ajax({
		method: "post",
		url: "nomor.php",
		success: function (data) {
			$(".con").html(data);
		}
	});
	}
		
</script>
<?php require("footer.php"); ?>