<?php
	require("header.php");
	include("getAllData.php");
?>

<div class="container center-align">
	<h1 class="white-text">
		Antrian
	</h1>
	<br>
	<div class="row">
			
		<?php foreach ($data as $item) {
			?>
			<div class="col s4 center menu">
				<h2><b><?= $item["loket_nama"] ?></b></h2>
				<br>
				<h2><b><?= $item["antrian"] ?></b></h2>
			</div>
			<?php
		}?>
	</div>
</div>
<script>
	$(document).ready(function() {

	});
</script>
<?php require("footer.php"); ?>