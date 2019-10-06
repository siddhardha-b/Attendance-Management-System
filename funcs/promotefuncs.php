<?php
function getSem($branch,$year)
{
	$query="SELECT * FROM sem_table WHERE branch='$branch' AND year='$year'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['status']==1)
					return $row['sem'];
			}
		}
		else
			return 0;
	}
	else
	return 0;
}


function getNameOfStu($rollnumber)
{
	$query="SELECT * FROM student_login WHERE roll_number='$rollnumber'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_assoc($result);
			$firstname=$row['name'];
			$lastname=$row['last_name'];
			return $firstname." ".$lastname; 
		}
		else
		{
			return "unkown name";
		}
	}
	else
	{
		return "unkown name";
	}
}


function getCurrentYear($rollnum)
{
	$query="SELECT * FROM student_current_details WHERE roll_number='$rollnum'";
	$result=mysql_result($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_assoc($result);
			return $row['current_year'];
		}
		else
		{
			exit();
		}
	}
	else
	{
		exit();
	}
}
?>