<?php include('../include/func/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Đăng ký:.</title>
    <link rel="stylesheet" href="/BtapLon/css/style.css">
</head>
<body>
    <div class="banner">
        <h2>Register</h2>
    </div>
       <form method="post" action="register.php">
            <?php include('errors.php'); ?> 
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>  
            <p>
                Already a member? <a href="/BtapLon/admin/login.php">Sign in</a>
            </p>
        </form> 
    

</body>
</html>


<!-- the order of including these files is important -->

<!-- Source code for handling registration and login -->

<!-- Section containing all css and js links -->
<!-- <!DOCTYPE html>
<html>
<head>


 
<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">


<link rel="stylesheet" href="/BtapLon/css/style.css">

<title>LifeBlog | Sign up </title>

</head>
<body>

<div class="container">


	<div class="navbar">
	<div class="logo_div">
		<h1>KC.08.34/16-20 Project</h1>
	</div>
	<ul>
	  <li><a class="active" href="SVpage.php">Trang chủ</a></li>
	  <li><a href="#news">SPI</a></li>
	  <li><a href="#contact">SPEI</a></li>
	  <li><a href="#about">SWSI</a></li>
	  <li><a href="#about">Dự báo</a></li>
	</ul>
</div>


<div style="width: 40%; margin: 20px auto;">
	<form method="post" action="register.php" >
		<h2>Register on LifeBlog</h2>
				<input 
		 type="text"
		 name="username"
		 value="" 
		 placeholder="Username">

		<input 
		 type="email"
		 name="email"
		 value="" 
		 placeholder="Email">

		<input 
		 type="password"
		 name="password_1"
		 placeholder="Password">

		<input 
		 type="password"
		 name="password_2"
		 placeholder="Password confirmation">

		<button type="submit" class="btn" name="reg_user">Register</button>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>


</div>



<div class="footer">
	<p>MyViewers &copy; 2020</p>
</div> -->
