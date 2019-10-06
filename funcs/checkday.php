<?php 
function getDay($day,$month,$year)
{
	$out=0;
	if($year>=1990)
	{
		for($y=1990;$y<$year;$y++)
		{
			if(isLeapYear($y))
			{
				$out+=366;
			}
			else
			{
				$out+=365;
			}
		}
	}
	if($month<=12)
	{
		for($m=1;$m<$month;$m++)
		{
			if($m==1||$m==3||$m==5||$m==7||$m==8||$m==10||$m==12)
				$out=$out+31;
			else if($m==4||$m==6||$m==9||$m==11)
				$out=$out+30;
			else if($m==2)
			{
				if(isLeapYear($year))
					$out+=29;
				else
					$out+=28;
			}
		}
	}
	
		

	$out+=($day-1);

	$r=$out%7;
	switch($r)
	{	
		case 0:return "Monday";
		       break;
		case 1:return "Tuesday";
		       break;		
		case 2:return "Wednesday";
		       break;		
		case 3:return "Thursday";
		       break;		
		case 4:return "Friday";
		       break;		
		case 5:return "Saturday";
		       break;
		case 6:return "Sunday";
		       break;		

	 }
}
function isLeapYear($year)
{
	if($year%4==0)
	{
		if($year%100==0)
		{
			if($year%400==0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return true;
		}
	}
	else
	{
		return false;
	}
}
?>