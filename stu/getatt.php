 <?php
	require_once('auth.php');
	require_once('../com/connection.php');
?>
<?php


		$q = intval($_GET['q']);
		$q=($q-1)*50;
		require_once('../com/connection.php');
		require_once('../funcs/ABAttEncryption.php');
		$roll=$_SESSION['SESS_ROLL_NUMBER'];
		$roll=substr($roll,-12);
		$quer2="SELECT * FROM student_current_details WHERE roll_number='$roll'";
		$res1=mysql_query($quer2);
		if($row=mysql_fetch_array($res1)){
		$dep=$row['current_branch'];
		$yer=$row['current_year'];
		$sem=$row['current_sem'];}
		if(($yer==1)&&($dep!='MCA')&&($dep!='MBA')&&($dep!='MCSE'))
{
$query="SELECT * FROM sem_table WHERE year='$yer' AND sem='$sem'";
$res=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($res);
$day=$row['start_date'];
}
		else
		{
			$query="SELECT * FROM sem_table WHERE branch='$dep' AND year='$yer' AND sem='$sem' ";
			$res=mysql_query($query);
			$row=mysql_fetch_array($res);
			$sday=$row['start_date'];
		}
		$day=date('Y-m-d', strtotime("$sday + $q days"));
		$date=date("Y-m-d");
		echo"<center><table class=\"inner_table_big1\" border=\"1\" style=\"width:700px;\" >";
		echo"<th style=\"background-color:#E6FFFF;\">date\period</th><th style=\"background-color:#E6FFFF;\">period 1</th><th 			style=\"background-color:#E6FFFF;\">period 2</th><th style=\"background-color:#E6FFFF;\">period 3</th><th style=\"background-color:#E6FFFF;\">period 4</th><th style=\"background-color:#E6FFFF;\">period 5</th><th style=\"background-color:#E6FFFF;\">period 6</th><th style=\"background-color:#E6FFFF;\">period 7</th>";

		$f=1;
		while($f<=50)
		{
			$i=1;		
			echo"<tr><td style=\"background-color:#FFE0EA;\">$day</td>";
			while($i<=7)
			{
				$qur="SELECT * FROM att_table WHERE roll_number='$roll'  AND period='$i' AND date='$day'";
				$res=mysql_query($qur);
				$row=mysql_fetch_array($res);
				if($row)
				{
					$stat=decrypt1($row['p_or_a'],$day);
					if($stat=='P')
					{
						echo"<td>".$stat."</td>";
					}
					else
					{
						echo"<td style=\"background-color:#FFE0EA;\" >".$stat."</td>";
					}
				}
				else
				{
					echo "<td style=\"background-color:#FFECDA;\">-</td>";}$i++;
				}
			if($day>=$date)
				break;
			$day=date('Y-m-d', strtotime("$day +1 day"));
			echo"</tr>";
			$f++;
		}
		echo"</table>";
//mysqli_close($con);
?>