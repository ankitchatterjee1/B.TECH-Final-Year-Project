<?php
	include("Header.php");
?>

<?php


	$con = mysqli_connect("localhost","root","","shopping_cart");
    
    if(!$con)
    {
        echo "database not connected".mysqli_connect_error($con);
    }
	$i = 0;
	$sql="SELECT * FROM `men's_dress` WHERE `label` = 'Man dress'";
	$qry=mysqli_query($con,$sql);
	
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


<div class="main_container">

        <!-- page content -->
        <div class="Style_left">
          <div class="Style-form">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
				<center><h1>EDIT MAN DRESS</h1></center>
                <div class="x_panel">
                  
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="height:30px; width:50px;">ID</th>
                          <th style="height:30px; width:200px;">NAME</th>
                          <th style="height:30px; width:150px;">AMOUNT</th>
                          <th style="height:30px; width:250px;">DETAILS</th>
                          <th style="height:30px; width:150px;">PIC 1</th>
						  <th style="height:30px; width:250px;">ACTION</th>
                        </tr>
                      </thead>


                      <tbody>
					<?php
						while($row=mysqli_fetch_array($qry)) {	
					?>
                        <tr>
                          <td><?php echo $i + 1;?></td>
                          <td><?php echo $row[1];?></td>						  
                          <td><?php echo $row[2];?></td>
                          <td><?php echo $row[3];?></td>
                          <td><?php echo "<img style='height:100px; width:100px;' src='../upload/men dress/".$row[4]."'>";?></td>
						  <th>
								<a href="Men's_dress_update.php?id=<?php echo $row[0];?>">EDIT </a>|
								<a href="Men's_dress_delete.php?id=<?php echo $row[0];?>">DELETE</a>
						  </th>
                        </tr>
					<?php
						$i++;
						}
					?>	
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
	  
	    <!-- jQuery -->
    <script src="Table/js/jquery.min.js"></script>

    <script src="Table/js/bootstrap.min.js"></script>
 
    <!-- Datatables -->
    <script src="Table/js/jquery.dataTables.min.js"></script>
    <script src="Table/js/dataTables.bootstrap.min.js"></script>
    <script src="Table/js/dataTables.buttons.min.js"></script>
    <script src="Table/js/buttons.bootstrap.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="Table/js/custom.min.js"></script>
	  
	  
<?php
	include("Footer2.php");
?>