<?php
require_once('../com/connection.php');
require_once('auth.php');
require_once('checkvalidity.php');
function existsAssignedClassDet($i,$fac_id)
{
	$ydm=date("Y-m-d");
	$username=$fac_id;
	$per_id=$i;
	$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$username' AND ydm='$ydm'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['ydm']==$ydm&&$row['per_num']==$per_id)
				{
					$det[]=$row['user_name'];
					$det[]=$row['user_per_details'];
					return $det;
				}
			}
		}
		else
		{
			return NULL;
		}
	}
	else
	{
		echo "query failed";
	}
}
function existsAssigned2Class($i,$fac_id)
{
	$ydm=date("Y-m-d");
	$usename=$fac_id;
	$per_id=$i;
	$query="SELECT * FROM faculty_assign_class WHERE user_name='$usename' AND ydm='$ydm'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['ydm']==$ydm&&$row['per_num']==$per_id)
				{
					return true;
				}
			}
		}
		else
		{
			return false;
		}
	}
	else
	{
		echo "query failed";
	}
}
function existsAssignedClass($i,$fac_id)
{
	$ydm=date("Y-m-d");
	$usename=$fac_id;
	$per_id=$i;
	$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$usename' AND ydm='$ydm'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['ydm']==$ydm&&$row['per_num']==$per_id)
				{
					return true;
				}
			}
		}
		else
		{
			return false;
		}
	}
	else
	{
		echo "query failed";
	}
}
?>