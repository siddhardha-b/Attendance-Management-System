<?php
require_once('../com/connection.php');
require_once ('checkvalidity.php');
function getPeriod($sub_id)
{
	$qry="SELECT * FROM subject_details WHERE subject_id='$sub_id' LIMIT 1";
	$result=mysql_query($qry);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$sub=mysql_fetch_assoc($result);
			return $sub['subject_name'];
		}
		else
		{
			return $sub_id;
		}
	}
	else
	{
		return NULL;
	}
	
}

function getFullPeriod($sub_id)
{
	$qry="SELECT * FROM subject_details WHERE subject_id='$sub_id' LIMIT 1";
	$result=mysql_query($qry);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			$sub=mysql_fetch_assoc($result);
			return $sub['subject_name'];
		}
		else
		{
			return $sub_id;
		}
	}
	else
	{
		return NULL;
	}
	
}

function removeSub($str)
{
	$class=$str;
	$substr[0]=$class[2];
	$substr[1]=$class[3];
	$substr1=implode($substr);
	$i=3;
	while(!isBranch($substr1)&&$i<=5)
	{
		for($x=2,$y=0;$x<=$i;$x++,$y++)
		{
			$substr[$y]=$class[$x];
			$substr1=implode($substr);
		}
		$i++;
	}
	$i=$i+2;
	$subcode=substr($class,0,$i-1);
	return $subcode;
	
}



function isBranch($branch)
{
	$query="SELECT * FROM branch_det WHERE branch_id='$branch' LIMIT 1";
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

function getLiveSem($year,$branch)
{
	$query="SELECT * FROM sem_table WHERE year='$year' AND branch='$branch'";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				if($row['status']==1)
				{
					return $row['sem'];
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
		return NULL;
	}


}

?>