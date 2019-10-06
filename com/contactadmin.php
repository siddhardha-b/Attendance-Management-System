<?php
if(!ob_start("ob_gzhandler")) ob_start();
require_once("../translations/en.php");
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
<?php
if(isset($_POST['submit']))
{
	$to=ADMIN_EMAIL;
	$email=$_POST['email_id'];
	$subject=$_POST['subject'];
	$txt=$_POST['message'];
	$subject2="Mail Recieved";
	$txt2="We have Recieved Your Request.We will be respoding ASAP.\nThank you.";
	$headers2="crhelpdesk@mvsrec.edu.in";
	if(!empty($subject)&&!empty($txt)&&!empty($email))
	{
	if(mail($to,$subject,$txt))
	{
		if(mail($to2,$subject2,$txt2))
			echo "<center>We will be Responding soon.<br>";
			if(isset($_SESSION['SESS_MEMBER_ID']))
			{
				echo "Redirecting You to home page in 5 seconds";
				header( "refresh:7;url=../index.php" );
			}
	}
	else
	{
		echo "<center>An error encountered while sending mail.";
		if(!isset($_SESSION['SESS_MEMBER_ID']))
			{
				echo "Redirecting you to login page in 5 seconds";
				header( "refresh:7;url=../index.php");
			}
	}
	}
	else
	{
		echo "<center><font color=red>All fields are compulsory fields</font>";
	}
	
}

?>
<br><br>
<center><form id="form1" name="form1" method="post" action="">
<legend><font color="red">Contact Admin</font></legend>
  <table width="582" border="0">
   <tr>
      <td width="162">Enter Your Email id</td>
      <td width="410"><label for="Enter your email id"></label>
      <input type="text" name="email_id" id="Enter your email id" style="width:300px;"/></td>
    </tr>
    <tr>
    <br />
      <td width="162">Subject</td>
      <td width="410"><label for="subject"></label>
      <input type="text" name="subject" id="subject" style="width:200px;"/></td>
    </tr>
    <tr>
      <td>Body</td>
      <td><p>
        <label for="message"></label>
        <textarea name="message" id="message" cols="45" rows="5"></textarea>
      </p></td></tr>
	  </table>
      <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </p></td>
    </tr>
</form></center>
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