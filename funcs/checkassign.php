<?php
require_once("../com/connection.php");
require_once("../lect/auth.php");
require_once('checkvalidity.php');
function isAlreadyAssigned($fac_id,$per_num,$ydm)
{
	$flag=false;
	$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$fac_id' AND ydm='$ydm'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
				while($row=mysql_fetch_array($result))
				{
					if($row['per_num']==$per_num&&$row['ydm']==$ydm)
					{
						$flag=true;
						break;
					}
				}
				return $flag;
		}
		elseif(mysql_num_rows($result)==0)
		{
			return false;
		}
	}
	else
	{
		echo "query execution failed";
		exit();
	}
}




function existsAssignedClassDet($i)
{
	$ydm=date("Y-m-d");
	$username=$_SESSION['SESS_FIRST_NAME'];
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




function existsAssigned2Class($i)
{
	$ydm=date("Y-m-d");
	$usename=$_SESSION['SESS_FIRST_NAME'];
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





function existsAssignedClass($i)
{
	$ydm=date("Y-m-d");
	$usename=$_SESSION['SESS_FIRST_NAME'];
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






function isLab($per_num)
{
	$flg=false;
	$next_per1=$per_num+1;
	$next_per2=$next_per1+1;
	if(existsAssignedClass($per_num)&&existsAssignedClass($next_per1)&&existsAssignedClass($next_per2))
	{
		$ydm=date("Y-m-d");
		$usename=$_SESSION['SESS_FIRST_NAME'];
		$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$usename' AND ydm='$ydm'";
		$result=mysql_query($query);
		if($result)
		{
			if(mysql_num_rows($result)>0)
			{
				while($row=mysql_fetch_array($result))
				{
					if($row['per_num']==$per_num||$row['per_num']==$next_per1||$row['per_num']==$next_per2)
					{
						$pers[]=$row['user_per_details'];
					}
				}
			}
			if($pers[0]==$pers[1]&&$pers[0]==$pers[2])
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
			return false;
		}
	}
}


function isTwoPeriods($per_num)
{
	$next_per1=$per_num+1;
	$next_per2=$per_num+2;
		if(existsAssignedClass($per_num)&&existsAssignedClass($next_per1)&&!existsAssignedClass($next_per2))
		{
			$ydm=date("Y-m-d");
			$usename=$_SESSION['SESS_FIRST_NAME'];
			$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$usename' AND ydm='$ydm'";
			$result=mysql_query($query);
			if($result)
			{
				if(mysql_num_rows($result)>0)
				{
					while($row=mysql_fetch_array($result))
					{
						if($row['per_num']==$per_num||$row['per_num']==$next_per1||$row['per_num']==$next_per2)
						{
							$pers[]=$row['user_per_details'];
						}
					}
				}
				if(($pers[0]==$pers[1])&&($pers[0]!=$pers[2]))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		else
		{
			return false;
		}
	
}




function labDet($i)
{
	
		$ydm=date("Y-m-d");
		$usename=$_SESSION['SESS_FIRST_NAME'];
		$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$usename' AND ydm='$ydm'";
		$result=mysql_query($query);
		if($result)
		{
			if(mysql_num_rows($result)>0)
			{
				while($row=mysql_fetch_array($result))
				{
					if($row['per_num']==$i)
					{
						$det[]=$row['user_name'];
						$det[]=$row['user_per_details'];
						return $det;
					}
				}
			}
		}
		else
		{
			return "error in getting details";
		}
	
}



function twoPerDet($i)
{
		$per_num=$i;
		$ydm=date("Y-m-d");
		$usename=$_SESSION['SESS_FIRST_NAME'];
		$query="SELECT * FROM faculty_assign_class WHERE to_faculty='$usename' AND ydm='$ydm'";
		$result=mysql_query($query);
		if($result)
		{
			if(mysql_num_rows($result)>0)
			{
				while($row=mysql_fetch_array($result))
				{
					if($row['per_num']==$per_num)
					{
						$det[]=$row['user_name'];
						$det[]=$row['user_per_details'];
						return $det;
					}
				}
			}
		}
		else
		{
			return "error in getting details";
		}
}
?>