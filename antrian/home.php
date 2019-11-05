<?php
	require("header.php");
	include("getNomor.php");
?>

<div class="container center-align">
	<h1 class="white-text">
		Ambil Nomor
	</h1>
	<br>
	<h1> <?= $data["nomor"] ?> </h1>
	<br>
	<div class="menu-container">
		<a href="ambilNomor.php" class="btn waves-effect waves-light"> Ambil Nomor</a>
	</div>
</div>
<script>
	$(document).ready(function() {

	});
</script>
<?php require("footer.php"); ?>