<?php
	session_start();
	if($_SESSION['username']!="admin")
	{
		header('location:../index.php');
	} 
?>

<!doctype html>
<html>
  <head>
  <title>ADMIN | <?php /* echo $_SESSION['admin']; */ ?> </title>
  
  <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
	<link href="Table/css/custom.min.css" rel="stylesheet">
	<link href="Table/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
    <div id="container">
	   <header class="header dark-bg">
	         <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
			
			<!--logo start-->
            <a href="index.php" class="logo">Admin Page <span class="lite"></span></a>
            <!--logo end-->
			
			
			           <div class="top-nav notification-row">                
             
                
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/logo1.jpg">
                            </span>
                            <span class="username"><?php  echo $_SESSION['username']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                                                     
                            <li>
                                <a href="Admin_code/Admin_logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                          
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
			
			
	   </header>
	</div>
	
	
	<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Man's Insert</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
						  <li><a class="" href="Men's_Dress.php">Dress</a></li>
                          
                          <li><a class="" href="Men's_tshirt.php">T-shirt</a></li>
                          
                          <li><a class="" href="Men's_watch.php">WATCHES</a></li>
                          
                          <li><a class="" href="Men's_Sunglass.php">Sunglass</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Woman's Insert</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Women's_Dress.php">Dress</a></li>  
                          
                          <li><a class="" href="Women's_watch.php">WATCHES</a></li>
                          
                          <li><a class="" href="Women's_neckless.php">NECKLACE</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Offer products insert</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Women's_Dress_offer.php">Dress</a></li>  
                          
                          <li><a class="" href="Women's_watch_offer.php">WATCHES</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Kid's Insert</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Kid's_Dress.php">Dress</a></li>
                          
                          <li><a class="" href="Kid's_Sunglass.php">Sunglass</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>BAG,BLAZER,SHOE Insert</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="bags.php">Bag</a></li>  
                          
                          <li><a class="" href="blazer.php">Blazer</a></li>
                          
                          <li><a class="" href="shoe.php">Shoe</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>EDIT MAN</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Men's_dress_edit.php">Dress</a></li>                                                                        
                          <li><a class="" href="Men's_watch_edit.php">WATCHES</a></li>
                          
                          <li><a class="" href="Men's_sunglass_edit.php">Sunglass</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>EDIT WOMAN</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="Women's_dress_edit.php">Dress</a></li>                          
                          <li><a class="" href="Women's_neckless_edit.php">NECKLACE</a></li>
                          
                          <li><a class="" href="Women's_watch_edit.php">WATCHES</a></li>
						  <!--<li><a class="" href="">BANGELS</a></li>                          
                          <li><a class="" href="">WATCHES</a></li>
						  <li><a class="" href="">JEWELLERY SET</a></li>
						  <li><a class="" href="">BRACELET</a></li>                          
                          <li><a class="" href="">PENDENT</a></li>-->
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>EDIT KID</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="Kid's_dress_edit.php">Dress</a></li>                          
                          <li><a class="" href="Kid's_sunglass_edit.php">Sunglass</a></li>
                          
						  <!--<li><a class="" href="">BANGELS</a></li>                          
                          <li><a class="" href="">WATCHES</a></li>
						  <li><a class="" href="">JEWELLERY SET</a></li>
						  <li><a class="" href="">BRACELET</a></li>                          
                          <li><a class="" href="">PENDENT</a></li>-->
                      </ul>
                  </li>
				  <li>
                      <a class="" href="order.php">
                          <i class="icon_genius"></i>
                          <span>ORDER</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="user.php">
                          <i class="icon_piechart"></i>
                          <span>USERS</span>
                          
                      </a>                                        
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
