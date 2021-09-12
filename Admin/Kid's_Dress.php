
<?php
	include("Header.php");
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
			<form action="kid_dress_upload.php" method="post" enctype="multipart/form-data">
				<center><h2><b>Kid Dress</b></h2></center>   
				<table>
					<tr>
					   <td>Dress Name :&nbsp;&nbsp;</td>
					   <td><input type="text" id="brand" name="name" placeholder="Enter dress name"></td>
					   <td class="span"></td>
                    </tr>    
                        
                    <tr>    
					   <td>Amount :&nbsp;&nbsp;</td>		   
					   <td><input type="text" id="amount" name="amount" placeholder="Enter price"></td>
					</tr>
                    
                    <tr>    
					   <td>Product ID   :&nbsp;&nbsp;</td>		   
					   <td><input type="text" id="product_id" name="product_id" placeholder="Enter product id"></td>
					</tr>
			
					<tr>
					   <td>Details :&nbsp;&nbsp;</td>		   
					   <td><textarea id="detels" name="details" style="height:100px;width:200px;border:1px solid black"></textarea> </td>
					</tr>
				</table>
				<table>
						<tr>
						   <td> Picture :&nbsp;&nbsp;</td>		   
						   <td><input type="file" id="pic" name="pic" accept="image/*" onchange="loadFile(event)"></td>
						   <td>
								<img id="output"/>
						   </td>
						   
						</tr>
				</table>
				<table>
					<tr>
                        <input type="submit" name="Submit" value="Upload">
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
  
  var loadFile2 = function(event) {
  var output2 = document.getElementById('output2');
    output2.src = URL.createObjectURL(event.target.files[0]);
  };

</script>

<?php
	include("Footer.php");
?>

