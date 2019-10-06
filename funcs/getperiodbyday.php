<?php
require_once('getdat.php');
require_once('../com/connection.php');
require_once('checkassign.php');
function getPeriodByDay($day,$period,$fac_id)
{

	
		$i=0;
		$det=array();
		switch($day)
		{
			case 'Monday':$day_id=0;break;
			case 'Tuesday':$day_id=7;break;
			case 'Wednesday':$day_id=14;break;
			case 'Thursday':$day_id=21;break;
			case 'Friday':$day_id=28;break;
			case 'Saturday':$day_id=35;break;
			case 'Sunday':$day_id=NULL;break;
		}
		$period=($period+$day_id)."_yearsecsub";
		$query="SELECT * FROM faculty_schedule_yearsecsub WHERE user_name=$fac_id";
		$result=mysql_query($query);
		if($result)
		{
			if(mysql_num_rows($result)>0)
			{
				$row=mysql_fetch_assoc($result);
				$raw=$row[$period];
				$det=getDat($raw);
				return $det;
			}
			else
			{
				return NULL;
			}
		}
		
	
	
}


function getdayid($day)
{
	switch($day)
		{
			case 'Monday':$day_id=0;break;
			case 'Tuesday':$day_id=7;break;
			case 'Wednesday':$day_id=14;break;
			case 'Thursday':$day_id=21;break;
			case 'Friday':$day_id=28;break;
			case 'Saturday':$day_id=35;break;
			case 'Sunday':$day_id=NULL;break;
		}
}






function getdayid2($day)
{
	switch($day)
		{
			case 'Monday':return 0;
			case 'Tuesday':return 7;
			case 'Wednesday':return 14;
			case 'Thursday':return 21;
			case 'Friday':return 28;
			case 'Saturday':return 35;
			case 'Sunday':return NULL;
		}
}

?>