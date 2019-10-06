<?php
if(!ob_start("ob_gzhandler")) ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forbidden</title>
</head>
<body>
<h1>You Don't have required permissions to view this page</h1>
<?php
if(isset($_SESSION['user_level']))
{
if($_SESSION['user_level']>=1&&$_SESSION['user_level']<=4)
{
	echo "<a href=\"../lect/home.php\"><h2>Go Back To Home Page</a>";
	header( "refresh:7;url=../lect/home.php" );
}
elseif($_SESSION['user_level']>=11&&$_SESSION['user_level']<=14)
{
	echo "<a href=\"../stu/home.php\"><h2>Go Back To Home Page</a>";
	header( "refresh:7;url=../stu/home.php" );
}
}
else
{
	echo "<a href=\"../index.php\"><h3>Go Back To login</a></h3>";
	header( "refresh:7;url=../index.php" );
}
?>
</body>
</html>
