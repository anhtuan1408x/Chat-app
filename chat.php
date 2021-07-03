<?php 

	include_once "header.php"; 
	include_once "back-end/config.php";

?>
<?php 
	session_start();
	ob_start();
	if (!isset($_SESSION['unique_id'])) {
		header("location: login.php");
	}
?>
<body>

	<div class="wrapper">
		<section class="chat-area">
			<header>
				<?php 
					$user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
					$sql = mysqli_query($connect,"select * from users where unique_id = {$user_id}");
					if (mysqli_num_rows($sql) > 0) {
						$row = mysqli_fetch_assoc($sql);
					}
				?>
				<?php 	
					if ($row['statuss'] == "Online") {
						$row['statuss'] = "Trực tuyến";
					}
					if ($row['statuss'] == "Offline") {
						$row['statuss'] = "Ngoại tuyến";
					}
				?>
				<a href="users.php" class="back"><i class="fas fa-arrow-left"></i></a>	
			
				<img src="back-end/images/<?php echo $row['avatar']; ?>" alt="">
				<div class="details">
					<span><?php echo $row['lname']." ".$row['fname']; ?></span>
					<p class="online"><?php echo $row['statuss']; ?></p>
				</div>
				
			</header>
			<div class="chat-box">
				
				
				
			
				
			</div> 
			<form action="#" class="typing-area" autocomplete="off">
				<input type="text" name="sender" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
				<input type="text" name="receiver" value="<?php echo $user_id; ?>" hidden>
				<input type="text" name="content" class="input-field" placeholder="Nhập nội dung tại đây.">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>
		</section>
	</div>

	<script src="js/chat.js"></script>

</body>
</html>