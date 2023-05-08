<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
	$mail_password = substr($username, 0, strpos($username, "@"));
	if($password == $mail_password){
		$alert = sprintf("<div class='container my-5'><div class='alert alert-success text-center' role='alert'>Giriş başarılı!<br> Hoşgeldiniz %s !</h1></div>",$mail_password);
		echo $alert;
		echo '<meta http-equiv="refresh" content="4; url=anasayfa.html" />';
	}
	else{
		echo "<div class='container my-2'><div class='alert alert-danger text-center' role='alert'><h6>Mailinizi veya şifrenizi yanlış girdiniz!<br>Lütfen tekrar deneyiniz!!</h6></div></div>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Giriş Yap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url(img/saulogo.jpeg);
        background-position: center;
    }
    .mb-3 {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
</style>
<body>
	<div class="container my-5"><br>
        <div class="d-flex justify-content-center">
		<form action="login.php" method="POST" >
			<div class="mb-3" >
				<label for="mail" class="form-label"><h4>Mail</h4></label>
				<input type="email" class="form-control" id="mail" name="username" aria-describedby="emailHelp" placeholder="Mail" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label"><h4>Şifre</h4></label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
			</div>
			<button type="submit" class="btn btn-primary">Giriş Yap</button>
		</form>
	    </div>
    </div>    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>