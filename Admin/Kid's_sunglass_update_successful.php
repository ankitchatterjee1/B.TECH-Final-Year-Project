 <?php

$con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }


   if(isset($_POST['Submit']))
   {
	  $target1="../upload/kid sunglass/";
	  
	  $id=$_GET['id'];
	  $Name=$_POST['name'];  
	  $amount=$_POST['amount'];	  
	  $details=$_POST['details'];	
	  
	  $file_name1=$_FILES["pic"]["name"];
	  

	  $random_digit=rand(0000,9999);
      $str1="Sunglass-A-";
	  
	  
	  $imgExt1 = strtolower(pathinfo($file_name1,PATHINFO_EXTENSION));
	 
	     
	  $new_file_name1=$str1.$random_digit.".".$imgExt1;
	 

	  $target_file1 = $target1.$new_file_name1;
	  
	  
	 
	  if($file_name1 == ""){
		  $sql="UPDATE `kid's_sunglass` SET `name`=' $Name',`price`='$amount',`details`='$details' WHERE `id`='$id'";
		  if(mysqli_query($con,$sql)){
			  header("location:Kid's_sunglass_edit.php?msg=ok");
		  }
		 }
		 else{
			$sql1="SELECT `image` FROM `kid's_sunglass` WHERE `id`='$id'";
			$qry=mysqli_query($con,$sql1);
			$row=mysqli_fetch_array($qry);
             
	   		 $sql2="UPDATE `kid's_sunglass` SET `name`='$Name',`price`='$amount',`details`='$details',`image`='$new_file_name1' WHERE `id`='$id'";
			if(mysqli_query($con,$sql2)){
				unlink($target1.$row[0]);	
				if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file1))
				 {
						header("location:Kid's_sunglass_edit.php?msg=ok");
				 }		
			}	
		}
	}
?>