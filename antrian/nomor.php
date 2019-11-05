<?php
	require("header.php");
	include("getNomor.php");
?>

<div class="container center-align">
	<h1 class="white-text">
		Ambil Nomor
	</h1>
	<br>

	<h1 > <div class="nomer"><?= $data["nomor"] ?></div> </h1>
	<br>
	<div class="menu-container">
		<div class="btn waves-effect waves-light" onclick="ganti()"> Ambil Nomor</div>
	</div>
</div>

<?php require("footer.php"); ?>