<?php
session_start();
$con=mysqli_connect("localhost","root","","shopping_cart");
if(!$con)
{
    echo "not connected to the database".mysqli_connect_error($con);
}
    
    $pin = $_SESSION['pincode'];
    $sql_details="SELECT * FROM `shopping_cart_login` ORDER BY `id` DESC";
	$qry_details=mysqli_query($con,$sql_details);
    $row_details=mysqli_fetch_array($qry_details);

    $sql_pin="SELECT * FROM `pincode` WHERE `pin`='$pin'";
	$qry_pin=mysqli_query($con,$sql_pin);
    $row_pin=mysqli_fetch_array($qry_pin);

if(isset($_GET['product']))
{
    $product=$_REQUEST['product'];
    $id=$_REQUEST['ID'];
    if($product=='Man dress')
    {
        $sql = "SELECT * FROM `men's_dress` WHERE `id`='$id'";
        
        $qry = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($qry);
    }
    else{echo "error";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script>
        function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
    </script>
    <script>
            $(function() {

  $(".numbers-row").append('<div class="inc button" onclick="sum()">+</div><div class="dec button" onclick="subtract()">-</div>');

  $(".button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
  	  var newVal = parseFloat(oldValue) + 1;
  	} else {
	   // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
	    } else {
        newVal = 0;
      }
	  }

    $button.parent().find("input").val(newVal);
      
  });

});
        function sum()
        {
            var price = parseInt(document.getElementById('price').value);
            var quantity = parseInt(document.getElementById('partridge').value);
            var shipping_cost = parseInt(document.getElementById('shipping_cost').value);
            
                
                var total = price * (quantity+1);
                document.getElementById('cartTotal').innerHTML=total;
                document.getElementById('cartTotal').value=total;
            
                var total_price = total + shipping_cost;
                document.getElementById('total').innerHTML=total_price;
                document.getElementById('total').value=total_price;
            
        }
        
        function subtract()
        {
            var price = parseInt(document.getElementById('price').value);
            var quantity = parseInt(document.getElementById('partridge').value);
            var shipping_cost = parseInt(document.getElementById('shipping_cost').value);
            
            if(quantity!=0)
            {
                var total = price * (quantity-1);
                document.getElementById('cartTotal').innerHTML=total;
                document.getElementById('cartTotal').value=total;
                
                var total_price = total + shipping_cost;
                document.getElementById('total').innerHTML=total_price;
                document.getElementById('total').value=total_price;
                
                if(total==0)
                {
                    document.getElementById('total').innerHTML=0;
                    document.getElementById('total').value=0;
                }
            }
            
        }
    </script>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php
                                    if(isset($_SESSION["username"])){
                                        echo "<li><a href='#'>Welcome ".$_SESSION['email']."</a> </li>";
                                            echo "<li><a href='logout.php'><i class='fa fa-lock'></i> LogOut </a></li>";
                                    }
                                    else
                                    {
                                        echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
                                    }
                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
				        <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="product-details.php">Product Details</a></li> 
										<li><a href="checkout.php">Checkout</a></li> 
										<li><a href="cart.php" class="active">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.php">Blog List</a></li>
										<li><a href="blog-single.php">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.php">404</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Details</td>
                            <td class="quantity"></td>
							<td class="price"></td>
							<td class="total"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<div class="img-zoom-container"><?php echo "<img src='upload/men dress/".$row[4]."' id='myimage' height='420' width='450' alt='' />" ?> </div>
							</td>
							<td class="cart_description">
								<h2><a href=""><?php echo "$row[3]"; ?></a></h2>
								<h4><p>Product ID: <?php echo "$row[6]"; ?></p></h4>
                                <p style="color:red;font-size:18px;">Rs.<input type="text" id="price" value="<?php echo "$row[2]"; ?>" /></p>
                                <p><span style="color:pink;font-size:35px;">&nbsp;*****</span></p>
                                <div class="numbers-row">
                                    <input type="text" name="partridge" class="partridge" id="partridge" value="1">
                                </div>
							</td>
						<!--	<td class="cart_price">
								
							</td>  -->
							<td class="cart_quantity">
								<div id="myresult" class="img-zoom-result"></div>
							</td>
							
						</tr>

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
        <form action="cartPayment.php" method="post">
		<div class="container">
			<div class="heading">
				<h3>PAYMENT</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>  
            <?php
                if(isset($_SESSION["username"])){
                    if($row_details[1]==$_SESSION["username"])
                    {
            ?>        
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
                        <ul class="user_info">
                            <li class="single_field">
                                <label>First Name:</label>
                                <?php
                                echo "<input type='text' placeholder='first Name' name='firstname'  style='border:solid grey' value='' />"
                                ?>
                            </li>
                            <li class="single_field">
                                <label>Middle Name:</label>
                                <?php
                                echo "<input type='text' placeholder='Middle Name' name='middlename' style='border:solid grey' value='' />"
                                ?>
                            </li>
                            <li class="single_field">
                                <label>Last Name:</label>
                                <?php
                                echo "<input type='text' placeholder='Last Name' name='lastname' style='border:solid grey' value='' />"
                                ?>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>User Name:</label>
                                <?php
                                echo "<input type='text' placeholder='User Name' name='username' style='border:solid grey' value='$row_details[1]' />"
                                ?>
                            </li>
                            <li class="single_field">
                                <label>Email ID:</label>
                                <?php
                                echo "<input type='text' placeholder='' name='email' style='border:solid grey' value='$row_details[3]' />"
                                ?>
                            </li>
                            <li class="single_field">
                                <label>Phone NO.</label>
                                <?php
                                echo "<input type='text' placeholder='' name='phone' style='border:solid grey' value='$row_details[2]' />"
                                ?>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
								<label>House/Flat No.</label>
                                <input type="text" name="house_no" placeholder="" style="border:solid grey">
                            </li>
                            <li class="single_field">
								<label>Street Name</label>
                                <input type="text" name="street_name" placeholder="" style="border:solid grey">
                            </li>
                            <li class="single_field">
								<label>City</label>
                                <input type="text" name="city" placeholder="" style="border:solid grey">
                            </li>
                        </ul>
						 <ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select name="country" style="border:solid grey;">
									<option>India</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>United State</option>
									<option>Pakistan</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select name="state" style="border:solid grey">
									<option>Arunachal Pradesh</option>
									<option>Bihar</option>
									<option>Hariyana</option>
									<option>Delhi</option>
									<option>West Bengal</option>
								</select>
							</li>
                    <?php 
                    }
                }
                  if($row_pin[1]==$pin)
                    {           
                    ?>
							<li class="single_field zip-field">
								<label>Pin Code:</label>
								<?php
                                echo "<input type='text' placeholder='' name='pincode' style='border:solid grey' value='$pin' />"
                                ?>
							</li>
						</ul>
                        
				<!--		<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>  -->
					</div>
				</div>
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_info">
							<li class="single_field">
                                <label>Cart Sub Total</label>
                                <input type="text" id="cartTotal" name="subtotal" style="border:solid grey" value="<?php echo "$row[2]"; ?>"/>
                            </li>
							
							<li class="single_field">
                                <label>Shipping Cost</label>
                                
                                <input type="text" id="shipping_cost" placeholder="" name="shipping_cost" style="border:solid grey" value="<?php echo "$row_pin[2]"; ?>" />
                                
                            </li>
                        <?php    
                            $total=$row[2]+$row_pin[2];
                        ?>            
							<li class="single_field">
                                <label>Total</label>
                                <input type="text" id="total" name="total" style="border:solid grey" value="<?php echo $total; ?>" />
                            </li>
						</ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Cash On Delivery</label>
                                <input type="radio" />
                            </li>
                            <li class="single_field">
                                <label>Credit Card</label>
                                <input type="radio" />
                            </li>
                            <li class="single_field">
                                <label>Debit Card</label>
                                <input type="radio" />
                            </li>
                            <li class="single_field">
                                <label>Net Banking</label>
                                <input type="radio" />
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Bank Account No.</label>
                                <input type="text" name="account_no" style="border:solid grey" />
                            </li>
                            <li class="single_field">
                                <label>Account Holder Name</label>
                                <input type="text" name="account_holder" style="border:solid grey" />
                            </li>
                            <li class="single_field">
                                <label>IFSC code</label>
                                <input type="text" name="ifsc_code" style="border:solid grey" />
                            </li>
                        </ul>
                        <ul class="user_info">
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
							     <input type="submit" name="submit" value="Place Order" style="border:solid grey;color:black;background-color:green;height:50px;width:100px" />
                            </li>
                        </ul>
						<!-- <a class="btn btn-default check_out" href="">Check Out</a> -->
					</div>
				</div> 
			</div>
            <?php 
                    } ?>
		</div>
        </form>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 Shopping Cart Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Souvik Basu</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
    <script>
    imageZoom("myimage", "myresult");
    </script>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>