<!doctype html>
<html lang="en">
  <head>
	<title>Diễn đàn Trường đại học Thủy lợi</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/cd60ad9e13.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="diendan.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		  <a name="" id="" class="btn btn-dark" href="../SVpage.php" role="button">CSE.TLU</a>
		  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
			  aria-expanded="false" aria-label="Toggle navigation"></button>
		  <div class="collapse navbar-collapse" id="collapsibleNavId">
			  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				  <li class="nav-item ">
				  		<a name="" id="" class="btn btn-dark" href="#" role="button">Danh sách câu hỏi</a>
				  </li>
				  <li class="nav-item">
				  		<a name="" id="" class="btn btn-dark" href="#" role="button">Chưa trả lời</a>
				  </li>
				  <li class="nav-item ">
				  		<a name="" id="" class="btn btn-dark" href="#" role="button">Từ khóa</a>
				  </li>
				  <li class="nav-item ">
				  		<a name="" id="" class="btn btn-dark" href="#" role="button">Thành viên</a>
				  </li>
				  <li class="nav-item ">
				  		<a name="" id="" class="btn btn-dark" href="create.php" role="button">Tạo câu hỏi</a>
				  </li>
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Đăng nhập</button>
			  </form>
		  </div>
	  </nav>

	<div class="headerbar"><div id="headerbar-top" class=""><div class="wrap"><a href="/" id="logo"><img loading="lazy" src="https://2img.net/i/fa/modernbb/logo-simple.png" alt="Thanh Tùng Forum"></a><ul class="navbar navlinks"><li><a class="mainmenu" href="/"><img id="i_icon_mini_index" src="https://2img.net/i/fa/modernbb/icon_home.png" border="0" hspace="2" alt="Home" title="Home">Home</a> &nbsp;</li><li><a class="mainmenu" href="/calendar"><img id="i_icon_mini_calendar" src="https://2img.net/i/fa/modernbb/icon_calendar.png" border="0" hspace="2" alt="Calendar" title="Calendar">Calendar</a> &nbsp;</li><li><a class="mainmenu" href="/faq"><img id="i_icon_mini_faq" src="https://2img.net/i/fa/modernbb/icon_faq.png" border="0" hspace="2" alt="FAQ" title="FAQ">FAQ</a> &nbsp;</li><li><a class="mainmenu" href="/search" onclick="showhide(document.getElementById('search_menu')); return false;"><img id="i_icon_mini_search" src="https://2img.net/i/fa/modernbb/icon_search.png" border="0" hspace="2" alt="Search" title="Search">Search</a> &nbsp;<div id="search_menu" style="display: none;"><div class="overview row3" style="position: absolute; max-width: 100%;width: 350px; z-index: 10000; top: 65px;left:0;right:0;margin-left:auto;margin-right:auto;"><form action="/search" method="get"><input type="hidden" name="mode" value="searchbox"><div class="input-wrap"><input type="text" class="inputbox" name="search_keywords" placeholder="Search Query"><button type="submit" class="ion-android-search"></button></div><div class="label-group"><span>Display results as :</span><label><input id="rposts" type="radio" name="show_results" value="posts"><span>Posts</span></label><label><input id="rtopics" type="radio" name="show_results" value="topics" checked="checked"><span>Topics</span></label></div><a href="/search" rel="nofollow" title="Advanced Search">Advanced Search</a></form></div></div></li><li><a class="mainmenu" href="/memberlist"><img id="i_icon_mini_members" src="https://2img.net/i/fa/modernbb/icon_members.png" border="0" hspace="2" alt="Memberlist" title="Memberlist">Memberlist</a> &nbsp;</li><li><a class="mainmenu" href="/groups"><img id="i_icon_mini_groups" src="https://2img.net/i/fa/modernbb/icon_groups.png" border="0" hspace="2" alt="Usergroups" title="Usergroups">Usergroups</a> &nbsp;</li><li><a class="mainmenu" href="/profile?mode=editprofile"><img id="i_icon_mini_profile" src="https://2img.net/i/fa/modernbb/icon_ucp.png" border="0" hspace="2" alt="Profile" title="Profile">Profile</a> &nbsp;</li><li><a class="mainmenu" href="/privmsg?folder=inbox" rel="nofollow"><img id="i_icon_mini_message" src="https://2img.net/i/fa/modernbb/icon_message.png" border="0" hspace="2" alt="Messages" title="Messages">Messages</a> &nbsp;</li><li><a class="mainmenu" href="/login?logout=1&amp;tid=20a1d86384630ef1b45674437ab083d1&amp;key=0377a7" rel="nofollow" id="logout"><img id="i_icon_mini_logout" src="https://2img.net/i/fa/modernbb/icon_logout.png" border="0" hspace="2" alt="Log out" title="Log out [ Admin ]">Log out [ Admin ]</a> &nbsp;</li></ul></div></div><div class="wrap"><div id="site-desc"><div id="site-title"><h1>Thanh Tùng Forum</h1></div><p>Diễn đàn trao đổi giữa sinh viên với trường Thủy lợi.</p></div></div></div>
		<main class="container">
			<div class="row">
				<div class="col-md-8">
					<table class="table table-striped table-inverse table-responsive">
					<thead class="thead-dark">
						<tr>
							<th>User ID</th>
							<th>Người đăng</th>
							<th>Bài viết</th>
							<th>Lượt thích</th>
							<th>Ngày đăng</th>
							<th>Bình luận</th>
						</tr>
						</thead>
						<tbody>
						<?php
							require('config.php');
							include("../../include/func/functions.php");
							$users = getAllUsers();
							foreach($users as $row){
						?>	
								<tr>
									<td scope="row"><?php echo $row[0];?></td>
									<td><?php echo $row[1];?></td>
									<td><?php echo $row[2];?></td>
									<td><?php echo $row[3];?></td>
									<td><?php echo $row[4];?></td>
									<td><?php echo $row[5];?></td>
								</tr>
						<?php			
							}
						?>	
							
						</tbody>
					</table>
					<a href="add.php" class="btn btn-success"><i class="fas fa-user"></i> Đăng bài</a>
				</div>
				<div class="col-md-4">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm...">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="bg-info text-white">
									Câu hỏi
								</th>
								<th class="bg-success text-white">Trả lời</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="bg-warning text-white">Bình luận</td>
								<td class="bg-danger text-white">Thành viên</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				
			</div>
		</main>

	  <footer class="page-footer font-small indigo bg-info ">
	<div class="container text-center text-md-left ">
		<div class="row">
			<div class="col-md-3 mx-auto">
				<ul class="list-unstyled  mt-3 mb-4 ">
					<li>
						<a href="#!" class=" text-white">-Giới thiệu</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Logo của Khoa CNTT</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Lời chào mừng</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Tổ chức</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Hợp tác liên kết</a>
					</li>
				</ul>
			</div>
			<hr class="clearfix w-100 d-md-none">
			<div class="col-md-3 mx-auto">
				<ul class="list-unstyled  mt-3 mb-4 ">
					<li>
						<a href="#!" class=" text-white">-Đào tạo</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Mô hình đào tạo</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Đào tạo đại học</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Định hướng ngành nghề</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Đào tạo sau đại học</a>
					</li>
				</ul>
			</div>
			<hr class="clearfix w-100 d-md-none">
			<div class="col-md-3 mx-auto">
				<ul class="list-unstyled  mt-3 mb-4">
					<li>
						<a href="#!" class=" text-white">-Nghiên cứu khoa học</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Thông tin seminar</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Các đề tài, dự án</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Công trình công bố</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Các phòng thí nghiệm</a>
					</li>
				</ul>
			</div>
			<hr class="clearfix w-100 d-md-none">
			<div class="col-md-3 mx-auto">
				<ul class="list-unstyled mt-3 mb-4">
					<li>
						<a href="#!" class=" text-white">-Công nghệ phần mềm</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Hệ thống thông tin</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Khoa học máy tính</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Kỹ thuật máy tính và mạng</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Toán học</a>
					</li>
					<li>
						<a href="#!" class=" text-white">-Trung tâm tin học</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright text-center py-3">© 2020 Khoa CNTT-Đại Học Thủy Lợi
		<h6>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-02435632211.Email: <a href="main.php" class=" text-white"> CSE.TLU.EDU.VN</a> </h6>
	</div>
</footer>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>