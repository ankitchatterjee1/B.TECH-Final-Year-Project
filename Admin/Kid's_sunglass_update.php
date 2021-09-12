<?php
	include("Header.php");
?>

<?php
	$con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];	
		$sql="SELECT * FROM `kid's_sunglass` WHERE `id`='$id'";
		$qry=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($qry);
	}
?>

<style>
	   .Style_left{
		 margin-left:0px;
		 padding-top:10%;
		 padding-buttom:30px;
		 padding-left:20%;
	   }
	   
		input[type=text], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid black;
		border-radius: 10px;
		box-sizing: border-box;
	}

	input[type=submit] {
		width: 15%;
		background-color:forestgreen;
		color: black;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 6px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: blue;
	}
	.Style-form{
		margin-top:30px;
		width: 90%;
		border-radius: 5px;
		background-color: cyan;
		padding: 20px;
	}
	.span{
		width:150px;
	}
    #output{
        height: 150px;
        width: 100px;
        background-color: white;
        border:1px solid black;
        border-radius: 5px;
    } 
</style>


	<div class="Style_left"> 
	      <div class="Style-form">
			<form action="Kid's_sunglass_update_successful.php?id=<?php echo $row[0];?>" method="post" enctype="multipart/form-data">
				<center><h2>KID SUNGLASS UPDATE</h2></center>   
				<table>
					<tr>
					   <td>Name</td>
					   <td><input type="text" id="brand" name="name" value="<?php echo $row[1];?>"></td>
					   <td class="span"></td>
					   <td>Amount</td>		   
					   <td><input type="text" id="amount" name="amount" value="<?php echo $row[2];?>"></td>
					</tr>
			
					<tr>
					   <td>Details</td>		   
					   <td><textarea id="detels" name="details" style="height:100px;width:200px;"><?php echo $row[3];?></textarea> </td>
					</tr>
				</table>
				<table>
						<tr>
						   <td>Picture</td>		   
						   <td><input type="file" id="pic" name="pic"  accept="image/*" onchange="loadFile(event)"></td>
						   <td>
								<?php echo "<img id='output' style='height:100px; width:100px;' src='../upload/kid sunglass/".$row[4]."'>";?>
						   </td>
						   
						</tr>
				</table>
				<table>
					<tr>
					   <td style="width:700px;"><center><input type="submit" name="Submit" value="Update"><center></td>
					</tr> 
				
				</table>
			  </form>
		</div>  
	  </div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  

</script>

<?php
	include("Footer2.php");
?>