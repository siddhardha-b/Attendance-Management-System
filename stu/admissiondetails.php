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
 else{ $err=1;
 
 $first_name="-";
$last_name="-";
$date_birth="-";
$id_mark1="-";
$id_mark2="-";
$father_name="-";
$mother_name="-";
$gaurdian_name="-";
$occupation="-";
$annual_income="-";
$birth_place="-";
$area_candidate="-";
$modeofadmission="-";
$mother_tongue="-";
$gender="-";
$marital_status="-";
$religion="-";
$caste="-";
$sub_caste="-";
$scholarship="-";
$blood_group="-";
$present_addressline1="-";
$present_addressline2="-";
$present_city="-";
$present_district="-";
$present_state="-";
$present_country="-";
$present_landline="-";
$permanent_addressline1="-";
$permanent_addressline2="-";
$permanent_city="-";
$permanent_district="-";
$permanent_state="-";
$permanent_country="-";
$father_email="-";
$father_mobile="-";
$mother_email="-";
$mother_mobile="-";
$student_email="-";
$student_mobile="-";
$gaurdian_email="-";
$gaurdian_mobile="-";
$ssc_board="-";
$ssc_institution="-";
$ssc_passyear="-";
$ssc_medium="-";
$ssc_maxmarks="-";
$ssc_marks="-";
$ssc_percent="-";
$ssc_div="-";
$inter_board="-";
$inter_institution="-";
$inter_passyear="-";
$inter_medium="-";
$inter_maxmarks="-";
$inter_marks="-";
$inter_percent="-";
$inter_div="-";
$ug_board="-";
$ug_institution="-";
$ug_passyear="-";
$ug_medium="-";
$ug_maxmarks="-";
$ug_marks="-";
$ug_percent="-";
$ug_div="-";
$pg_board="-";
$pg_institution="-";
$pg_passyear="-";
$pg_medium="-";
$pg_maxmarks="-";
$pg_marks="-";
$pg_percent="-";
$pg_div="-";
$entrence_exam="-";
$entrence_maxmarks="-";
$entrence_marks="-";
$entrence_rank="-";
 }









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
					Welcome<?php if($_SESSION['user_level']!=12) echo " ".$_SESSION['NAME']; else {echo " ".$_SESSION['PARENT_NAME']; $username=substr($username,-12);} ?>		</span>
		</div>
				<div class="evaluationcontent-middle">
							         
                <h3 class="componentheading" style="text-align:center">Admission Form</h3>     
               
        
        <br>
        		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" class="inner_table1">
				    <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">PERSONAL DETAILS</td>
		    </tr>        
		<tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">First Name</span>
                <span style="padding-left:10px;">
		<?php echo $first_name; ?>	</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Last Name:</span>
                <span style="padding-left:10px;">
		<?php echo $last_name;?>		</span></td>
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Roll Number:</span>
                <span style="padding-left:10px;">
		<?php echo $username;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">(in block letters)(as per SSC)</span>
            </td>
                        <td colspan="1" rowspan="5" >
            <img src="default.png" height="120" width="120" border="1"/></td></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Date of Birth:</span>
               <?php echo $date_birth;?></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Identification Marks: <br>&nbsp;&nbsp;&nbsp;&nbsp;1.</span>
                <span style="padding-left:10px;">
		<?php echo $id_mark1;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;2.</span>
                <span style="padding-left:10px;">
		<?php echo $id_mark2;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Name of the father:</span>
                <span style="padding-left:10px;">
		<?php echo $father_name;?>		</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Name of the mother:</span>
                <span style="padding-left:10px;">
		<?php echo $mother_name;?>		</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Name of the gaurdian:</span>
                <span style="padding-left:10px;">
		<?php echo $gaurdian_name;?>		</span></td>
            </tr>
			
			<tr>            <td colspan="2" >
            <span style="font-weight:bold;">Occupation :</span>
                <span style="padding-left:10px;">
		<?php echo $occupation;?></span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Annual Income :</span>
                <span style="padding-left:10px;">
		<?php echo $annual_income;?>	</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Place of birth of the candidate:</span>
                <span style="padding-left:10px;">
		<?php echo $birth_place;?></span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Area of the candidate:</span>
                <span style="padding-left:10px;">
		<?php echo $area_candidate;?>	</span></td>
            </tr><tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Mode of Admission:</span>
                <span style="padding-left:10px;">
		<?php echo $modeofadmission;?>	</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Mother Tongue:</span>
                <span style="padding-left:10px;">
		<?php echo $mother_tongue;?></span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Gender:</span>
                <span style="padding-left:10px;">
		<?php echo $gender;?>		</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Marital Status:</span>
                <span style="padding-left:10px;">
		<?php echo $marital_status;?>	</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Religion:</span>
                <span style="padding-left:10px;">
		<?php echo $religion;?></span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">&nbsp;&nbsp;&nbsp;  Caste:</span>
                <span style="padding-left:10px;">
		<?php echo $caste;?>		</span></td>
            </tr><tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">sub caste </span>
                <span style="padding-left:10px;">
		<?php echo $sub_caste;?>	</span></td>
            </tr><tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Admission Number:</span>
                <span style="padding-left:10px;">
			--	</span></td>
            </tr><tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Date of Admission:</span>
               --</td>
            </tr><tr>            <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Scholarship Eligibility:</span>
               <?php echo $scholarship;?> <span style="padding-left:10px;">
				</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Blood Group:</span>
                <span style="padding-left:10px;">
		<?php echo $blood_group;?>		</span></td>
            </tr><tr>            <td colspan="2" >
            <span style="font-weight:bold;">Aadhar Number:</span>
                <span style="padding-left:10px;">
		-		</span></td>
            </tr></table><br><br>		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" class="inner_table1">
				    <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">ADDRESS</td>
		    </tr>        
		<tr>            <td colspan="1" >
            <span style="font-weight:bold;">Present Address</span>
            </td>
                        <td colspan="1" >
            <span style="font-weight:bold;">Permanent Address</span>
            </td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Address Line1:</span>
                <span style="padding-left:10px;">
		<?php echo $present_addressline1;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">Address Line1:</span>
                <span style="padding-left:10px;">
		<?php echo $permanent_addressline1;?>		</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Address Line2:</span>
                <span style="padding-left:10px;">
		<?php echo $present_addressline2;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">Address Line2:</span>
                <span style="padding-left:10px;">
		<?php echo $permanent_addressline2;?>		</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">City:</span>
                <span style="padding-left:10px;">
		<?php echo $present_city;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">City:</span>
                <span style="padding-left:10px;">
		<?php echo $permanent_city;?>	</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">District:</span>
                <span style="padding-left:10px;">
		<?php echo $present_district;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">District:</span>
                <span style="padding-left:10px;">
	<?php echo $permanent_district;?>	</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">State:</span>
                <span style="padding-left:10px;">
		<?php echo $present_state;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">State:</span>
                <span style="padding-left:10px;">
		<?php echo $permanent_state;?>	</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Country:</span>
                <span style="padding-left:10px;">
		<?php echo $present_country;?>		</span></td>
                        <td colspan="1" >
            <span style="font-weight:bold;">Country:</span>
                <span style="padding-left:10px;">
		<?php echo $permanent_country;?>		</span></td>
            </tr></table><br><br>		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" class="inner_table1">
				    <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="2">CONTACT DETAILS</td>
		    </tr>        
		<tr>            <td colspan="1" >
            <span style="font-weight:bold;">Father Mobile No:</span>
                <span style="padding-left:10px;">
		<?php echo $father_mobile;?>		</span></td>
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Mother Mobile No:</span>
                <span style="padding-left:10px;">
		<?php echo $mother_mobile;?>	</span></td>
            </tr><tr>            
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">father Email ID:</span>
                <span style="padding-left:10px;">
		<?php echo $father_email;?>		</span></td>
                       <td colspan="2" >
            <span style="font-weight:bold;">mother Email ID:</span>
                <span style="padding-left:10px;">
		<?php echo $mother_email;?>	</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Student Mobile No:</span>
                <span style="padding-left:10px;">
		<?php echo $student_mobile;?>		</span></td>
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Guardian Mobile No:</span>
                <span style="padding-left:10px;">
		<?php echo $gaurdian_mobile;?>		</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Student Email ID:</span>
                <span style="padding-left:10px;">
		<?php echo $student_email;?>		</span></td>
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Guardian Email ID:</span>
                <span style="padding-left:10px;">
		<?php echo $gaurdian_email;?>		</span></td>
            </tr></table><br><br>		<table width="100%" align="center" border="1" cellspacing="0" cellpadding="5" class="inner_table1">
				    <tr>
			<td style="font-weight:bold;padding-top:25px;" colspan="9">EDUCATION DETAILS</td>
		    </tr>        
		<tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Name of the Qualifying Exam</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">SSC/Equivalent</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Intermediate/ICSE/CBSE/Equivalent Diploma</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Under Graduation: B.Sc/B.Com/BA/BBM/B.Tech</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;">Post Graduation</span>
            </td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Name of the Board</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_board;?>	</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_board;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_board;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_board;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Year of Passing</span>
            </td>
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_passyear;?>		</span></td>
                        
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_passyear;?>	</span></td>
                        
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_passyear;?>		</span></td>
                        
                        <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_passyear;?>	</span></td>
                        
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Name of the Institution</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_institution;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_institution;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_institution;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_institution;?>	</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Medium of Instructions</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_medium;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_medium;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_medium;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_medium;?>	</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Maximum Marks</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_maxmarks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_maxmarks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_maxmarks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_maxmarks;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Marks Obtained</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_marks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_marks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_marks;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_marks;?>	</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Percentage</span>
            </td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_percent;?>	</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_percent;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_percent;?>		</span></td>
                        <td colspan="2" rowspan="1" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_percent;?>		</span></td>
            </tr><tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Division of Passing</span>
            </td>
                        <td colspan="2" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ssc_div;?>	</span></td>
                        <td colspan="2" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $inter_div;?>		</span></td>
                        <td colspan="2" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $ug_div;?>	</span></td>
                        <td colspan="2" >
            <span style="font-weight:bold;"></span>
                <span style="padding-left:10px;">
		<?php echo $pg_div;?>		</span></td>
            </tr></table><br><br>		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="5" class="inner_table1">
		<tr>            <td colspan="1" rowspan="1" >
            <span style="font-weight:bold;">Name of the Entrance Test:</span>
                <span style="padding-left:10px;">
		<?php echo $entrence_exam;?>		</span></td>
            </tr><tr>            <td colspan="1" >
            <span style="font-weight:bold;">Rank of the Entrance Test:</span>
                <span style="padding-left:10px;">
		<?php echo $entrence_rank;?>	</span></td>
            </tr>
			<tr>            <td colspan="1" >
            <span style="font-weight:bold;">marks obtained</span>
                <span style="padding-left:10px;">
		<?php echo $entrence_marks;?>	</span></td>
            </tr>
			<tr>            <td colspan="1" >
            <span style="font-weight:bold;">maximum marks</span>
                <span style="padding-left:10px;">
		<?php echo $entrence_maxmarks;?>	</span></td>
            </tr>
			
			</table>
	</table>
        </form>
		</div>
		</div></div></div>
						</div>
				<div style="background-color: #474747; line-height: 35px; font-size: 15px; text-align: center; color: #CCC;">
			Developed by <a href="#" target="_blank"><span style="color: #EE7600;">MPP</span></a>
		</div>
			</div>
	<div class="evaluationpage_bottom"></div>
</div>

</body>
</html>
