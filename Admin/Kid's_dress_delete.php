<?php
	
	$con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }
	
	$target1="../upload/kid dress/";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$sql="SELECT `image` FROM `kid's_dress` WHERE `id`='$id'";
        
		
		if($qry=mysqli_query($con,$sql))
		{
				$row=mysqli_fetch_array($qry);
				
				$sql1="DELETE FROM `kid's_dress` WHERE `id`='$id'";
				
				if(mysqli_query($con,$sql1))
				{
					unlink($target1.$row[0]);
					header("location:Kid's_dress_edit.php?msg=ok");
				}
			
		}
        
	}


?>