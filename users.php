<?php 
	session_start();
	ob_start();
	if (!isset($_SESSION['unique_id'])) {
		header("location: login.php");
	}
?>
<?php 
	include_once "header.php"; 
	include_once "back-end/config.php";
?>
<body>
	<div class="wrapper">
		<section class="users">
			<?php 
				$sql = mysqli_query($connect,"select * from users where unique_id = {$_SESSION['unique_id']}");
				if (mysqli_num_rows($sql) > 0) {
					$row = mysqli_fetch_assoc($sql);
				}
			?>
			<?php 	
				if ($row['statuss'] == "Online") {
					$row['statuss'] = "Trực tuyến";
				}
			?>
			<header>
				<a href="personal.php">
					<div class="content">
						<img src="back-end/images/<?php echo $row['avatar']; ?>" alt="">
						<div class="details">
							<span><?php echo $row['lname']." ".$row['fname']; ?></span>
							<p class="online"><?php echo $row['statuss']; ?></p>
						</div>
					</div>
				</a>
				<a href="back-end/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Đăng xuất</a>
			</header>
			<div class="search">
				<span class="text">Tìm bạn để chat.</span>
				<input type="text" name="" placeholder="Nhập tên bạn bè của bạn...">
				<button><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">
				
			</div>
		</section>
	</div>

	<script src="js/users.js"></script>
	
</body>
</html>