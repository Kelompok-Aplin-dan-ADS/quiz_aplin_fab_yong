<?php require("header.php");
	if(isset($_SESSION['user'])){
		header('Location: dashboard.php');
	}
?>

<div class="container center-align">
	<h1 class="white-text">
		Antrian
	</h1>
	<br>
	<h3 class="white-text">
		Masukkan Username dan Password
	</h3>
	<br>
	<div>
		<form action="checkLogin.php" method="post">
		<div class="row white">
			<div class="input-field col s12">
				<input id="username" type="text" name="username">
				<label for="username" class>Username</label>
			</div>
			<div class="input-field col s12">
				<input id="password" type="password" name="password">
				<label for="password" class>Password</label>
			</div>
		</div>
		<button class="btn waves-effect waves-light" type="submit" name="action">masuk</button>
		</form>
    </div>
</div>
<script>
	$(document).ready(function() {
		// $('.btn').click(function(){
		// 	$.ajax({
		// 		url: "dashboard.php", 
		// 		success: function(result){
		// 			$(".container").html(result);
		// 		}
		// 	})
		// });
	});
</script>
<?php require("footer.php"); ?>