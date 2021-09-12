<?php
include ("../../User_phpCode/Connection.php");


   if(isset($_POST['Submit']))
   {
	  $target1="../../Pic/Man/Ring/";
	  $target2="../../Pic/Man/Ring/";
	  
	  $Name=$_POST['name'];  
	  $amount=$_POST['amount'];	  
	  $details=$_POST['details'];
	  
	  $random_digit=rand(0000,9999);
      $str1="Ring-A-";
	  $str2="Ring-B-";
	  
	  $file_name1=$_FILES["pic"]["name"];
	  $file_name2=$_FILES["bpic"]["name"];
	  
	  $imgExt1 = strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
	  $imgExt2 = strtolower(pathinfo($file_name2,PATHINFO_EXTENSION));
	        
	  $new_file_name1=$str1.$random_digit.".".$imgExt1;
	  $new_file_name2=$str2.$random_digit.".".$imgExt2;
	  
	  $target_file1 = $target1.$new_file_name1;
	  $target_file2 = $target2.$new_file_name2;
	  
	  $date=date("y-m-d");
    
      $sql="INSERT INTO `menring`(`menring_name`, `menring_Rs`, `menring_det`, `menring_pic1`, `menring_pic2`, `menring_date`,`label`) VALUES ('$Name','$amount','$details','$new_file_name1','$new_file_name2','$date','Man Earring')";  	
			if(mysqli_query($con,$sql)){
				
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["bpic"]["tmp_name"], $target_file2))
				 {
						header("location:../Man_Rings.php?msg=ok");
				 }		
			}	
			
			
	}
 
   

?>