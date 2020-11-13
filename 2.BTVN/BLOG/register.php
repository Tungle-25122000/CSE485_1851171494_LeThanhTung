<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/cd60ad9e13.js" crossorigin="anonymous"></script>
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/style.css">
	<title>Đăng ký</title>
</head>
<body>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>


	<div class="auth-content">
		<form action="register.php" method="post">
			<h2 class="form-title">Đăng ký</h2>

			<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

			<div>
				<label>Tên tài khoản</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input" >
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
			</div>
			<div>
				<label>Mật khẩu</label>
				<input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
			</div>
			<div>
				<label>Nhập lại mật khẩu</label>
				<input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
			</div>
			<div>
				<button type="submit" name="register-btn" class="btn btn-big">Đăng ký</button>
			</div>			
			<p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Đăng nhập</a></p>


		</form>
	</div>


	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Custom Script -->
	<script src="/BLOG/assets/js/scripts.js"></script>

</body>

</html>