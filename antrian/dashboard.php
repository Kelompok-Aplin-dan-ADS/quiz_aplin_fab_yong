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
			<?= $nomor; ?>
		</h2>
		<br>
		<a href="panggil.php" class="btn waves-effect waves-light">Panggil Antrian</a>
	</div>
</div>
<script>
	$(document).ready(function() {
		
	});
</script>
<?php require("footer.php"); ?>