<?php include('../include/func/connection.php'); ?>
<?php
include("../include/header/header.php");
?>

<!--Facebook-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="ZRYPYCfw">
</script>
<!--//Facebook-->

<div class="container">
	<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>	
			</h3>
		</div>
	<?php endif ?>
	
	<div class="row">
		<div class="col-9">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/banner.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/bannertq4.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/hoi-thao.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/inra1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/sanh-t54.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="5" height="150" src="../images/cse-hallthumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Lời chào mừng</a>
							</div>
						</div>
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/cse-tlu-narathumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Nghiên cứu khoa học</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/gv-khoa-cnttthumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Giảng viên</a>
							</div>
						</div>
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/k54th-tot-nghiep-1thumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Đào tạo</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="5" height="370" src="../images/khoa43th.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Ảnh khoa CNTT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
		<div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="timeline" data-width="" data-height="" data-small-header="false"
		data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		<blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a
			href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
			
		</div>
	</div>
</div>

<?php
include("../include/footer/footer.php");
?>