<?php
	
	$con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }
	
	$target1="../upload/men dress/";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$sql="SELECT `image` FROM `men's_dress` WHERE `id`='$id'";
        
		
		if($qry=mysqli_query($con,$sql))
		{
				$row=mysqli_fetch_array($qry);
				
				$sql1="DELETE FROM `men's_dress` WHERE `id`='$id'";
				//echo $sql1;
		//die; 
				if(mysqli_query($con,$sql1))
				{
					unlink($target1.$row[0]);
					header("location:Men's_dress_edit.php?msg=ok");
				}
			
		}
        
	}


?>