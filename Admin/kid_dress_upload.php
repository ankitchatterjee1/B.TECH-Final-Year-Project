<?php

    $con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }
   if(isset($_POST["Submit"]))
   {
	  $target1="../upload/kid dress/";
	  
	  
	  $Name=$_POST['name'];  
	  $amount=$_POST['amount'];	  
	  $details=$_POST['details'];
       $productId=$_POST['product_id']; 
	  
	  $random_digit=rand(0000,9999);
      $str1="Dress-A-";
	  //$str2="Ring-B-";
	  
	  $file_name1=$_FILES["pic"]["name"];
	  //$file_name2=$_FILES["bpic"]["name"];
	  
	  $imgExt1 = strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
	 // $imgExt2 = strtolower(pathinfo($file_name2,PATHINFO_EXTENSION));
	        
	  $new_file_name1=$str1.$random_digit.".".$imgExt1;
	  //$new_file_name2=$str2.$random_digit.".".$imgExt2;
	  
	  $target_file1 = $target1.$new_file_name1;
	 //$target_file2 = $target2.$new_file_name2;
	  
	 // $date=date("y-m-d");
    
      $sql = "INSERT INTO `kid's_dress`(`name`, `price`, `details`, `image`, `label`,`Web ID:`) VALUES ('$Name','$amount','$details','$new_file_name1','Kid dress','$productId')";  
        
			if(mysqli_query($con,$sql)){
				
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file1))
				 {
						header("location:Kid's_Dress.php?msg=ok");
				 }		
			}	
            else{
                echo "connection error";
            }
			
			
	}
 
   

?>