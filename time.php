<?php 
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$date = date('d/m/Y H:i:s');
	// $date = date('d/m/Y');
	$date2 = '03/07/2021';
	echo $date; echo "<br>";
	echo $date2;
	if($date == $date2){
		echo "Trùng ngày tháng năm";
	}
 ?>