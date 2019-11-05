<?php
	require("header.php");
	include("getData.php");

	if(!isset($_SESSION['user'])){
		header('Location: index.php');
	}
?>

<div class="container center-align">
	<h1 class="white-text">
		<?= $data['loket_nama']; ?>
	</h1>
	<br>
	<div class="menu-container">
        <h2>Antrian Sekarang <br>
        <div class="tempat"><?= $nomor; ?></div>
			
		</h2>
		<br>
		<div onclick="panggil()" class="btn waves-effect waves-light">Panggil Antrian</div>
	</div>
</div>
<script>
	
</script>
<?php require("footer.php"); ?>