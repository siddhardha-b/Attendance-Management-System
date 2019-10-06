<?php
if(!ob_start("ob_gzhandler")) ob_start();
	session_start();
	if(isset($_SESSION['SESS_MEMBER_ID'])&&isset($_SESSION['SESS_FIRST_NAME']))
	{
		header("location:lect/home.php");
	}
	elseif(isset($_SESSION['SESS_STUDENT_ID'])&&isset($_SESSION['SESS_ROLL_NUMBER']))
	{
		header("location:stu/home.php");
	}
	$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
?>
<?php
require_once('funcs/ABEncryption.php');
require_once('com/connection.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<!-- Mirrored from mvsr.winnou.net/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 01 May 2014 12:36:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	  <base  />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="joomla, Joomla" />
  <meta name="description" content="Joomla! - the dynamic portal engine and content management system" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Welcome to MVSR Engineering College</title>
  <link href="indexc0d0.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="index7b17.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="templates/rhuk_milkyway/Yynd25lNXkH4JRMZ.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="modules/mod_signallogin/templates/default-light/signal.css" type="text/css" />
  <script type="text/javascript" src="media/system/js/caption.js"></script>
  <script type="text/javascript">
 var tabber_slide_speed = 500; var tabber_fade_in_speed = 500; var tabber_scroll = 0; 
 var slider_speed = 500; var slider_fade_in_speed = 1000; var slider_fade_out_speed = 400; var slider_scroll = 2; 
  </script>

	
	<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/template.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/rounded.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/login.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/sprinkle.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/uitable.css" type="text/css" />
	<link rel="stylesheet" href="templates/rhuk_milkyway/css/calendar1.css" type="text/css" />
	<link
		rel="stylesheet"
		href="templates/rhuk_milkyway/css/white.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="templates/rhuk_milkyway/css/green_bg.css"
		type="text/css"
	/>
	<link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 6]>
	<link href="/templates/rhuk_milkyway/css/ieonly.css" rel="stylesheet" type="text/css" />
	<link href="/templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	<!-- Javascript JQuery code starts -->
	<script type="text/javascript" src="includes/js/mootools-core-1.4.1-full-compat.js"></script>
	<script type="text/javascript" src="templates/rhuk_milkyway/js/tablesort.js"></script>
	<script type="text/javascript" src="templates/rhuk_milkyway/js/jquerylib.min.js"></script>
	<link
		rel="stylesheet"
		href="templates/rhuk_milkyway/js/JQuery%20form%20validation/css/validationEngine.jquery.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="templates/rhuk_milkyway/js/JQuery%20form%20validation/css/template.css"
		type="text/css"
	/>
	<script src="templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery-1.6.min.js" type="text/javascript"></script>
	<script
		src="templates/rhuk_milkyway/js/JQuery%20form%20validation/js/languages/jquery.validationEngine-en.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<script
		src="templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery.validationEngine.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<!-- Javascript JQuery code ends -->
	
	<!-- Datepicker code starts here -->
	<link rel="stylesheet" href="templates/rhuk_milkyway/js/datepicker/development-bundle/themes/base/jquery.ui.all.css">
	<script src="templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.datepicker.js"></script>
	<!-- Datepicker code ends here -->
	
	<script type="text/javascript" src="templates/rhuk_milkyway/js/noconflict.js"></script>
	<script type="text/javascript" src="templates/rhuk_milkyway/js/jquery.validate.pack.js"></script>
	<script type="text/javascript" src="templates/rhuk_milkyway/js/paginate.js"></script>
	<script type="text/javascript" language="javascript" src="templates/rhuk_milkyway/js/tooltip.js"></script>
	<link href="templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	
	<!-- Javascript  JQuery code for menus starts-->
	<link type="text/css" href="templates/rhuk_milkyway/menus/menu.css" rel="stylesheet" />
	<!-- Javascript  JQuery code for menus ends-->
	
	<!--for pagination and table sort -->
	<!--[if lt IE 7]>
	<style type="text/css" media="screen">
	body { behavior:url("/templates/rhuk_milkyway/csshover.htc"); }
	</style>
	<![endif]-->
	
	<!--[if IE]>
	<style type="text/css">
	ul.fdtablePaginater { display: inline-block; }
	ul.fdtablePaginater { display: inline; }
	ul.fdtablePaginater li { float: left; }
	ul.fdtablePaginater { text-align: center; }
	</style>
	<![endif]-->
	
	<!--<script type="text/javascript">
	//<![CDATA[
	var callbackTest=
	{
		calculateTotalRating:function(opts)
		{
			var trs=document.getElementById("theTable").getElementsByTagName("tbody")[0].rows,
			tot=0,
			cnt=0,
			cell=document.getElementById("visibleTotal");
			
			for(var i=0,tr;tr=trs[i];i++)
			{
				// If the row is visible i.e. has not display:none or the className "invisibleRow" (used by the fake filter)
				if(tr.style.display!="none" && tr.className.search(/(^|\s)invisibleRow($|\s)/)==-1)
				{
					tot+=Number(fdTableSort.getInnerText(tr.cells[6]));
					cnt++;
				};
			};
			
			while(cell.firstChild) { cell.removeChild(cell.firstChild); };
			
			cell.appendChild(document.createTextNode(Number(tot / cnt).toFixed(2)));
		},
		displayTextInfo:function(opts)
		{
			if(!("currentPage" in opts)) { return; }
			
			var p=document.createElement('p'),
			t=document.getElementById('theTable-fdtablePaginaterWrapTop'),
			b=document.getElementById('theTable-fdtablePaginaterWrapBottom');
			
			p.className="paginationText";
			p.appendChild(document.createTextNode("Showing page"+opts.currentPage+" of "+Math.ceil(opts.totalRows/opts.rowsPerPage)));
			
			t.insertBefore(p.cloneNode(true),t.firstChild);
			b.appendChild(p);
		}
	};
	//]]>
	</script>-->
	
		<link rel="stylesheet" type="text/css" media="screen, projection" href="templates/rhuk_milkyway/css/slider.css" />
	
	<style type="text/css" media="screen">
	#tooltip
	{
		position: absolute;
		top: 0px;
		left: -999px;
		width: 100px;
		height: 25px;
		line-height: 25px;
		background: transparent url(templates/rhuk_milkyway/images/tooltip-dongle.png) no-repeat 50% 100%;
		padding-bottom: 5px;
		z-index: 9999;
		display: none !important;
	}
	#tooltipInner1
	{
		padding-left: 5px;
		overflow: hidden;
		color: #fff;
		background: transparent url(templates/rhuk_milkyway/images/tooltipleft.png) no-repeat 0 0;
		display: none !important;
	}
	#tooltipInner2
	{
		padding: 0 5px 0 0;
		height: 22px;
		line-height: 22px;
		overflow: hidden;
		color: #fff;
		text-align: center;
		background: transparent url(templates/rhuk_milkyway/images/tooltip.png) no-repeat 100% 0;
		text-shadow: #000 1px 1px 1px;
		display: none !important;
	}
	</style>
	
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="/../ie.css" />
	<style type="text/css">
	/* Basic styles for non png aware Internet Explorer 6 */
	#tooltip
	{
		background-image: url(/templates/rhuk_milkyway/images/tooltip-dongle.gif); 
		display: none !important;
	}
	#tooltipInner1
	{
		background-image: none;
		padding: 0;
		display: none;
	}
	#tooltipInner2
	{
		background-image: none;
		background: #000;
		padding: 0;
		display: none;
	}
	</style>
	<![endif]-->
	
	<script type="text/javascript" src="templates/rhuk_milkyway/slider.js"></script>

</head>



<style type="text/css">
#menu li .drop
{
	background: url("templates/rhuk_milkyway/menus/img/menu_divider.png") no-repeat right 0px;
}
</style>

<body >
<div class="evaluationwrapper">
<div class="evaluationpage_top"></div>
<div class="evaluationpage_center">
	<div  class="evaluationheader" >
		<div>
		<table border="0" width="100%" cellpadding="5" cellspacing="0">
			<tr valign="center">
								<td class="uitop_col">
					<img src="logo.jpg" width="50" height="40"><span style="font-size: 200%; font-weight: 1500;"><span style="font-family: Donovan Quidaw; color: orange;"></span><span style="font-family: Donovan Quidaw; color: #2485DB;">MVSR Engineering College</span>
						</span>			</td>
				<td class="uitop_menu" align="right">
									</td>
			</tr>
		</table>
	</div>
	<div class="clr"></div>
	</div>
		<div class="maincontent">
				<div class="evaluationcontent-middle">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" style="margin-top: 20px;">
					<tr>
						<td width="60%">
							<div id="sprinkle-box" width="100%">
								<div style="height: 300px;">
									<p class="sprinkle"><!--[if lt IE 9]>
<script type="text/javascript" src="/modules/mod_sprinkle/excanvas.js"></script>
<![endif]<img src="log.jpg" width="500" height="350">-->
<script src="modules/mod_sprinkle/tagcanvas.min.js" type="text/javascript"></script>


<div id="tags" >

</div>
<?php
if(isset($_POST['Submit']))
{
	$flag=true;
	$user_id=$_POST["username"];
	if(!empty($user_id))
	{
	if(strlen($user_id)==9)
	{
		$query="SELECT * FROM faculty_login WHERE user_name='$user_id' LIMIT 1";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_array($result);
			$sendemail=$row['recemail'];
			if(empty($sendemail))
			{
				echo "<h1><center>You haven't entered any recovery e-mail address.</center>";
				$flag=false;
			}
			$username=$row['user_name'];
			$password=$row['password'];
			$password=ABDecryption($username,$password);
			$to=$sendemail;
			$subject="Login Details For Attendence";
			$txt="username: $username \n password: $password\n";
			$headers="";
			if(mail($to,$subject,$txt,$headers)&&$flag)
			{
				echo "<br><br><center>Please check your mail for futher instructions.If you havn't recieved mail you can contact admin over <a href=\"com/contactadmin.php\">here</a></center><br>";
				echo"<center>Go back to<a href=\"index.php\">login</center></a>";
			}
			elseif(!$flag)
			{
			}
			else
			{
				echo "<br><br><center>Failed to send mail.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
				echo "Redirecting You to login page in 5 seconds";
				header( "refresh:7;url=index.php" );
			}
		}
		else
		{
			echo "No Such User Found.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
		}
	}else if(strlen($user_id)==12||strlen($user_id)==14)
      {
		$flag=true;
$query="SELECT * FROM student_login WHERE roll_number='$user_id' LIMIT 1";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_array($result);
			$sendemail=$row['recemail'];
			if(empty($sendemail))
			{
				echo "<h1><center>You haven't entered any recovery e-mail</center>";
				$flag=false;
			}
			$username=$row['roll_number'];
			$password=$row['password'];
			$username=substr($username,-9);
			$password=ABDecryption($username,$password);
			$to=$sendemail;
			$subject="Login Details For Attendence";
			$txt="username: $username \n password: $password\n";
			if(mail($to,$subject,$txt)&&$flag)
			{
				echo "<br><br><h1><center>Please check your recovery email id for futher instructions.If you havn't recieved mail you can contact admin over <a href=\"com/contactadmin.php\">here</a></center><br>";
				echo"<center>Go back to<a href=\"index.php\">login</center></a>";
			}
			elseif(!$flag)
			{
			}
			else
			{
				echo "<br><br><center>Failed to send mail.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
				echo "Redirecting You to login page in 5 seconds";
				header( "refresh:7;url=index.php" );
			}
		}
		else
		{
			  echo "<h1><center>No Such User Found.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
		}
}
else{

$query="SELECT * FROM student_login WHERE roll_number='$user_id' LIMIT 1";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_array($result);
			$sendemail=$row['parent_email'];
			
			$username=$row['roll_number'];
			$password=$row['password'];
			$username=substr($username,-9);
			$password=ABDecryption($username,$password);
			$to=$sendemail;
			$subject="Login Details For Attendence";
			$txt="username: $username \n password: $password\n";
			if(mail($to,$subject,$txt))
			{
				echo "<br><br><h1><center>Please check your recovery email id for futher instructions.If you havn't recieved mail you can contact admin over <a href=\"com/contactadmin.php\">here</a></center><br>";
				echo"<center>Go back to<a href=\"index.php\">login</center></a>";
			}
			else
			{
				echo "<br><br><h1><center>Failed to send mail.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
				echo "Redirecting You to login page in 5 seconds";
				header( "refresh:7;url=index.php" );
			}
		}
		else
		{
			echo "<h1><center>No Such User Found.For more details you can contact admin over <a href=\"com/contactadmin.php\">here</a></center>";
		}


}	

		
	}
else
{
	echo "<br><br><h1><center>Please Enter A Valid ID";
}
	
}

?>
<center><form id="form1" name="form1" method="post" action="">
  <table width="500" border="0">
    <tr>
      <td>Enter Username</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<br>
<a href="index.php"><h1><center><b>Go back to Login Page</b></center></h1></a>
</table>
				<br /> <br /> <br /> <br /> <br />
						</div>
				<div class="evaluationfooter">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="34" >
				<tr>
					<td width="50%" valign="middle" style="color: #ffffff; text-align:center; font-weight: bold;">
					Developed by <a target="_blank" href="#" style="color:orange !important;font-size:12px;">MPP</a>
					</td>
				</tr>
			</table>
		</div>
			</div></div>
	<div class="evaluationpage_bottom"></div>
</div>
</div>
</body>
</html>