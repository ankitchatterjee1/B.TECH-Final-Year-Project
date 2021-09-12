<?php

include ("../../User_phpCode/Connection.php");


   if(isset($_POST['Submit']))
   {
	  $target1="../../Pic/Man/Ring/";
	  $target2="../../Pic/Man/Ring/";
	  $id=$_GET['id'];
	  $Name=$_POST['name'];  
	  $amount=$_POST['amount'];	  
	  $details=$_POST['details'];	
	  
	  $file_name1=$_FILES["pic"]["name"];
	  $file_name2=$_FILES["bpic"]["name"];

	  $random_digit=rand(0000,9999);
      $str1="Ring-A-";
	  $str2="Ring-B-";
	  
	  $imgExt1 = strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
	  $imgExt2 = strtolower(pathinfo($file_name2,PATHINFO_EXTENSION));
	     
	  $new_file_name1=$str1.$random_digit.".".$imgExt1;
	  $new_file_name2=$str2.$random_digit.".".$imgExt2;

	  $target_file1 = $target1.$new_file_name1;
	  $target_file2 = $target2.$new_file_name2;
	  
	  $date=date("y-m-d");
	  if($file_name1 == "" && $file_name2 == ""){
		  $sql="UPDATE `menring` SET `menring_name`='$Name',`menring_Rs`='$amount',`menring_det`='$details',`menring_date`='$date' WHERE `id`='$id'";
		  if(mysqli_query($con,$sql)){
			  header("location:../Man_ring_show.php?msg=ok");
		  }
		 }
		 else{
			$sql1="SELECT `menring_pic1`, `menring_pic2` FROM `menring` WHERE `id`='$id'";
			$qry=mysqli_query($con,$sql1);
			$row=mysqli_fetch_array($qry);
	   		$sql="UPDATE `menring` SET `menring_name`='$Name',`menring_Rs`='$amount',`menring_det`='$details',`menring_pic1`='$new_file_name1',`menring_pic2`='$new_file_name2',`menring_date`='$date' WHERE `id`='$id'";
			if(mysqli_query($con,$sql)){
				unlink($target1.$row[0]);
				unlink($target2.$row[1]);	
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["bpic"]["tmp_name"], $target_file2))
				 {
						header("location:../Man_ring_show.php?msg=ok");
				 }		
			}	
		}
	}
?>