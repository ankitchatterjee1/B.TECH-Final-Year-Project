<?php
	
	include ("../../User_phpCode/Connection.php");
	
	$target1="../../Pic/Man/Watches/";
	$target2="../../Pic/Man/Watches/";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$sql="SELECT `watches_pic1`, `watches_pic2` FROM `watches` WHERE `id`='$id'";
		
		if($qry=mysqli_query($con,$sql))
		{
				$row=mysqli_fetch_array($qry);
				
				$sql1="DELETE FROM `watches` WHERE `id`='$id'";
				//echo $sql1;
		//die;
				if(mysqli_query($con,$sql1))
				{
					unlink($target1.$row[0]);
					unlink($target2.$row[1]);	
					header("location:../Man_watches_show.php?msg=ok");
				}
			
		}
	}


?>