<?php
		ob_start();
		require_once('../com/connection.php');
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		session_start();
		if(isset($_SESSION['SESS_STUDENT_ID']))
		{
			$x=$_SESSION['SESS_STUDENT_ID'];
			$query="SELECT * FROM student_login WHERE user_id='$x'";
			$exec=mysql_query($query);
			if(!$exec)
			{
				doLogOut();
			}
			$row=mysql_fetch_assoc($exec);
			$ext_flag=$row['ext_flag'];
			if($ext_flag==0)
			{
				unset($_SESSION['SESS_STUDENT_ID']);
				unset($_SESSION['SESS_ROLL_NUMBER']);
				unset($_SESSION['NAME']);
				unset($_SESSION['PARENT_NAME']);
				unset($_SESSION['user_level']);
				header("location: ../index.php");
			}
				
		}
		if(!isset($_SESSION['SESS_STUDENT_ID']) || (trim($_SESSION['SESS_STUDENT_ID']) == '')) {
		header("location: ../com/404page.php");
		exit();
	}
	function doLogOut()
	{
		header("location:../com/logout.php");
	}
?>