<header>
		<a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
			<h1 class="logo-text"><span>Thanh</span>Tùng</h1>
		</a>
		<i class="fa fa-bars menu-toggle"></i>
		
			<ul class="nav">
				<li>
					<a href="<?php echo BASE_URL . '/index.php' ?>">Trang chủ</a>
			
				</li>
				<li><a href="#">About</a></li>
				<li><a href="#">Dịch vụ</a></li>

				<?php if (isset($_SESSION['id'])): ?>
				<li>
					<a href="#">
					<i class="fa fa-user"></i>	
					<?php echo $_SESSION['username']; ?>
					<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
					</a>
					<ul>
						<?php if($_SESSION['admin']): ?>
							<li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Bảng điều khiển</a></li>
						<?php endif; ?>
						<li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Đăng xuất</a></li>

					</ul>
				</li>
				<?php else: ?>
					<li><a href="<?php echo BASE_URL . '/register.php' ?>">Đăng ký</a></li>
					<li><a href="<?php echo BASE_URL . '/login.php' ?>">Đăng nhập</a></li>
				<?php endif; ?>	

				
			</ul>		
</header>