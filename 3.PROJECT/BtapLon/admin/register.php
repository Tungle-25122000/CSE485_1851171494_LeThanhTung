<?php include('../include/func/connection.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <title>.:Đăng ký:.</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<main class="container">
  	<div class="row">
		<div class="col-sm-12">
			<a class="navbar-brand" href="../user/SVpage.php">
				<img src="../images/logotlu.png">
			</a>
		</div>
		<div class="col bg">
		</div>
		<div class="col bg">
		<form action="register.php" method="POST">
			<?php include('errors.php'); ?>
			<h1 class="registers"><span style="color:blue">R</span><span style="color:red">E</span><span style="color:yellow">G</span><span style="color:blue">I</span><span style="color:violet">S</span><span style="color:green">T</span><span style="color:red">E</span><span style="color:violet">R</span></h1>
			
			<div class="form-group">
			<label for="username">Tên đăng nhập</label>
			<input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">
			</div>
			

			<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
			<label for="password">Mật khẩu</label>
			<input type="password" class="form-control" name="password_1" id="password_1">
			</div>

			<div class="form-group">
			<label for="password_2">Nhập lại mật khẩu</label>
			<input type="password" class="form-control" name="password_2" id="password_2">
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary text-white" name="register" id="btnSave">
				Đăng ký
			</button>
			</div>
			<div class="form-group">
			<button type="back" class="bg-light " name="btnCancel" id="btnCancel">
				<a class="btnCancel" href="login.php">Cancel</a>
			</button>
			</div>
			<p>
				Already a member? <a href="login.php">Đăng nhập</a>
			</p>

		</form>
		</div>
		<div class="col bg">
		</div>
	</div>
</main>