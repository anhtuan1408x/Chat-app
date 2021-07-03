<?php 

	include_once "header.php"; 
	include_once "back-end/config.php";
?>
<?php 

	session_start();
	ob_start();

	$getID = $_SESSION['unique_id'];

	
 ?>
<style type="text/css">
	form{
		display: flex;
	align-items: center;
	justify-content: space-between;
	}
	.top-header{
		text-align: center;
	}
	.top-header img{
		width: 100%;
		height: 100px;
		border-radius: 0px;
	}
	textarea{
		margin: auto;
		display: flex;
		outline: none;
	}
	table{
		width: 100%;
		text-align: center;
	}
	table td{
		text-align: left;
	
	}

	input{
		outline: none;
	}
	.info tr td input:focus{
		color: green;
		border-color: red;
	}
	.info tr td input{
		height: 30px;
	}
	.info tr td input[type='submit']{
		border: none;
		text-align: center;
	}
</style>
<body>
	<div class="wrapper" style="border-bottom: none;">
		<section class="users">
			<?php 
				$sql = mysqli_query($connect,"SELECT * from users where unique_id = '{$getID}'");
				$row = mysqli_fetch_assoc($sql);
			?>
			
			<header>
				<div class="top-header">
					<img src="user.jpg" style="">
					<a href="">Thay ảnh</a>
					<h1 style="text-align: center;"><?php echo $row['lname']." ".$row['fname']; ?></h1>
					<small title="Số người theo dõi">1k followers</small>
				</div>
				
			</header>

			
			<div class="users-list">
				<form>
					<table border="0" cellspacing="0" cellpadding="10" class="info">
						<tr>
							<td>Họ đệm:</td>
							<td><input type="text" name="" value="<?php echo $row['lname']; ?>"></td>
						</tr>
						<tr>
							<td>Tên: </td>
							<td><input type="text" name="" value="<?php echo $row['fname']; ?>"></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><input type="text" name="" value="<?php echo $row['email']; ?>"></td>
						</tr>
						<tr>
							<td>Mật khẩu: </td>
							<td><input type="password" name="" value="<?php echo $row['passwords']; ?>"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="" value="Cập nhật." style="text-align: center;"></td>
						</tr>
					</table>
				</form>
				<form action="#" enctype="multipart/form-data">
					<h3>Viết một bài</h3>
					<textarea cols="57" rows="5" title="Nội dung bài viết."></textarea>
				</form>
			</div>
		</section>
	</div>

	<!-- <script src="js/users.js"></script> -->
	
</body>
</html>