<?php 
	session_start();
	ob_start();
	if (isset($_SESSION['unique_id']) && $_SESSION['unique_id'] != null) {
		header("location: users.php");
	}
?>
<?php include_once "header.php"; ?>
<body>

	<div class="wrapper">
		<section class="form signup">
			<header>Đăng Ký</header>
			<form action="#" enctype="multipart/form-data" autocomplete="off">
				<div class="error-text"></div>
				<div class="name-details">
					<div class="field input">
						<label>Họ đệm.</label>
						<input type="text" name="lname" placeholder="Last Name" required>
					</div>
					<div class="field input">
						<label>Tên.</label>
						<input type="text" name="fname" placeholder="First Name" required>
					</div>
				</div>
				<div class="field input">
					<label>Địa chỉ Email.</label>
					<input type="text" name="email" placeholder="Enter your email" required>
				</div>
				<div class="field input">
					<label>Mật khẩu.</label>
					<input type="password" name="passwords" placeholder="Enter new password" required>
					<i class="fas fa-eye"></i>
				</div>
				<div class="field image">
					<label>Chọn hình đại diện.</label>
					<input type="file" name="image" placeholder="Image">
				</div>
				<div class="field button">
					<input type="submit" name="" value="Tiếp tục">
				</div>
				
			</form>
			<div class="link">
				Bạn đã đăng ký? <a href="login.php">Đăng nhập</a>
			</div>
		</section>
	</div>

	<script src="js/passwords-show-hide.js"></script>
	<script src="js/signup.js"></script>
</body>
</html>