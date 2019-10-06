<?php
		require_once('../com/connection.php');
		ob_start();
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		session_start();
		if(isset($_SESSION['SESS_MEMBER_ID']))
		{
			$x=$_SESSION['SESS_MEMBER_ID'];
			$query="SELECT ext_flag FROM faculty_login WHERE user_id='$x'";
			$exec=mysql_query($query);
			if(!$exec)
			{
				doLogOut();
			}
			$row=mysql_fetch_assoc($exec);
			$ext_flag=$row['ext_flag'];
			if($ext_flag==0)
			{
				unset($_SESSION['SESS_MEMBER_ID']);
				unset($_SESSION['SESS_FIRST_NAME']);
				unset($_SESSION['NAME']);
				unset($_SESSION['user_level']);
				unset($_SESSION['dept']);
				header("location: ../index.php");
			}
				
		}
		if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: ../com/404page.php");
		exit();
	}
	function doLogOut()
	{
		header("location:../com/logout.php");
	}
?>