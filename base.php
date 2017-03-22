<?php 
@session_start();
  if (@$_SESSION['user']=='') {
    echo "<script>alert('请登录！');location = '/login.php';</script>";
  }

  function test($arr){
  		echo '<pre>';
  		print_r($arr);
  		echo '</pre>';
  }
 ?>