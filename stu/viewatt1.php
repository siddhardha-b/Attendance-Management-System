 <?php
	require_once('auth.php');
	require_once('../com/connection.php');
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

<body >
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
                                                                    <li><a href="admissiondetails.php" ><span>personal Details</span></a></li>
																	<li><a href="viewatt.php" ><span>view Attendance</span></a></li>
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
                                                                    <li><a href="viewtt.php" ><span>View Schedule</span></a></li>
																	<li><a href="sel_alrt.php?sid=0&tid=$count" ><span>view alerts</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
                        <li class="menu_right" style="color: #CCC;"><?php if($_SESSION['user_level']!=4) echo "<a href=\"contactadmin.php\">Contact admin</a>"; ?></li> 
    </ul>
    </div>
		<div class="maincontent">
						<div class="evaluationcontent-support">
			<span style="color: #B22222; font-weight: bold; font-size: 12px;">
					Welcome<?php if($_SESSION['user_level']!=12) echo " ".$_SESSION['NAME']; else echo $_SESSION['parent_name']; ?>		</span>
		</div>
				<div class="evaluationcontent-middle">

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getatt.php?q="+str,true);
  xmlhttp.send();
}
</script>


<?php
require_once('../com/connection.php');
require_once('../funcs/ABAttEncryption.php');
require_once('../funcs/getPeriod.php');
$level=$_SESSION['user_level'];
$roll=$_SESSION['SESS_ROLL_NUMBER'];
if($level==12)
{
$roll=$substr($roll,-12);
}
$date=date("Y-m-d");
//$day=date("d");
$quer2="SELECT * FROM student_current_details WHERE roll_number='$roll'";
$res1=mysql_query($quer2);
if($row=mysql_fetch_array($res1)){
$dep=$row['current_branch'];
$yer=$row['current_year'];}
if($yer==1)
{
$query="SELECT * FROM sem_table WHERE year='$yer' ";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$day=$row['start_date'];
}
else
{$query="SELECT * FROM sem_table WHERE branch='$dep' AND year='$yer' ";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$day=$row['start_date'];}
$quer6="SELECT * FROM att_table WHERE roll_number='$roll' AND date>=$day";
$res3=mysql_query($quer6);
$arr=array();

$z=0;

$sub=array(0=>'0',1=>'0',2=>'0',3=>'0',4=>'0',5=>'0',6=>'0',7=>'0',8=>'0',9=>'0',10=>'0',11=>'0',12=>'0',13=>'0',14=>'0',15=>'0');
$pres=array(0=>'0',1=>'0',2=>'0',3=>'0',4=>'0',5=>'0',6=>'0',7=>'0',8=>'0',9=>'0',10=>'0',11=>'0',12=>'0',13=>'0',14=>'0',15=>'0');

while($row3=mysql_fetch_array($res3))
{
$n=0;
if(empty($arr))
{
$arr[$z]=$row3['subject'];
}
else 
{
for($o=0;$o<=$z;$o++)
{
if($arr[$o]==$row3['subject'])
{
$n++;
break;
}

}

if($n==0)
{
$z++;
$arr[$z]=$row3['subject'];
}
}
}

$quer6="SELECT * FROM att_table WHERE roll_number='$roll'";
$res3=mysql_query($quer6);
while($row3=mysql_fetch_array($res3))
{$day1=$row3['date'];
for($n=0;$n<=$z;$n++)
{
if($arr[$n]==$row3['subject'])
{
if(decrypt1($row3['p_or_a'],$day1)=='P')
{
$pres[$n]=$pres[$n]+1;
}
$sub[$n]=$sub[$n]+1;
}
}

}
$sum=0;$sum1=0;
for($r=0;$r<=$z;$r++)
{
$sum+=$sub[$r];
$sum1+=$pres[$r];
}

echo "<center><table class=\"inner_table_big1\" border=\"1\" style=\"width:500px; background-color:white;\">";
echo "<th>Subject</th><th>Total no. of classes</th><th>no. of classes attended</th><th>Percentage</th>";
for($r=0;$r<=$z;$r++)
{
$per=($pres[$r]*100)/$sub[$r];
$per=substr($per,0,4);
$subname=getFullPeriod($arr[$r]);
echo "<tr><td>".$subname."</td><td>".$sub[$r]."</td><td>".$pres[$r]."</td><td>".$per."</td></tr>";
}
$pers=($sum1*100)/$sum;
echo "<tr><td>Total</td><td>$sum</td><td>$sum1</td><td>$pers</td></tr>";
echo "</table>";

echo "<br><br><br><br><br><br>";











$quer2="SELECT * FROM student_current_details WHERE roll_number='$roll'";
$res1=mysql_query($quer2);
if($row=mysql_fetch_array($res1)){
$dep=$row['current_branch'];
$yer=$row['current_year'];}
if($yer==1)
{
$query="SELECT * FROM sem_table WHERE year='$yer' ";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$day=$row['start_date'];
}
else
{$query="SELECT * FROM sem_table WHERE branch='$dep' AND year='$yer' ";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$day=$row['start_date'];}
//$day="2014-01-16";
$sday=$day;
$date=date("Y-m-d");

echo"<div id=\"txtHint\"><b>";
echo"<center><table class=\"inner_table_big1\" border=\"1\" style=\"width:700px;\" >";
echo"<th style=\"background-color:#E6FFFF;\">date\period</th><th style=\"background-color:#E6FFFF;\">period 1</th><th style=\"background-color:#E6FFFF;\">period 2</th><th style=\"background-color:#E6FFFF;\">period 3</th><th style=\"background-color:#E6FFFF;\">period 4</th><th style=\"background-color:#E6FFFF;\">period 5</th><th style=\"background-color:#E6FFFF;\">period 6</th><th style=\"background-color:#E6FFFF;\">period 7</th>";
$f=1;
while($f<=50)
{$i=1;
echo"<tr><td style=\"background-color:#FFE0EA;\">$day</td>";
while($i<=7)
{
$qur="SELECT * FROM att_table WHERE roll_number='$roll'  AND period='$i' AND date='$day'";
$res=mysql_query($qur);

$row=mysql_fetch_array($res);
if($row)
{
$stat=decrypt1($row['p_or_a'],$day);
if($stat=='P')
{
echo"<td>".$stat."</td>";
}
else
{
echo"<td style=\"background-color:#FFE0EA;\" >".$stat."</td>";
}
}
else
{
echo "<td  style=\"background-color:#FFECDA;\" >-</td>";}$i++;
}if($day>=$date)
break;
$day=date('Y-m-d', strtotime("$day +1 day"));
echo"</tr>";

$f++;

}
echo"</table>";
echo"</b></div>";
echo"<form>";

$dif=((strtotime($date)-strtotime($sday))/86400);
/*$sday=date($sday);
$day=date($day);*/


echo"<center>";
if(($dif>=50)&&($dif<100))
{
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"1\">";
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"2\">";
}
else if(($dif>=100)&&($dif<150))
{
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"1\">";
$day1=date('Y-m-d', strtotime("$sday +50 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"2\">";
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"3\">";
}
else if(($dif>=150)&&($dif<200))
{
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"1\">";
$day1=date('Y-m-d', strtotime("$sday +50 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"2\">";
$day2=date('Y-m-d', strtotime("$sday +100 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"3\">";
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"4\">";
}
else if(($dif>=200)&&($dif<250))
{echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"1\">";
$day3=date('Y-m-d', strtotime("$sday +50 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"2\">";
$day1=date('Y-m-d', strtotime("$sday +100 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"3\">";
$day2=date('Y-m-d', strtotime("$sday +150 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"4\">";
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"5\">";
}
else if($dif>=250)
{echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"1\">";
$day3=date('Y-m-d', strtotime("$sday +50 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"2\">";
$day1=date('Y-m-d', strtotime("$sday +100 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"3\">";
$day2=date('Y-m-d', strtotime("$sday +150 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"4\">";
$day4=date('Y-m-d', strtotime("$sday +200 days"));
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"5\">";
echo"<input type=\"button\" onclick=\"showUser(value)\" value=\"6\">";
}
echo"</form>";
?>

<!--<br>
<div id="txtHint"><b></b></div>
<form>
<!--<select name="users" onchange="showUser(this.value)">
<option value="0">1</option>
<option value="1">2</option>
<option value="2">3</option>
<option value="3">Glenn Quagmire</option>
<option value="4">Joseph Swanson</option>

</select>-->
<!--<input type="button" onclick="showUser(value)" value="0" />
<input type="button" onclick="showUser(value)" value="1" />
<input type="button" onclick="showUser(value)" value="2" />

</form>-->
    </table>
</div></div></p>
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

                          
</body>
</html>