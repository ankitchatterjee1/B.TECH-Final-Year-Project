<?php
include ("../../User_phpCode/Connection.php");


   if(isset($_POST['Submit']))
   {
	  $target1="../../Pic/Man/Watches/";
	  $target2="../../Pic/Man/Watches/";
	  
	  $Name=$_POST['name'];  
	  $amount=$_POST['amount'];	  
	  $details=$_POST['details'];
	  
	  $random_digit=rand(0000,9999);
      $str1="Watches-A-";
	  $str2="Watches-B-";
	  
	  $file_name1=$_FILES["pic"]["name"];
	  $file_name2=$_FILES["bpic"]["name"];
	  
	  $imgExt1 = strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
	  $imgExt2 = strtolower(pathinfo($file_name2,PATHINFO_EXTENSION));
	        
	  $new_file_name1=$str1.$random_digit.".".$imgExt1;
	  $new_file_name2=$str2.$random_digit.".".$imgExt2;
	  
	  $target_file1 = $target1.$new_file_name1;
	  $target_file2 = $target2.$new_file_name2;
	  
	  $date=date("y-m-d");
    
      $sql="INSERT INTO `watches`(`watches_name`, `watches_Rs`, `watches_det`, `watches_pic1`, `watches_pic2`, `watches_date`,`label`) VALUES ('$Name','$amount','$details','$new_file_name1','$new_file_name2','$date','Man Watches')";
	  		//echo $sql;
			//die;	
			if(mysqli_query($con,$sql)){
				
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["bpic"]["tmp_name"], $target_file2))
				 {
						header("location:../Man_Watches.php?msg=ok");
				 }		
			}
	}
?>