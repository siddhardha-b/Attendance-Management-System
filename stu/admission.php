<?php
require_once('../com/connection.php');
require_once('auth.php');



$username=$_SESSION['SESS_ROLL_NUMBER'];

 $query="SELECT * FROM admissiondetails WHERE roll_no='$username'";
 $res=mysql_query($query);
 $row=mysql_fetch_array($res);
 if($row)
 {
 $first_name=$row['first_name'];
$last_name=$row['last_name'];
$date_birth=$row['date_birth'];
$id_mark1=$row['id_mark1'];
$id_mark2=$row['id_mark2'];
$father_name=$row['father_name'];
$mother_name=$row['mother_name'];
$gaurdian_name=$row['gaurdian_name'];
$occupation=$row['occupation'];
$annual_income=$row['annual_income'];
$birth_place=$row['birth_place'];
$area_candidate=$row['area_candidate'];
$modeofadmission=$row['modeofadmission'];
$mother_tongue=$row['mother_tongue'];
$gender=$row['gender'];
$marital_status=$row['marital_status'];
$religion=$row['religion'];
$caste=$row['caste'];
$sub_caste=$row['sub_caste'];
$admission_number=$row['admission_number'];
$date_admission=$row['date_admission'];
$scholarship=$row['scholarship'];
$blood_group=$row['blood_group'];
$present_addressline1=$row['present_addressline1'];
$present_addressline2=$row['present_addressline2'];
$present_city=$row['present_city'];
$present_district=$row['present_district'];
$present_state=$row['present_state'];
$present_country=$row['present_country'];
$present_landline=$row['present_landline'];
$permanent_addressline1=$row['permanent_addressline1'];
$permanent_addressline2=$row['permanent_addressline2'];
$permanent_city=$row['permanent_city'];
$permanent_district=$row['permanent_district'];
$permanent_state=$row['permanent_state'];
$permanent_country=$row['permanent_country'];
$father_email=$row['father_email'];
$father_mobile=$row['father_mobile'];
$mother_email=$row['mother_email'];
$mother_mobile=$row['mother_mobile'];
$student_email=$row['student_email'];
$student_mobile=$row['student_mobile'];
$gaurdian_email=$row['gaurdian_email'];
$gaurdian_mobile=$row['gaurdian_mobile'];
$ssc_board=$row['ssc_board'];
$ssc_institution=$row['ssc_institution'];
$ssc_passyear=$row['ssc_passyear'];
$ssc_medium=$row['ssc_medium'];
$ssc_maxmarks=$row['ssc_maxmarks'];
$ssc_marks=$row['ssc_marks'];
$ssc_percent=$row['ssc_percent'];
$ssc_div=$row['ssc_div'];
$inter_board=$row['inter_board'];
$inter_institution=$row['inter_institution'];
$inter_passyear=$row['inter_passyear'];
$inter_medium=$row['inter_medium'];
$inter_maxmarks=$row['inter_maxmarks'];
$inter_marks=$row['inter_marks'];
$inter_percent=$row['inter_percent'];
$inter_div=$row['inter_div'];
$ug_board=$row['ug_board'];
$ug_institution=$row['ug_institution'];
$ug_passyear=$row['ug_passyear'];
$ug_medium=$row['ug_medium'];
$ug_maxmarks=$row['ug_maxmarks'];
$ug_marks=$row['ug_marks'];
$ug_percent=$row['ug_percent'];
$ug_div=$row['ug_div'];
$pg_board=$row['pg_board'];
$pg_institution=$row['pg_institution'];
$pg_passyear=$row['pg_passyear'];
$pg_medium=$row['pg_medium'];
$pg_maxmarks=$row['pg_maxmarks'];
$pg_marks=$row['pg_marks'];
$pg_percent=$row['pg_percent'];
$pg_div=$row['pg_div'];
$entrence_exam=$row['entrence_exam'];
$entrence_maxmarks=$row['entrence_maxmarks'];
$entrence_marks=$row['entrence_marks'];
$entrence_rank=$row['entrence_rank'];
}
else {echo"nodetails found";exit();}

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
					<span style="font-size: 150%; font-weight: 600;"><span style="font-family: arial; color: orange;">M</span><span style="font-family: arial; color: #2485DB;">PP</span></span> @
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
                                                                    <li><a href="admissiondetails.php" ><span>Personal Details</span></a></li>
																	<li><a href="admission.php" ><span>Edit Details</span></a></li>
																	<li><a href="viewatt.php" ><span>View Attendance</span></a></li>
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
																	<li><a href="sel_alrt.php?sid=0&tid=$count" ><span>View Alerts</span></a></li>
                                                            </ul>
                        </div>
                                    </div>
            </li>
			<?php
			if($_SESSION['user_level']==12)
			{
			echo"</li>
                    <li  onmouseover=\"menu_hold(this)\" onmouseout=\"menu_out(this)\">
                <a href=\"#\" class=\"drop\"><span>Edit</span></a>
                
                                <div class=\"dropdown_1column\">
                                            <div class=\"col_1\">            
                            <h3>Edit</h3>
                            <ul>
                                                                    <li><a href=\"editm.php\" ><span>Edit Mobile Number</span></a></li>
																	
                                                            </ul>
                        </div>
                                    </div>
            </li>";
			}
			
			?>
                        <li class="menu_right" style="color: #CCC;"><?php if($_SESSION['user_level']!=4) echo "<a href=\"contactadmin.php\">Contact admin</a>"; ?></li> 
    </ul>
    </div>
		<div class="maincontent">
						<div class="evaluationcontent-support">
			<span style="color: #B22222; font-weight: bold; font-size: 12px;">
					Welcome<?php if($_SESSION['user_level']!=12) echo " ".$_SESSION['NAME']; else echo " ".$_SESSION['PARENT_NAME']; ?>		</span>
		</div>
				<div class="evaluationcontent-middle">
					<?php if(isset($_POST['submit']))
{
$first_name=mysql_real_escape_string($_POST['first_name']);
$last_name=mysql_real_escape_string($_POST['last_name']);
$date_birth=mysql_real_escape_string($_POST['date_birth']);
$id_mark1=mysql_real_escape_string($_POST['id_mark1']);
$id_mark2=mysql_real_escape_string($_POST['id_mark2']);
$father_name=mysql_real_escape_string($_POST['father_name']);
$mother_name=mysql_real_escape_string($_POST['mother_name']);
$gaurdian_name=mysql_real_escape_string($_POST['gaurdian_name']);
$occupation=mysql_real_escape_string($_POST['occupation']);
$annual_income=mysql_real_escape_string($_POST['annual_income']);
$birth_place=mysql_real_escape_string($_POST['birth_place']);
$area_candidate=mysql_real_escape_string($_POST['area_candidate']);
$modeofadmission=mysql_real_escape_string($_POST['modeofadmission']);
$mother_tongue=mysql_real_escape_string($_POST['mother_tongue']);
$gender=mysql_real_escape_string($_POST['gender']);
$marital_status=mysql_real_escape_string($_POST['marital_status']);
$religion=mysql_real_escape_string($_POST['religion']);

$caste=mysql_real_escape_string($_POST['caste']);
$sub_caste=mysql_real_escape_string($_POST['sub_caste']);
$scholarship=mysql_real_escape_string($_POST['scholarship']);
$blood_group=mysql_real_escape_string($_POST['blood_group']);
$present_addressline1=mysql_real_escape_string($_POST['present_addressline1']);
$present_addressline2=mysql_real_escape_string($_POST['present_addressline2']);
$present_city=mysql_real_escape_string($_POST['present_city']);
$present_district=mysql_real_escape_string($_POST['present_district']);
$present_state=mysql_real_escape_string($_POST['present_state']);
$present_country=mysql_real_escape_string($_POST['present_country']);
$present_landline=mysql_real_escape_string($_POST['present_landline']);
$permanent_addressline1=mysql_real_escape_string($_POST['permanent_addressline1']);
$permanent_addressline2=mysql_real_escape_string($_POST['permanent_addressline2']);
$permanent_city=mysql_real_escape_string($_POST['permanent_city']);
$permanent_district=mysql_real_escape_string($_POST['permanent_district']);
$permanent_state=mysql_real_escape_string($_POST['permanent_state']);
$permanent_country=mysql_real_escape_string($_POST['permanent_country']);
$father_email=mysql_real_escape_string($_POST['father_email']);
$father_mobile=mysql_real_escape_string($_POST['father_mobile']);
$mother_email=mysql_real_escape_string($_POST['mother_email']);
$mother_mobile=mysql_real_escape_string($_POST['mother_mobile']);
$student_email=mysql_real_escape_string($_POST['student_email']);
$student_mobile=mysql_real_escape_string($_POST['student_mobile']);
$gaurdian_email=mysql_real_escape_string($_POST['gaurdian_email']);
$gaurdian_mobile=mysql_real_escape_string($_POST['gaurdian_mobile']);
$ssc_board=mysql_real_escape_string($_POST['ssc_board']);
$ssc_institution=mysql_real_escape_string($_POST['ssc_institution']);
$ssc_passyear=mysql_real_escape_string($_POST['ssc_passyear']);
$ssc_medium=mysql_real_escape_string($_POST['ssc_medium']);
$ssc_maxmarks=mysql_real_escape_string($_POST['ssc_maxmarks']);
$ssc_marks=mysql_real_escape_string($_POST['ssc_marks']);
$ssc_percent=mysql_real_escape_string($_POST['ssc_percent']);
$ssc_div=mysql_real_escape_string($_POST['ssc_div']);
$inter_board=mysql_real_escape_string($_POST['inter_board']);
$inter_institution=mysql_real_escape_string($_POST['inter_institution']);
$inter_passyear=mysql_real_escape_string($_POST['inter_passyear']);
$inter_medium=mysql_real_escape_string($_POST['inter_medium']);
$inter_maxmarks=mysql_real_escape_string($_POST['inter_maxmarks']);
$inter_marks=mysql_real_escape_string($_POST['inter_marks']);
$inter_percent=mysql_real_escape_string($_POST['inter_percent']);
$inter_div=mysql_real_escape_string($_POST['inter_div']);
$ug_board=mysql_real_escape_string($_POST['ug_board']);
$ug_institution=mysql_real_escape_string($_POST['ug_institution']);
$ug_passyear=mysql_real_escape_string($_POST['ug_passyear']);
$ug_medium=mysql_real_escape_string($_POST['ug_medium']);
$ug_maxmarks=mysql_real_escape_string($_POST['ug_maxmarks']);
$ug_marks=mysql_real_escape_string($_POST['ug_marks']);
$ug_percent=mysql_real_escape_string($_POST['ug_percent']);
$ug_div=mysql_real_escape_string($_POST['ug_div']);
$pg_board=mysql_real_escape_string($_POST['pg_board']);
$pg_institution=mysql_real_escape_string($_POST['pg_institution']);
$pg_passyear=mysql_real_escape_string($_POST['pg_passyear']);
$pg_medium=mysql_real_escape_string($_POST['pg_medium']);
$pg_maxmarks=mysql_real_escape_string($_POST['pg_maxmarks']);
$pg_marks=mysql_real_escape_string($_POST['pg_marks']);
$pg_percent=mysql_real_escape_string($_POST['pg_percent']);
$pg_div=mysql_real_escape_string($_POST['pg_div']);
$entrence_exam=mysql_real_escape_string($_POST['entrence_exam']);
$entrence_maxmarks=mysql_real_escape_string($_POST['entrence_maxmarks']);
$entrence_marks=mysql_real_escape_string($_POST['entrence_marks']);
$entrence_rank=mysql_real_escape_string($_POST['entrence_rank']);
if(!empty($first_name)&&!empty($id_mark1)&&!empty($id_mark2)&&!empty($father_name)&&!empty($mother_name)&&!empty($gender)&&														                            !empty($present_addressline1)&&!empty($present_addressline2)&&!empty($present_city)&&!empty($present_country)&&!empty($present_district)&&!empty($present_state))
{
$query=mysql_query("UPDATE admissiondetails SET first_name='$first_name',last_name='$last_name',date_birth='$date_birth',id_mark1='$id_mark1',id_mark2='$id_mark2',father_name='$father_name',mother_name='$mother_name',gaurdian_name='$gaurdian_name',occupation='$occupation',annual_income='$annual_income',
birth_place='$birth_place',area_candidate='$area_candidate',marital_status='$marital_status',religion='$religion',caste='$caste',sub_caste='$sub_caste',gender='$gender',mother_tongue='$mother_tongue',modeofadmission='$modeofadmission',scholarship='$scholarship',blood_group='$blood_group',present_addressline1='$present_addressline1',
present_addressline2='$present_addressline2',present_city='$present_city',present_district='$present_district',present_state='$present_state',present_country='$present_country',permanent_addressline1='$permanent_addressline1',permanent_addressline2='$permanent_addressline2',permanent_city='$permanent_city',permanent_district='$permanent_district',
permanent_country='$permanent_country',permanent_state='$permanent_state',father_email='$father_email',father_mobile='$father_mobile',mother_email='$mother_email',mother_mobile='$mother_mobile',student_email='$student_email',student_mobile='$student_mobile',gaurdian_email='$gaurdian_email',gaurdian_mobile='$gaurdian_mobile',
ssc_board='$ssc_board',ssc_institution='$ssc_institution',ssc_passyear='$ssc_passyear',ssc_medium='$ssc_medium',ssc_maxmarks='$ssc_maxmarks',ssc_marks='$ssc_marks',ssc_percent='$ssc_percent',ssc_div='$ssc_div',
inter_board='$inter_board',inter_institution='$inter_institution',inter_passyear='$inter_passyear',inter_medium='$inter_medium',inter_maxmarks='$inter_maxmarks',inter_marks='$inter_marks',inter_percent='$inter_percent',inter_div='$inter_div',
ug_board='$ug_board',ug_institution='$ug_institution',ug_passyear='$ug_passyear',ug_medium='$ug_medium',ug_maxmarks='$ug_maxmarks',ug_marks='$ug_marks',ug_percent='$ug_percent',ug_div='$ug_div',
pg_board='$pg_board',pg_institution='$pg_institution',pg_passyear='$pg_passyear',pg_medium='$pg_medium',pg_maxmarks='$pg_maxmarks',pg_marks='$pg_marks',pg_percent='$pg_percent',pg_div='$pg_div',
entrence_exam='$entrence_exam',entrence_maxmarks='$entrence_maxmarks',entrence_marks='$entrence_marks',entrence_rank='$entrence_rank' WHERE roll_no='$username';")or die(mysql_error());;
$quer=mysql_query("UPDATE student_login SET per_flag='1' WHERE roll_number='$username'") or die(mysql_error());

	if($query&&$quer)
	{
		echo "<h1><center><b>Entered your details successfully.</b></center></h1>";
		
	}
}
else echo"<h1><center><b>Feilds marked with * are compulsory</b></center></h1>";







}?>		         
                <h3 class="componentheading" style="text-align:center">Admission Details</h3>
        
        <br>
        		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" class="inner_table1">
				    <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2"><center>PERSONAL DETAILS</center></td>
		    </tr>        
		<tr>            <td colspan="2" rowspan="1" >
<body>


<form action="" id="form1" method="post">
<table class="inner_table1">
<tr>
<td>
<label for="first_name"><p>*First Name</p></td>
<td><input type="text" name="first_name" id="first_name" value="<?php echo $first_name;?>"></td>

<td>
<label for="last_name"><p>Last Name</p></td>
<td><input type="text" name="last_name" id="last_name" value="<?php echo $last_name;?>"></td></tr>
<tr>
<td>
<label for="date_birth"><p>Date of birth</p></td>
<td><input type="text" name="date_birth" id="date_birth" value="<?php echo $date_birth;?>"></td></tr>
<tr>
<td>
<label for="id_mark1"><p>*Identification mark 1:</p></td>
<td><input type="text" name="id_mark1" id="id_mark1" value="<?php echo $id_mark1;?>"></td>

<td>
<label for="id_mark2"><p>*Identification mark 2:</p></td>
<td><input type="text" name="id_mark2" id="id_mark2" value="<?php echo $id_mark2;?>"></td></tr>
<tr>
<td>
<label for="father_name"><p>*Father name</p></td>
<td><input type="text" name="father_name" id="father_name" value="<?php echo $father_name;?>"></td>

<td>
<label for="mother_name"><p>*Mother Name</p></td>
<td><input type="text" name="mother_name" id="mother_name" value="<?php echo $mother_name;?>"></td></tr>
<tr>
<td>
<label for="gaurdian_name"><p>Gaurdian name</p></td>
<td><input type="text" name="gaurdian_name" id="gaurdian_name" value="<?php echo $gaurdian_name;?>"></td></tr>
<tr>
<td>
<label for="occupation"><p>Occupation</p></td>
<td><input type="text" name="occupation" id="occupation" value="<?php echo $occupation;?>"></td>

<td>
<label for="annual_income"><p>Annual Income of parent/gaurdian</p></td>
<td><input type="text" name="annual_income" id="annual_income" value="<?php echo $annual_income;?>"></td></tr>
<tr>
<td>
<label for="birth_place"><p>Place of Birth</p></td>
<td><input type="text" name="birth_place" id="birth_place" value="<?php echo $birth_place;?>"></td>

<td>
<label for="area_candidate"><p>Area Of Candidate</p></td>
<td><input type="text" name="area_candidate" id="area_candidate" value="<?php echo $area_candidate;?>"></td></tr>
<tr>
<td>
<label for="modeofadmission"><p>Mode of Admission</p></td>
<td><input type="text" name="modeofadmission" id="modeofadmission" value="<?php echo $modeofadmission;?>"></td></tr>
<tr>
<td>
<label for="mother_tongue"><p>Mother Tongue</p></td>
<td><input type="text" name="mother_tongue" id="mother_tongue" value="<?php echo $mother_tongue;?>"></td>
<td>
<label for="gender"><p>*Gender</p></td>
<td><select name="gender" id="gender">
<option value="male">MALE</opetion>
<option value="female">FEMALE</option></select></td></tr>
<tr>
<td>
<label for="marital_status"><p>Marital Status</p></td>
<td><select name="marital_status" id="marital_status" >
<option value="married">Married</opetion>
<option value="unmarried">Un-Married</option></select></td>


<td>
<label for="religion"><p>Religion</p></td>
<td><input type="text" name="religion" id="religion" value="<?php echo $religion;?>"></td></tr>
<tr>
<td>
<label for="caste"><p>Caste</p></td>
<td><input type="text" name="caste" id="caste" value="<?php echo $caste;?>"></td>

<td>
<label for="sub_caste"><p>Subcaste</p></td>
<td><input type="text" name="sub_caste" id="sub_caste" value="<?php echo $sub_caste;?>"></td></tr>
<tr>
<td>
<label for="admission_number"><p>Admission Number</p></td>
<td><input type="text" name="admission_number" id="admission_number" value="<?php echo $admission_number;?>"></td>

<td>
<label for="date_admission"><p>Date of admission</p></td>
<td><input type="text" name="date_admission" id="date_admission" value="<?php echo $date_admission;?>"></td></tr>
<tr>
<td>
<label for="scholarship"><p>Scholarship</p></td>
<td><select name="scholarship" id="scholarship">
<option value="yes">YES</option>
<option value="no">NO</option></select></td>

<td>
<label for="blood_group"><p>Blood Group</p></td>
<td><input type="text" name="blood_group" id="blood_group" value="<?php echo $blood_group;?>"></td></tr>

</table><br><br><br>
<table class="inner_table1">
   <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2"><center>CONTACT DETAILS</center></td>
		    </tr>    


<tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">Present Address </td>
		    </tr> 
<tr>
<td>
<label for="present_addressline1"><p>*Address line 1</p></td>
<td><input type="text" name="present_addressline1" id="present_addressline1" value="<?php echo $present_addressline1;?>"></td>

<td>
<label for="present_addressline2"><p>*Address line 2</p></td>
<td><input type="text" name="present_addressline2" id="present_addressline2" value="<?php echo $present_addressline2;?>"></td></tr>
<tr>
<td>
<label for="present_city"><p>*City</p></td>
<td><input type="text" name="present_city" id="present_city" value="<?php echo $present_city;?>"></td>

<td>
<label for="present_district"><p>*Distict</p></td>
<td><input type="text" name="present_district" id="present_district" value="<?php echo $present_district;?>"></td></tr>
<tr>
<td>
<label for="present_state"><p>*State</p></td>
<td><input type="text" name="present_state" id="present_state" value="<?php echo $present_state;?>"></td>

<td>
<label for="present_country"><p>*Country</p></td>
<td><input type="text" name="present_country" id="present_country" value="<?php echo $present_country;?>"></td></tr>


<tr>
<td>
<label for="present_landline"><p>Landline no.</p></td>
<td><input type="text" name="present_landline" id="present_landline" value="<?php echo $present_landline;?>"></td></tr>
<tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">Permanent Address </td>
		    </tr> 
<tr>
<td>
<label for="permanent_addressline1"><p>Address line 1</p></td>
<td><input type="text" name="permanent_addressline1" id="permanent_addressline1" value="<?php echo $permanent_addressline1;?>"></td>


<td>
<label for="permanent_addressline2"><p>Address line 2</p></td>
<td><input type="text" name="permanent_addressline2" id="permanent_addressline2" value="<?php echo $permanent_addressline2;?>"></td></tr>


<tr>
<td>
<label for="permanent_city"><p>City</p></td>
<td><input type="text" name="permanent_city" id="permanent_city" value="<?php echo $present_city;?>"></td>


<td>
<label for="permanent_district"><p>District</p></td>
<td><input type="text" name="permanent_district" id="permanent_district" value="<?php echo $permanent_district;?>"></td></tr>


<tr>
<td>
<label for="permanent_state"><p>State</p></td>
<td><input type="text" name="permanent_state" id="permanent_state" value="<?php echo $permanent_state;?>"></td>

<td>
<label for="permanent_country"><p>Country</p></td>
<td><input type="text" name="permanent_country" id="permanent_country" value="<?php echo $permanent_country;?>"></td></tr>

<td style="font-weight:bold;padding-top:25px;" colspan="2">More Details</td>
		    </tr> 
<tr>
<td>
<label for="father_mobile"><p>Father Mobile No.</p></td>
<td><input type="text" name="father_mobile" id="father_mobile" value="<?php echo $father_mobile;?>"></td>




<td>
<label for="father_email"><p>Father's Email</p></td>
<td><input type="text" name="father_email" id="father_email" value="<?php echo $father_email;?>"></td></tr>



<tr>
<td>
<label for="student_mobile"><p>Student mobile no.</p></td>
<td><input type="text" name="student_mobile" id="student_mobile" value="<?php echo $student_mobile;?>" ></td>



<td>
<label for="student_email"><p>Student Email</p></td>
<td><input type="text" name="student_email" id="student_email" value="<?php echo $student_email;?>" ></td></tr>




<tr>
<td>
<label for="mother_mobile"><p>Mother mobile no.</p></td>
<td><input type="text" name="mother_mobile" id="mother_mobile" value="<?php echo $mother_mobile;?>"></td>




<td>
<label for="mother_email"><p>Mother Email</p></td>
<td><input type="text" name="mother_email" id="mother_email" value="<?php echo $mother_email;?>"></td></tr>

<tr>
<td>
<label for="gaurdian_mobile"><p>Gaurdian mobile</p></td>
<td><input type="text" name="gaurdian_mobile" id="gaurdian_mobile" value="<?php echo $gaurdian_mobile;?>"></td>



<td>
<label for="gaurdian_email"><p>Gaurdian Email</p></td>
<td><input type="text" name="gaurdian_email" id="gaurdian_email" value="<?php echo $gaurdian_email;?>"></td></tr>
</table><br><br><br>


<table class="inner_table1">
   <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">Educational Details</td>
		    </tr>    
<th>        </th>
<th>SSC/equvalent</th>
<th>INTER/eqviavlent</th>
<th>UNDER GRADUATION</th>
<th>GRADUATION</th>
<tr>
<td>Board</td>
<td><label for="ssc_board">
<input type="text" name="ssc_board" id="ssc_board" value="<?php echo $ssc_board;?>"></td>

<td>
<label for="inter_board">
<input type="text" name="inter_board" id="inter_board" value="<?php echo $inter_board;?>"></td>



<td>
<label for="ug_board">
<input type="text" name="ug_board" id="ug_board" value="<?php echo $ug_board;?>"></td>



<td>
<label for="pg_board">
<input type="text" name="pg_board" id="pg_board" value="<?php echo $pg_board;?>"></td>

</tr>


<tr>
<td>Year of Pass</td>
<td>
<label for="ssc_passyear">
<input type="text" name="ssc_passyear" id="ssc_passyear" value="<?php echo $ssc_passyear;?>"></td>



<td>
<label for="inter_passyear">
<input type="text" name="inter_passyear" id="inter_passyear" value="<?php echo $inter_passyear;?>"></td>



<td>
<label for="ug_passyear">
<input type="text" name="ug_passyear" id="ug_passyear" value="<?php echo $ug_passyear;?>"></td>





<td>
<label for="pg_passyear">
<input type="text" name="pg_passyear" id="pg_passyear" value="<?php echo $pg_passyear;?>"></td>


</tr>


<tr>
<td>Institution</td>
<td>
<label for="ssc_institution">
<input type="text" name="ssc_institution" id="ssc_institution" value="<?php echo $ssc_institution;?>"></td>


<td>
<label for="inter_institution">
<input type="text" name="inter_institution" id="inter_institution" value="<?php echo $inter_institution;?>"></td>


<td>
<label for="ug_institution">
<input type="text" name="ug_institution" id="ug_institution" value="<?php echo $ug_institution;?>"></td>




<td>
<label for="pg_institution">
<input type="text" name="pg_institution" id="pg_institution" value="<?php echo $pg_institution;?>"></td>

</tr>

<tr>
<td>Medium</td>
<td>
<label for="ssc_medium">
<input type="text" name="ssc_medium" id="ssc_medium" value="<?php echo $ssc_medium;?>"></td>


<td>
<label for="inter_medium">
<input type="text" name="inter_medium" id="inter_medium" value="<?php echo $inter_medium;?>"></td>


<td>
<label for="ug_medium">
<input type="text" name="ug_medium" id="ug_medium" value="<?php echo $ug_medium;?>"></td>




<td>
<label for="pg_medium">
<input type="text" name="pg_medium" id="pg_medium" value="<?php echo $pg_medium;?>"></td>

</tr>


<tr>
<td>Maximum Marks</td>
<td>
<label for="ssc_maxmarks">
<input type="text" name="ssc_maxmarks" id="ssc_maxmarks" value="<?php echo $ssc_maxmarks;?>"></td>


<td>
<label for="inter_maxmarks">
<input type="text" name="inter_maxmarks" id="inter_maxmarks" value="<?php echo $inter_maxmarks;?>"></td>


<td>
<label for="ug_maxmarks">
<input type="text" name="ug_maxmarks" id="ug_maxmarks" value="<?php echo $ug_maxmarks;?>"></td>




<td>
<label for="pg_maxmarks">
<input type="text" name="pg_maxmarks" id="pg_maxmarks" value="<?php echo $pg_maxmarks;?>"></td>

</tr>


<tr>
<td>Marks Secured</td>
<td>
<label for="ssc_marks">
<input type="text" name="ssc_marks" id="ssc_marks" value="<?php echo $ssc_marks;?>"></td>


<td>
<label for="inter_marks">
<input type="text" name="inter_marks" id="inter_marks" value="<?php echo $inter_marks;?>"></td>


<td>
<label for="ug_marks">
<input type="text" name="ug_marks" id="ug_marks" value="<?php echo $ug_marks;?>"></td>




<td>
<label for="pg_marks">
<input type="text" name="pg_marks" id="pg_marks" value="<?php echo $pg_marks;?>"></td>

</tr>


<tr>
<td>Percent</td>
<td>
<label for="ssc_percent">
<input type="text" name="ssc_percent" id="ssc_percent" value="<?php echo $ssc_percent;?>"></td>


<td>
<label for="inter_percent">
<input type="text" name="inter_percent" id="inter_percent" value="<?php echo $inter_percent;?>"></td>


<td>
<label for="ug_percent">
<input type="text" name="ug_percent" id="ug_percent" value="<?php echo $ug_percent;?>"></td>




<td>
<label for="pg_percent">
<input type="text" name="pg_percent" id="pg_percent" value="<?php echo $pg_percent;?>"></td>

</tr>


<tr>
<td>Division</td>
<td>
<label for="ssc_div">
<input type="text" name="ssc_div" id="ssc_div" value="<?php echo $ssc_div;?>"></td>


<td>
<label for="inter_div">
<input type="text" name="inter_div" id="inter_div" value="<?php echo $inter_div;?>"></td>


<td>
<label for="ug_div">
<input type="text" name="ug_div" id="ug_div" value="<?php echo $ug_div;?>"></td>




<td>
<label for="pg_div">
<input type="text" name="pg_div" id="pg_div" value="<?php echo $pg_div;?>"></td>

</tr>
</table>
<br><br><br>
<table class="inner_table1">
<tr>
<td>Name of entrence Exam</td><td><input type="text" name="entrence_exam" id="entrence_exam" value="<?php echo $entrence_exam;?>"></td>
<td>Rank Obtained</td><td><input type="text" name="entrence_rank" id="entrence_rank" value="<?php echo $entrence_rank;?>"></td></tr>
<tr>
<td>Maximum Marks</td><td><input type="text" name="entrence_maxmarks" id="entrence_maxmarks" value="<?php echo $entrence_maxmarks;?>"></td>
<td>Marks Secured</td><td><input type="text" name="entrence_marks" id="entrence_marks" value="<?php echo $entrence_marks;?>"></td></tr>
</table>
</table>

<center><div class="">
<input type="submit" name="submit" value="Submit" id="Submit">
</div></center>
</table></form>
</div>
<div style="background-color: #474747; line-height: 35px; font-size: 15px; text-align: center; color: #CCC;">
			Developed by <a href="#" target="_blank"><span style="color: #EE7600;">MPP</span></a>
		</div>
			</div>
	<div class="evaluationpage_bottom"></div>
	
	</div>

</body>
</html>
