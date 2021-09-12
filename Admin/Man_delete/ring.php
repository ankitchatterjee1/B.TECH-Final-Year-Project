<?php
	
	include ("../../User_phpCode/Connection.php");
	
	$target1="../../Pic/Man/Ring/";
	$target2="../../Pic/Man/Ring/";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$sql="SELECT `menring_pic1`, `menring_pic2` FROM `menring` WHERE `id`='$id'";
		
		if($qry=mysqli_query($con,$sql))
		{
				$row=mysqli_fetch_array($qry);
				
				$sql1="DELETE FROM `menring` WHERE `id`='$id'";
				//echo $sql1;
		//die;
				if(mysqli_query($con,$sql1))
				{
					unlink($target1.$row[0]);
					unlink($target2.$row[1]);	
					header("location:../Man_ring_show.php?msg=ok");
				}
			
		}
	}


?>