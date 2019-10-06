<?php
	if(!ob_start("ob_gzhandler")) ob_start();
	session_start();
	require_once('com/connection.php');
	require_once('funcs/ipcheck.php');
	require_once('funcs/ABEncryption.php');
	$timezone = "Asia/Calcutta";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$errmsg_arr = array();
	$errflag = false;
	function clean($str) 
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) 
		{
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 	$npassword=ABEncryption($username,$password);
	if($username == '') 
	{
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($errflag) 
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	if(strlen($username)==9)
	{
		$qry="SELECT * FROM faculty_login WHERE user_name='$username' AND password='$npassword' LIMIT 1";
		$result=mysql_query($qry);
		if($result) 
		{
			if(mysql_num_rows($result) > 0) 
			{
				$member = mysql_fetch_assoc($result);
				$user_status=$member['user_status'];
				if($user_status==1)
				{
					session_regenerate_id();
					$querydb="UPDATE faculty_login SET ext_flag='1' WHERE user_name='$username'";
					$exec=mysql_query($querydb);
					if(!$exec)
					{
						exit();
					}
					$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
					$_SESSION['SESS_FIRST_NAME'] = $member['user_name'];
					$_SESSION['NAME']=$member['name'];
					$_SESSION['user_level']=$member['user_level'];
					$_SESSION['dept']=$member['faculty_dept'];
					$time=date('Y-m-d H:i:s');
					$ip=get_client_ip();
					$query1="UPDATE faculty_login SET user_last_login_ip='$ip' , user_last_login='$time' WHERE user_name='$username'";
					$result1=mysql_query($query1);
					if(!$result1)
					{
						exit();
					}
					session_write_close();
					if($user_status&&($_SESSION['user_level']>=1&&$_SESSION['user_level']<=4))
						header("location:lect/home.php?aid=0");
					exit();
				}
				else
				{
					header("location:com/user_suspended.html");
				}
			}
			else 
			{
				$errmsg_arr[] = 'user name and password not found';
				$errflag = true;
				if($errflag) 
				{
					$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
					session_write_close();
					header("location: index.php");
					exit();
				}
			}
		}
		else 
		{
			die("Query failed");
		}
	}
	else
	{
		$npassword1=ABEncryption(substr($username,-9),$password);
		$qry="SELECT * FROM student_login WHERE roll_number='$username' AND password='$npassword1' LIMIT 1";
		$result=mysql_query($qry);
		if($result) 
		{
			if(mysql_num_rows($result)==1) 
			{
				$member = mysql_fetch_assoc($result);
				$user_status=$member['user_status'];
				if($user_status==1)
				{	
					session_regenerate_id();
					$querydb="UPDATE student_login SET ext_flag='1' WHERE roll_number='$username'";
					$exec=mysql_query($querydb);
					if(!$exec)
					{
						exit();
					}
					$_SESSION['SESS_STUDENT_ID'] = $member['user_id'];
					$_SESSION['SESS_ROLL_NUMBER'] = $member['roll_number'];
					$_SESSION['NAME']=$member['name'];
					$_SESSION['PARENT_NAME']=$member['parent_name'];
					$_SESSION['user_level']=$member['user_level'];
					$time=date('Y-m-d H:i:s');
					$ip=get_client_ip();
					$query1="UPDATE student_login SET user_last_login_ip='$ip' , user_last_login='$time' WHERE roll_number='$username'";
					$result1=mysql_query($query1);
					if(!$result1)
					{
						header("/com/logout.php");
					}
					session_write_close();
					if(($user_status==1)&&($_SESSION['user_level']>=11&&$_SESSION['user_level']<=13))
					header("location:stu/home.php?aid=0");
					exit();
				}
				else
				{
					header("location:com/user_suspended.html");
				}
			}
				else 
				{
					$errmsg_arr[] = "username and password not found";
					$errflag = true;
					if($errflag) 
					{
						$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
						session_write_close();
						header("location:index.php");
						exit();
			
					}
				}
		}
		
		else 
		{
			die("Query failed");
		}
	}
?>