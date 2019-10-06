<?php
require_once('../com/connection.php');
function isAlreadyEntered($per_id,$year,$section)
{
	$ymd=date('Y-m-d');
	$query="SELECT * FROM att_table WHERE date='$ymd' AND year='$year'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['section']==$section&&$row['period']==$per_id)
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
		return false;
	}
}



function isAlreadyEntered2($per_id,$year,$section,$date,$subject)
{
	$ymd=$date;
	$query="SELECT * FROM att_table WHERE date='$ymd' AND year='$year'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if(isElective($subject))
				{
					if($row['section']==$section&&$row['period']==$per_id&&!isElective($row['subject']))
					{
						return true;
					}
				}
				else
				{
					if($row['section']==$section&&$row['period']==$per_id)
					{
						return true;
					}
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
		echo "entered";
		return false;
	}
}





function isAlreadyEnteredEle($per_no,$sub_id)
{
	$ret_flag=false;
	$ymd=date('Y-m-d');
	$query="SELECT * FROM att_table WHERE date='$ymd' AND period='$per_no'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				$roll_num=$row['roll_number'];
				if(isElectiveTo($roll_num,$sub_id))
				{
					return true;
				}
			}
			return $ret_flag;
		}
		else
		{
			return NULL;
		}
	}
	else
	{
		return NULL;
	}	
}


function isElectiveTo($roll_num,$sub_id)
{
	$query="SELECT * FROM student_current_details WHERE roll_number='$roll_num'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$stu=mysql_fetch_assoc($result);
			$ele1=$stu['current_ele1'];
			$ele2=$stu['current_ele2'];
			$ele3=$stu['current_ele3'];
			if($sub_id==$ele1)
			{
				return true;
			}
			elseif($sub_id==$ele2)
			{
				return true;
			}
			elseif($sub_id==$ele3)
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
	else
	{
		return NULL;
	}
}



function isElective($sub_id)
{
	$query="SELECT * FROM sub_electives WHERE ele_id='$sub_id'";
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



function check($sub_name)
{
	
		$sub_name=strtoupper($sub_name);
		if(isElective($sub_name))
		{
			return true;
		}
		else
		{
			return false;
		}
	
}

?>