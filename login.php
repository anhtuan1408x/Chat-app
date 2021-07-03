<?php include_once "header.php"; ?>
<body>

	<div class="wrapper">
		<section class="form login">
			<header>Đăng Nhập</header>
			<form action="#">
				<div class="error-text"></div>
				
				<div class="field input">
					<label>Địa chỉ Email.</label>
					<input type="text" name="email" placeholder="Enter your email">
				</div>
				<div class="field input">
					<label>Mật khẩu.</label>
					<input type="password" name="passwords" placeholder="Enter your password">
					<i class="fas fa-eye"></i>
				</div>
					
				<div class="field button">
					<input type="submit" name="" value="Tiếp tục">
				</div>
				
			</form>
			<div class="link">
				Bạn chưa có tài khoản? <a href="index.php">Đăng ký ngay</a>
			</div>
		</section>
	</div>
	<script src="js/passwords-show-hide.js"></script>
	<script src="js/login.js"></script>
</body>
</html>