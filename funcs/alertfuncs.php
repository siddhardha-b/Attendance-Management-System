<?php
require_once '../com/connection.php';
?>
<?php
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
		return "unknown";
	}
}





function isValidSection($section,$year)
{
	$query="SELECT * FROM student_current_details WHERE current_sec='$section' AND current_year='$year'";
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
		return false;
	}
}



function getNameStu($rollnumber)
{
	$query="SELECT * FROM student_login WHERE roll_number=$rollnumber";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_assoc($result);
			$f=$row['name'];
			$l=$row['last_name'];
			return $f." ".$l;
		}
		else
		{
			return "Unknown Name";
		}
	}
	else
	{
		return "Unknown Name";
	}
}


function mcrypt($id)
{
	$id1=mcrypt_ecb(MCRYPT_3DES,KEY,$id,MCRYPT_ENCRYPT);
	$id1=bin2hex($id1);
	return $id1;		
}

function decrypt($id)
{
	$bin_type=pack("H*",$id);
	$id1=mcrypt_decrypt(MCRYPT_3DES,KEY,$bin_type,"ecb");
	return $id1;
}


function getName1($faculty_id)
{
	
	$query="SELECT * FROM faculty_login WHERE user_name='$faculty_id' LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)==1)
		{
			$row=mysql_fetch_assoc($result);
			if($row['user_level']==1)
			{
				return $row['name'];
			}
			elseif($row['user_level']==2)
			{
				$branch=$row['faculty_dept'];
				return "HOD ".$branch;
			}
			elseif($row['user_level']==3)
			{
				return "Principal";
			}
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



function checkNewAlertCount()
{
	
	$userlevel=$_SESSION['user_level'];
	if($userlevel>=1&&$userlevel<=4)
	{
		$username=$_SESSION['SESS_FIRST_NAME'];
		$query="SELECT * FROM faculty_login WHERE user_name='$username'";
		$result=mysql_query($query);
		if($result)
		{
			$row=mysql_fetch_assoc($result);
			$branch=$row['faculty_dept'];
			$time1=$row['alert_time'];	
		}	
		else
		{
			echo "Some unknown error encountered";
			exit();
		}
	}
	if($userlevel>=11&&$userlevel<=12)
	{
		$username=$_SESSION['SESS_ROLL_NUMBER'];
		$query="SELECT * FROM student_current_details WHERE roll_number='$username'";
		$result=mysql_query($query);
		if($result)
		{
			$row=mysql_fetch_assoc($result);
			$branch1=$row['current_branch'];
			$section=$row['current_sec'];
			$year=$row['current_year'];
			$query2="SELECT alert_time FROM student_login WHERE roll_number='$username'";
			$result2=mysql_query($query2);
			if(!$result2)
			{
				exit();
			}
			else
			{
				$row2=mysql_fetch_assoc($result2);
				$time1=$row2['alert_time'];
			}
			$section1=$year.",".$branch1;
		}	
		else
		{
			echo "Some unknown error encountered";
			exit();
		}
	}
	$count=0;
	$query="SELECT * FROM alert_section";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($time1<=$row['alert_time'])
				{
					if($userlevel==1||$userlevel==3)
					{
						if($row['alert_to_type']==3&&$userlevel!=3)
						{
							$count++;
						}
						elseif($row['alert_to_type']==4&&$branch==$row['alert_to'])
						{
							$count++;
						}
						elseif($row['alert_to_type']==5&&$row['alert_to']==$username)
						{
							$count++;
						}
					}
					elseif($userlevel==2)
					{
						if($row['alert_to_type']==1||$row['alert_to_type']==3)
						{
							$count++;
						}
						elseif($row['alert_to_type']==2&&$row['alert_to']==$username)
						{
							$count++;
						}
						elseif($row['alert_to_type']==4&&$branch==$row['alert_to'])
						{
							$count++;
						}
						elseif($row['alert_to_type']==5&&$row['alert_to']==$username)
						{
							$count++;
						}
					}
					elseif($userlevel==11)
					{
						if($row['alert_to_type']==6)
						{
							$count++;
						}
						elseif($row['alert_to_type']==7&&$row['alert_to']==$branch1)
						{
							$count++;
						}
						elseif($row['alert_to_type']==8&&$row['alert_to']==$section1)
						{
							$count++;
						}
						elseif($row['alert_to_type']==9&&$row['alert_to']==$username)
						{
							$count++;
						}
					}
				}
			}
			return $count;
		}
		else
		{
			return 0;
		}
	}
	else
	{
		return 0;
	}
}
?>