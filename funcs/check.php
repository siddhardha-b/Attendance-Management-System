<?php
require_once ('checkvalidity.php');
require_once ('../com/connection.php');
function check($class)
{
	$class=strtoupper($class);
	if(empty($class))
	{
		return "FREE";
	}
	elseif(!empty($class))
	{
		$i=0;
		 if(!is_numeric($class[$i++]))
		 {
			 return "FREE";
		 }
		 if(!($class[$i++]==","))
		 {
			 return "FREE";
		 }
		 
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
			 if($i>5)
			 {
				 return "FREE";
			 }
		 }
		 if(!is_numeric($class[$i++]))
		 {
			 return "FREE";
		 }
		 if(!($class[$i++]==","))
		 {
			 return "FREE";
		 }
		 $subcode=substr($class,$i,strlen($class));
		 if(!isValidSubjectCode($subcode))
		 {
			 return "FREE";
		 }
		 return $class;
	}
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
function checks($subject)
{
$subject=strtoupper($subject);
if(!isValidSubjectCode($subject))
		 {
			 return "FREE";
		 }
		 else
		 return $subject;


}


?>