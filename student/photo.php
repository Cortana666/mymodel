<?php 
	@session_start();
	$stu_num = $_SESSION['stu_num'];
	// var_dump($stu_num);
	@mysql_connect('localhost','root','root');
	mysql_select_db('db_student');
	$select = "select stu_ph from tb_stu where stu_num  = '$stu_num'";
	$add = mysql_query($select);
	$add_ph = mysql_fetch_assoc($add);
	// print_r($add_ph);
	foreach ($add_ph as $photo) {
		// echo $photo;
?>

	<img src="ph_stu/<?php echo $photo;?>">
<?php
	}
	// echo $add_ph['0'];
	?>
	
	

	