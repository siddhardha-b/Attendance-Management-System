<?php
require_once '../com/connection.php';
function validUsername($username)
{
	$query="SELECT * FROM faculty_schedule_yearsecsub WHERE user_name=$username LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)==1)
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
		return "failed to execute query";
	}
}
function sfrm($faculty_id)
{
	$query="SELECT * FROM faculty_details WHERE user_name=$faculty_id LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)==1)
		{
			$row=mysql_fetch_assoc($result);
			return $row['faculty_sfrm'];
		}
		else
		{
			return "unknown";
		}
	}
	else
	{
		return "failed to execute query";
	}
}




function getName1($faculty_id)
{
	$query="SELECT * FROM faculty_login WHERE user_name=$faculty_id LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)==1)
		{
			$row=mysql_fetch_assoc($result);
			$f=$row['name'];
			return $f;
		}
		else
		{
			return "unknown";
		}
	}
	else
	{
		return "failed to execute query";
	}
}





function getName($faculty_id)
{
	$query="SELECT * FROM faculty_login WHERE user_name=$faculty_id LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)==1)
		{
			$row=mysql_fetch_assoc($result);
			$f=$row['name'];
			$l=$row['last_name'];
			return $f." ".$l;
		}
		else
		{
			return "unknown";
		}
	}
	else
	{
		return "failed to execute query";
	}
}


function isValidSubjectCode($subject_id)
{
	$query="SELECT * FROM subject_details WHERE subject_id='$subject_id'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
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
		return NULL;
	}
}



function getDeptCode($fac_id)
{
	$query="SELECT * FROM faculty_login WHERE user_name=$fac_id LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$rw=mysql_fetch_assoc($result);
			return $rw['faculty_dept'];
		}
		else
		{
			return "error in fetching";
		}
	}
	else
	{
		return "error in fetching department";
	}
}



function isLiveSem($year)
{
	$query="SELECT * FROM sem_table WHERE year='$year'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['status']==1)
				{
					return true;
				}
			}
			return false;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

function romancrt($num)
{
	if($num==1)
	return "I";
	else
	return "II";
}

?>