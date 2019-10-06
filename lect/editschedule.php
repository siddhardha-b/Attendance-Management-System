<?php
require_once('auth.php');
require_once('../com/connection.php');
require_once('../funcs/check.php');
if($_SESSION['user_level']==4)
{
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
  <link href="../templates/rhuk_milkyway/Yynd25lNXkH4JRMZ.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="../modules/mod_signallogin/templates/default-light/signal.css" type="text/css" />
  <script type="text/javascript" src="../media/system/js/caption.js"></script>
  <script type="text/javascript">
 var tabber_slide_speed = 500; var tabber_fade_in_speed = 500; var tabber_scroll = 0; 
 var slider_speed = 500; var slider_fade_in_speed = 1000; var slider_fade_out_speed = 400; var slider_scroll = 2; 
  </script>

	
	<link rel="stylesheet" href="../templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="../templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/template.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/rounded.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/login.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/sprinkle.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/uitable.css" type="text/css" />
	<link rel="stylesheet" href="../templates/rhuk_milkyway/css/calendar1.css" type="text/css" />
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/css/white.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/css/green_bg.css"
		type="text/css"
	/>
	<link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 6]>
	<link href="/templates/rhuk_milkyway/css/ieonly.css" rel="stylesheet" type="text/css" />
	<link href="/templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	<!-- Javascript JQuery code starts -->
	<script type="text/javascript" src="../includes/js/mootools-core-1.4.1-full-compat.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/tablesort.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/jquerylib.min.js"></script>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/js/JQuery%20form%20validation/css/validationEngine.jquery.css"
		type="text/css"
	/>
	<link
		rel="stylesheet"
		href="../templates/rhuk_milkyway/js/JQuery%20form%20validation/css/template.css"
		type="text/css"
	/>
	<script src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery-1.6.min.js" type="text/javascript"></script>
	<script
		src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/languages/jquery.validationEngine-en.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<script
		src="../templates/rhuk_milkyway/js/JQuery%20form%20validation/js/jquery.validationEngine.js"
		type="text/javascript"
		charset="utf-8"
	></script>
	<!-- Javascript JQuery code ends -->
	
	<!-- Datepicker code starts here -->
	<link rel="stylesheet" href="../templates/rhuk_milkyway/js/datepicker/development-bundle/themes/base/jquery.ui.all.css">
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../templates/rhuk_milkyway/js/datepicker/development-bundle/ui/jquery.ui.datepicker.js"></script>
	<!-- Datepicker code ends here -->
	
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/noconflict.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/jquery.validate.pack.js"></script>
	<script type="text/javascript" src="../templates/rhuk_milkyway/js/paginate.js"></script>
	<script type="text/javascript" language="javascript" src="../templates/rhuk_milkyway/js/tooltip.js"></script>
	<link href="../templates/rhuk_milkyway/css/demo.css" rel="stylesheet" type="text/css" />
	
	<!-- Javascript  JQuery code for menus starts-->
	<link type="text/css" href="../templates/rhuk_milkyway/menus/menu.css" rel="stylesheet" />
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
	
	<script type="text/javascript">
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
	</script>
	
		<link rel="stylesheet" type="text/css" media="screen, projection" href="../templates/rhuk_milkyway/css/slider.css" />
	
	<style type="text/css" media="screen">
	#tooltip
	{
		position: absolute;
		top: 0px;
		left: -999px;
		width: 100px;
		height: 25px;
		line-height: 25px;
		background: transparent url(../templates/rhuk_milkyway/images/tooltip-dongle.png) no-repeat 50% 100%;
		padding-bottom: 5px;
		z-index: 9999;
		display: none !important;
	}
	#tooltipInner1
	{
		padding-left: 5px;
		overflow: hidden;
		color: #fff;
		background: transparent url(../templates/rhuk_milkyway/images/tooltipleft.png) no-repeat 0 0;
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
		background: transparent url(../templates/rhuk_milkyway/images/tooltip.png) no-repeat 100% 0;
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
	
	<script type="text/javascript" src="../templates/rhuk_milkyway/slider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	var imgList=["slider-disabled.png","slider-disabled-1.png","slider.png","slider-1.png"];
	var preloadImg=[]
	for(var i=0,imgSrc;imgSrc=imgList[i];i++)
	{
		preloadImg[i]=new Image();
		preloadImg[i].src="/../"+imgSrc;
	};
	
	var TT=
	{
		tooltip: null,
		tooltipInner: null,
		handle: null,
		timer: null,
		init: function(cbObj)
		{
			// Grab a reference to the slider handle
			var handle=document.getElementById("fd-slider-handle-"+cbObj.elem.id);
	
			// If something has gone wrong then bail out.
			if(!handle) { return; };
	
			// Create the tooltip if needs be.
			if(!document.getElementById('tooltip'))
			{
				var tt=document.createElement("div");
				tt.id="tooltip";
				
				var TTinner1=document.createElement("div");
				TTinner1.id="tooltipInner1";
	
				var TTinner2=document.createElement("div");
				TTinner2.id="tooltipInner2";

				TTinner1.appendChild(TTinner2);
				tt.appendChild(TTinner1);
				
				document.getElementsByTagName('body')[0].appendChild(tt);

				// Cache a reference to the tooltip and tooltip inner
				TT.tooltip=tt;
				TT.tooltipInner=TTinner2;
			};
			
			// Show the tooltip when the slider is focused
			fdSliderController.addEvent(handle,"focus",TT.show);
			// Show the tooltip on mouseover
			fdSliderController.addEvent(handle,"mouseover",TT.show);
			
			// Hide the tooltip when the slider is blurred
			fdSliderController.addEvent(handle,"blur",TT.hide);
			// Hide the tooltip on mouseout using a slight delay
			fdSliderController.addEvent(handle,"mouseout",
				function()
				{
					var elem=document.getElementById("fd-slider-"+this.id.replace(/fd-slider-handle-|fd-slider-/,""));
					if(elem.className.search("focused")!=-1) { return; };
					TT.timer=setTimeout(TT.hide, 1000);
				});
			
			TT.tooltip.style.display="block";
			TT.tooltip.style.visibility="hidden";
			TT.update(cbObj);
			TT.tooltip.style.display="none";
			TT.tooltip.style.visibility="hidden";
		},
		// A function that positions the tooltip and updates it's value
		// This is also used as the callback function for the slider
		update:function(cbObj)
		{ 
			clearTimeout(TT.timer);
			
			var curleft=0,
			curtop=0,
			obj=document.getElementById("fd-slider-handle-"+cbObj.elem.id),
			osw=obj.offsetWidth;
		
			// Try catch for IE's benefit
			try
			{
				while(obj.offsetParent)
				{
					curleft+=obj.offsetLeft;
					curtop+=obj.offsetTop;
					obj=obj.offsetParent;
				};
			}
			catch(err) { };
			
			TT.tooltip.style.left=Math.round((curleft-((TT.tooltip.offsetWidth-osw)/2)))+"px";
			TT.tooltip.style.top=(curtop-30)+"px";
			
			while(TT.tooltipInner.firstChild) { TT.tooltipInner.removeChild(TT.tooltipInner.firstChild); };
			
			var txt=cbObj.elem.tagName.toLowerCase()=="select" ? cbObj.elem.options[cbObj.elem.selectedIndex].text : cbObj.elem.value;
			TT.tooltipInner.appendChild(document.createTextNode(txt));                
		},
		show:function(e)
		{
			clearTimeout(TT.timer);
			e=e || window.event;
			if(e && e.type && (e.type!="focus" && e.type!="mouseover")) return;
			
			TT.tooltip.style.display="block";
			TT.tooltip.style.visibility="visible";
			TT.update({"elem":document.getElementById(this.id.replace(/fd-slider-handle-|fd-slider-/,""))});
		},
		hide:function(e)
		{
			e=e || window.event;
			if(e && e.type && (e.type!="blur" && e.type!="mouseout")) return;
			TT.tooltip.style.display="none";
			TT.tooltip.style.visibility="hidden";
		}
	};
	</script>
</head>



<style type="text/css">
#menu li .drop
{
	background: url("../templates/rhuk_milkyway/menus/img/menu_divider.png") no-repeat right 0px;
}
</style>

<body background="BG.jpg">
<div class="evaluationwrapper">
<div class="evaluationpage_top"></div>
<div class="evaluationpage_center">
	<div class="evaluationwrapper">
<div class="evaluationpage_center">
	<div >
		<div>
		<table border="0" width="100%" cellpadding="5" cellspacing="0">
			<tr valign="center">
								<td class="uitop_col">
					<span style="font-size: 150%; font-weight: 600;"><span style="font-family: arial; color: orange;"></span><span style="font-family: arial; color: #2485DB;"></span></span>
					MVSR Engineering College				</td>
				<td class="uitop_menu" align="right">
										<style type="text/css">
.vline { background-color: #404040; width: 2px; height: 20px; vertical-align: middle; }
.menu_name { color:#404040 !important; font-weight: bold; }
</style>
<table border="0" cellspacing="2">
    <tr>
        <td><a href="home.php"><span class="menu_name">Home</span></a></td>
                <td><div class="vline"></div></td>
        <td><a href="changepwd.php" ><span class="menu_name">Change Password</span></a></td>
                <td><div class="vline"></div></td>
        <td><a href="../com/logout.php"><span class="menu_name">Log Out</span></a></td>
    </tr>
</table>

									</td>
			</tr>
		</table>
	</div>
	<div class="clr"></div>
	</div>
	<script type="text/javascript">
function menu_hold(ele)
{
    var leftOffset=parseInt($(window).width()-$(ele).offset().left);
    var menuBox=parseInt($(ele).children("div").width());
    var activeLeft=parseInt(menuBox-$(ele).width()-7);
    
    if(leftOffset<menuBox) { $(ele).children("div").css("left",-activeLeft); }
    else { $(ele).children("div").css("left","-1px"); }
}

function menu_out(ele)
{
    $(ele).children("div").css("left","-999em"); 
}
</script>
<div style=" display: inline-block; width: 100%; background: #474747; padding: 0px 0px 5px 0px;">
    <ul id="menu" style="margin-top: 0px; vertical-align: middle;">
                    <li  onmouseover="menu_hold(this)" onmouseout="menu_out(this)">
                <a href="#" class="drop"><span>Admissions </span></a>
                
                                <div class="dropdown_1column">
                                            <div class="col_1">            
                            <h3>Admissions</h3>
                            <ul>
                                                                    <li><a href="studentdetails.php" ><span>Student Details</span></a></li>
																	<li><a href="viewstuatt.php" ><span>View Attendance</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
                    <li  onmouseover="menu_hold(this)" onmouseout="menu_out(this)">
                <a href="#" class="drop"><span>Academics</span></a>
                
                                <div class="dropdown_1column">
                                            <div class="col_1">            
                            <h3>Acad View</h3>
                            <ul>
                                                                    <li><a href="editschedule.php" ><span>View/Edit Schedule</span></a></li></ul>
																	<h3>Enter Attendance</h3>
                            <ul>                                    <li><a href="view_tt.php" ><span>As Per Schedule</span></a></li>
							                                        <li><a href="enter_att_wnou.php" ><span>Previous Date</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
			<?php
			
			if($_SESSION['user_level']==2)
			{
			
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Create</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"createstudent.php\" ><span>Student Creation</span></a></li>
																	<li><a href=\"createfaculty.php\" ><span>Create Faculty</span></a></li>
																
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Edit</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"edit.php\" ><span>Edit Student Details</span></a></li>
																	<li><a href=\"edit4.php\" ><span>Edit Faculty Details</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo"<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Schedule</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            
                            <ul>
                                                                    <li><a href=\"createctt.php\" ><span>Create Class Schedule</span></a></li>
																
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			echo "<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>View Passwords</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            <h3>Password</h3>
                            <ul>
                                                                    <li><a href=\"excel.php\" ><span>Faculty</span></a></li>
																    <li><a href=\"sel_sec_pwd.php\" ><span>Student</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			}
			if($_SESSION['user_level']==4)
			{
			
			echo "<li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>View Passwords</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            <h3>Password</h3>
                            <ul>
                                                                    
																    <li><a href=\"sel_sec_pwd1.php\" ><span>Parent</span></a></li>
																	<li><a href=\"excel7.php\" ><span>HOD</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			}?>
			
			
                       <li class="menu_right" style="color: #CCC;"><?php if($_SESSION['user_level']!=4) echo "<a href=\"contactadmin.php\">Contact admin</a>"; ?></li>
    </ul>
    </div>
		<div class="maincontent">
						<div class="evaluationcontent-support">
			<span style="color: #B22222; font-weight: bold; font-size: 12px;">
				Welcome<?php echo " ".$_SESSION['NAME']; ?>		</span>
		</div>
				<div class="evaluationcontent-middle">
					
<?php
$username=$_SESSION['SESS_FIRST_NAME'];
$qry="SELECT * FROM faculty_schedule_yearsecsub WHERE user_name='$username'";
$result=mysql_query($qry) or die(mysql_error());
$row1=mysql_fetch_array($result) or die(mysql_error());

$mp1=$row1['1_yearsecsub'];
$mp2=$row1['2_yearsecsub'];
$mp3=$row1['3_yearsecsub'];
$mp4=$row1['4_yearsecsub'];
$mp5=$row1['5_yearsecsub'];
$mp6=$row1['6_yearsecsub'];
$mp7=$row1['7_yearsecsub'];
$tp1=$row1['8_yearsecsub'];
$tp2=$row1['9_yearsecsub'];
$tp3=$row1['10_yearsecsub'];
$tp4=$row1['11_yearsecsub'];
$tp5=$row1['12_yearsecsub'];
$tp6=$row1['13_yearsecsub'];
$tp7=$row1['14_yearsecsub'];
$wp1=$row1['15_yearsecsub'];
$wp2=$row1['16_yearsecsub'];
$wp3=$row1['17_yearsecsub'];
$wp4=$row1['18_yearsecsub'];
$wp5=$row1['19_yearsecsub'];
$wp6=$row1['20_yearsecsub'];
$wp7=$row1['21_yearsecsub'];
$thp1=$row1['22_yearsecsub'];
$thp2=$row1['23_yearsecsub'];
$thp3=$row1['24_yearsecsub'];
$thp4=$row1['25_yearsecsub'];
$thp5=$row1['26_yearsecsub'];
$thp6=$row1['27_yearsecsub'];
$thp7=$row1['28_yearsecsub'];
$fp1=$row1['29_yearsecsub'];
$fp2=$row1['30_yearsecsub'];
$fp3=$row1['31_yearsecsub'];
$fp4=$row1['32_yearsecsub'];
$fp5=$row1['33_yearsecsub'];
$fp6=$row1['34_yearsecsub'];
$fp7=$row1['35_yearsecsub'];
$sp1=$row1['36_yearsecsub'];
$sp2=$row1['37_yearsecsub'];
$sp3=$row1['38_yearsecsub'];
$sp4=$row1['39_yearsecsub'];
$sp5=$row1['40_yearsecsub'];
$sp6=$row1['41_yearsecsub'];
$sp7=$row1['42_yearsecsub'];

if(isset($_POST['submit']))
{

$mp1=check($_POST['mp1']);
$mp2=check($_POST['mp2']);
$mp3=check($_POST['mp3']);
$mp4=check($_POST['mp4']);
$mp5=check($_POST['mp5']);
$mp6=check($_POST['mp6']);
$mp7=check($_POST['mp7']);
$tp1=check($_POST['tp1']);
$tp2=check($_POST['tp2']);
$tp3=check($_POST['tp3']);
$tp4=check($_POST['tp4']);
$tp5=check($_POST['tp5']);
$tp6=check($_POST['tp6']);
$tp7=check($_POST['tp7']);
$wp1=check($_POST['wp1']);
$wp2=check($_POST['wp2']);
$wp3=check($_POST['wp3']);
$wp4=check($_POST['wp4']);
$wp5=check($_POST['wp5']);
$wp6=check($_POST['wp6']);
$wp7=check($_POST['wp7']);
$thp1=check($_POST['thp1']);
$thp2=check($_POST['thp2']);
$thp3=check($_POST['thp3']);
$thp4=check($_POST['thp4']);
$thp5=check($_POST['thp5']);
$thp6=check($_POST['thp6']);
$thp7=check($_POST['thp7']);
$fp1=check($_POST['fp1']);
$fp2=check($_POST['fp2']);
$fp3=check($_POST['fp3']);
$fp4=check($_POST['fp4']);
$fp5=check($_POST['fp5']);
$fp6=check($_POST['fp6']);
$fp7=check($_POST['fp7']);
$sp1=check($_POST['sp1']);
$sp2=check($_POST['sp2']);
$sp3=check($_POST['sp3']);
$sp4=check($_POST['sp4']);
$sp5=check($_POST['sp5']);
$sp6=check($_POST['sp6']);
$sp7=check($_POST['sp7']);



$query=mysql_query("UPDATE faculty_schedule_yearsecsub SET 1_yearsecsub='$mp1',2_yearsecsub='$mp2',3_yearsecsub='$mp3',4_yearsecsub='$mp4',5_yearsecsub='$mp5',6_yearsecsub='$mp6',7_yearsecsub='$mp7',
8_yearsecsub='$tp1',9_yearsecsub='$tp2',10_yearsecsub='$tp3',11_yearsecsub='$tp4',12_yearsecsub='$tp5',13_yearsecsub='$tp6',14_yearsecsub='$tp7',
15_yearsecsub='$wp1',16_yearsecsub='$wp2',17_yearsecsub='$wp3',18_yearsecsub='$wp4',19_yearsecsub='$wp5',20_yearsecsub='$wp6',21_yearsecsub='$wp7',
22_yearsecsub='$thp1',23_yearsecsub='$thp2',24_yearsecsub='$thp3',25_yearsecsub='$thp4',26_yearsecsub='$thp5',27_yearsecsub='$thp6',28_yearsecsub='$thp7',
29_yearsecsub='$fp1',30_yearsecsub='$fp2',31_yearsecsub='$fp3',32_yearsecsub='$fp4',33_yearsecsub='$fp5',34_yearsecsub='$fp6',35_yearsecsub='$fp7',
36_yearsecsub='$sp1',37_yearsecsub='$sp2',38_yearsecsub='$sp3',39_yearsecsub='$sp4',40_yearsecsub='$sp5',41_yearsecsub='$sp6',42_yearsecsub='$sp7' WHERE user_name='$username';")or die(mysql_error());;
if($query)
{
	echo "<script type=\"text/javascript\">";
	echo "alert(\"Succesfully Edited Schedule\")";
	echo "</script>";
	echo "<h2><center><b>Succesfully Edited Schedule.</b></center></h2>";
	
}
else
{
	echo "Failed to  update schedule";
}

}










?>
<h2><font color="#0033CC"><b><center>Edit your schedule</center></b></font></h2>



<form id="" name="form1" method="post" action="">
<table class="inner_table1">
<tr>
<th>day\period</th>
  <th>Period1</th>
  <th>Period2</th>
  <th>Period3</th>
   <th>Period4</th>
  <th>Period5</th>
  <th>Period6</th>
  <th>Period7</th>
</tr>
<tr>
<td>Monday</td>
<td>
<input type="text" class="input" name="mp1" id="mp1" value="<?php echo $mp1;?>"/> </td>
<td>
<input type="text" class="input" name="mp2" id="mp2" value="<?php echo $mp2;?>"/> </td>
<td>
<input type="text" class="input"  name="mp3" id="mp3" value="<?php echo $mp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="mp4" id="mp4" value="<?php echo $mp4;?>"/> </td>
<td>
<input type="text" class="input" name="mp5" id="mp5" value="<?php echo $mp5;?>"/></td> 
<td>
<input type="text" class="input" name="mp6" id="mp6" value="<?php echo $mp6;?>"/></td> 
<td>
<input type="text" class="input"  name="mp7" id="mp7" value="<?php echo $mp7;?>"/>            
</td>
</tr>
<tr class="alt">
<td>Tuesday</td>
<td>
<input type="text" class="input" name="tp1" id="tp1" value="<?php echo $tp1;?>"/> </td>
<td>
<input type="text" class="input" name="tp2" id="tp2" value="<?php echo $tp2;?>"/> </td>
<td>
<input type="text" class="input"  name="tp3" id="tp3" value="<?php echo $tp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="tp4" id="tp4" value="<?php echo $tp4;?>"/> </td>
<td>
<input type="text" class="input" name="tp5" id="tp5" value="<?php echo $tp5;?>"/></td> 
<td>
<input type="text" class="input" name="tp6" id="tp6" value="<?php echo $tp6;?>"/></td> 
<td>
<input type="text" class="input"  name="tp7" id="tp7" value="<?php echo $tp7;?>"/>            
</td>
</tr>
<tr>
<td>Wednesday</td>
<td>
<input type="text" class="input" name="wp1" id="wp1" value="<?php echo $wp1;?>"/> </td>
<td>
<input type="text" class="input" name="wp2" id="wp2" value="<?php echo $wp2;?>"/> </td>
<td>
<input type="text" class="input"  name="wp3" id="wp3" value="<?php echo $wp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="wp4" id="wp4" value="<?php echo $wp4;?>"/> </td>
<td>
<input type="text" class="input" name="wp5" id="wp5" value="<?php echo $wp5;?>"/></td> 
<td>
<input type="text" class="input" name="wp6" id="wp6" value="<?php echo $wp6;?>"/></td> 
<td>
<input type="text" class="input"  name="wp7" id="wp7" value="<?php echo $wp7;?>"/>            
</td>
</tr>
<tr class="alt">
<td>Thursday</td>
<td>
<input type="text" class="input" name="thp1" id="thp1" value="<?php echo $thp1;?>"/> </td>
<td>
<input type="text" class="input" name="thp2" id="thp2" value="<?php echo $thp2;?>"/> </td>
<td>
<input type="text" class="input"  name="thp3" id="thp3" value="<?php echo $thp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="thp4" id="thp4" value="<?php echo $thp4;?>"/> </td>
<td>
<input type="text" class="input" name="thp5" id="thp5" value="<?php echo $thp5;?>"/></td> 
<td>
<input type="text" class="input" name="thp6" id="thp6" value="<?php echo $thp6;?>"/></td> 
<td>
<input type="text" class="input"  name="thp7" id="thp7" value="<?php echo $thp7;?>"/>            
</td>
</tr>
<tr>
<td>Friday</td>
<td>
<input type="text" class="input" name="fp1" id="fp1" value="<?php echo $fp1;?>"/> </td>
<td>
<input type="text" class="input" name="fp2" id="fp2" value="<?php echo $fp2;?>"/> </td>
<td>
<input type="text" class="input"  name="fp3" id="fp3" value="<?php echo $fp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="fp4" id="fp4" value="<?php echo $fp4;?>"/> </td>
<td>
<input type="text" class="input" name="fp5" id="fp5" value="<?php echo $fp5;?>"/></td> 
<td>
<input type="text" class="input" name="fp6" id="fp6" value="<?php echo $fp6;?>"/></td> 
<td>
<input type="text" class="input"  name="fp7" id="fp7" value="<?php echo $fp7;?>"/>            
</td>
</tr>
<tr class="alt">
<td>Saturday</td>
<td>
<input type="text" class="input" name="sp1" id="sp1" value="<?php echo $sp1;?>"/> </td>
<td>
<input type="text" class="input" name="sp2" id="sp2" value="<?php echo $sp2;?>"/> </td>
<td>
<input type="text" class="input"  name="sp3" id="sp3" value="<?php echo $sp3;?>"/></td> 
 <td>
<input type="text" class="input"  name="sp4" id="sp4" value="<?php echo $sp4;?>"/> </td>
<td>
<input type="text" class="input" name="sp5" id="sp5" value="<?php echo $sp5;?>"/></td> 
<td>
<input type="text" class="input" name="sp6" id="sp6" value="<?php echo $sp6;?>"/></td> 
<td>
<input type="text" class="input"  name="sp7" id="sp7" value="<?php echo $sp7;?>"/>            
</td>
</tr>

</table><br>
<center><button class="css_button" name="submit">submit</button></form></center>
       </table>
</div></p>
								</div>
							</div>
						</td>
						 		
      
				<br />
						</div></table>
						
						
						</div></div>
				<div class="evaluationfooter">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="34" >
				<tr>
					<td width="50%" valign="middle" style="color: #ffffff; text-align:center; font-weight: bold;">
					Developed by <a target="_blank" href="#" style="color:orange !important;font-size:12px;">MPP</a>
					</td>
				</tr>
			</table>
		</div>
			</div>
	<div class="evaluationpage_bottom"></div>
</div>
</div>



                          
</body>
</html>