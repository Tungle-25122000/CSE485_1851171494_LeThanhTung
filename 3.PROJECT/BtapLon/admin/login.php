

<!doctype html>
<html lang="en">

<head>
	<title>.:Đăng nhập:.</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="container">
	<div class="row">
	<div class="col-sm-12">
      <a class="navbar-brand" href="../user/SVpage.php">
        <img src="../images/logotlu.png">
      </a>
    </div>
		<div class="col bg">
		</div>

		<div class="col bg">
			<form action="login.php" method="post">
				<h1 class="logins"><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:blue">I</span><span style="color:violet">N</span></h1>

				<?php
				// if (isset($_GET['error'])) {
				// 	if ($_GET['error'] == 'emptyfields') {
				// 		echo '<p class="signuperror">Fill in all foelds !</p>';
				// 	} elseif ($_GET['error'] == 'wrongpassword') {
				// 		echo '<p class="signuperror">Wrong Password !</p>';
				// 	}
				// }
				?>
				<div class=" form-group" style="margin-top:25px">
					<label for="username">Tên tài khoản</label>
					<input class="form-control" type="text" name="username" id="username" placeholder="tài khoản đăng nhập" required="">
				</div>
				<div class="form-group">
					<label for="password_1">Mật khẩu</label>
					<input class="form-control" type="password" name="password_1" id="password_1" placeholder="********" required="">
				</div>

				<div class="form-group">
                    <a name="login" id="login" class="btn btn-primary" href="../user/GVpage.php" role="button">Đăng nhập</a>
					
				</div>
                
				<div>
					<!-- sửa thành trang tạo tài khoản khi có -->
					Bạn chưa có tài khoản? <a href="register.php" class="">Gửi yêu cầu</a> tạo tài khoản mới
				</div>

				<div>
					<!-- sửa thành trang đổi mật khẩu khi có -->
					<a href="#" class="">Bạn đã quên mật khẩu?</a>
				</div>

			</form>
		</div>

		<div class="col bg">
		</div>

	</div>
</div>