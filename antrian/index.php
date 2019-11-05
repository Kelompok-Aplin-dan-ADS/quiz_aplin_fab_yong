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
		<form action="checkLogin.php" method="post" onsubmit="checkLogin() return false;">
		
		</form>
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
		<button class="btn waves-effect waves-light btn-login" type="submit" name="action">masuk</button>
    </div>
</div>
<script>
	$(document).ready(function() {
		$('.btn-login').click(function(){
			console.log($("input[name=username]").val());
			$.ajax({
				method : "post",
				url: "checkLogin.php",
				data:{
					username: $("input[name=username]").val(),
					password: $("input[name=password]").val()
				},
				success: function(data){
					console.log(data);
					res = JSON.parse(data);
					console.log(res['status']);
					
					//$(".container").html(result);
				}
			})
		});
	});
	function checkLogin() {
		
			
	}
</script>
<?php require("footer.php"); ?>