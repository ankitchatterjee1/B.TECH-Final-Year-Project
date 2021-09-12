
<?php
 
// create a variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username=$_POST['usernamesignup'];
$email=$_POST['emailsignup'];
$password=$_POST['passwordsignup'];
$confirm_password=$_POST['passwordsignup_confirm'];
$phone_number=$_POST['numbersignup'];

//This is the directory where images will be saved   
//$target = "C:\xampp\htdocs\souvik\upload"; 
//$target = $target . basename( $_FILES['image']['name']); 

//This gets all the other information from the form 
//$pic = ($_FILES['image']['name']); 

//Writes the photo to the server 
//move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
/*

 $file=$_FILES['image']['tmp_name'];
if(!isset($file))
    {
      echo 'Please select an Image';
    }
else 
    {
       $image_check = getimagesize($_FILES['image']['tmp_name']);
       if($image_check==false)
       {
        echo 'Not a Valid Image';
       }
        else
       {
        $image = file_get_contents ($_FILES['image']['tmp_name']);
        $image_name = $_FILES['image']['name'];
        
 */      
 
//Execute the query

$sql = "INSERT INTO shopping_cart_login(username,phone_no,email,password)
 VALUES('$username','$phone_number ','$email','$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
//  To redirect form on a particular page
header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}    
        

mysqli_close($conn);
        
     
//        }
//}


?>