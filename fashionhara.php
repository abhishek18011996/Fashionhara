<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
         <title>Bootstrap 101 Template</title>
 
        <!-- Bootstrap -->
		<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="jf/jquery-ui.css">
        <link type="text/css" rel="stylesheet" href="jf/jquery-ui.structure.css">
        <link type="text/css" rel="stylesheet" href="jf/jquery-ui.theme.css">
        <link href="global.css" rel="stylesheet" type="text/css"/>
  </head>
  <body >
 
    <!-- This is the container-->
    <div class="container-fluid bg" style="height:2000px;">
	<!-- This is our header-->
        <div class="row visible-sm visible-xs visible-md visible-lg "  style="height:3%;">
            <div class="col-xs-12 col-sm-12 visible-sm visible-xs visible-md visible-lg" style="border-bottom:1px solid gray;height:50%;">
	            <img src="Resources/leaf.jpg" style="position:absolute;left:0%;top:0%;max-height:100%; border-radius:50%;"/>
	            <h4 style="position:absolute;left:7%;top:0;right:0;font-family:fantasy;font-size:125%;">fashionara</h4>
	            <h4 style="position:absolute;left:30%;top:0%;max-height:100%;"> <?php echo "Hi!".$_SESSION["Name"];  ?></h4>
	            <a href="payment.php"><img src="Resources/payment.jpg" style="position:absolute;left:60%;top:0%;max-height:100%; border-radius:50%;"/></a>
	            <img src="Resources/cart.png" style="position:absolute;left:80%;top:0%;max-height:100%; border-radius:50%;"/>
	
	            <img src="Resources/notify.png" style="position:absolute;left:90%;top:0%;max-height:100%; border-radius:50%;"/>
            </div>
            <div class="col-xs-12 col-sm-12 visible-sm visible-xs visible-md visible-lg  " style="border-bottom:1px solid gray;height:50%;">	
                 <div class="dropdown" style="position:absolute; left:0%;top:0%; width:20%;">
                        <button type="button" class="btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" style="position:absolute; left:0%;top:0%; width:100%;">
	                    MEN <span class="caret"></button>
						    <ul class="dropdown-menu" role="menu">
							     <li> <a href="#">Shirts</a></li>
								 <li><a href="#">T-Shirts</a></li>
								 <li><a href="#">Footwear</a></li>
								 <li><a href="#">Jackets</a></li>
								 <li><a href="#">Trousers</a></li>
							</ul>
				</div>
			 	
                 <div class="dropdown" style="position:absolute; left:20%;top:0%; width:20%;">
                        <button type="button" class="btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" style="position:absolute; left:0%;top:0%; width:100%;">
	                    WOMEN <span class="caret"></button>
						    <ul class="dropdown-menu" role="menu">
							     <li> <a href="#">Shirts</a></li>
								 <li><a href="#">TOPS</a></li>
								 <li><a href="#">Footwear</a></li>
								 <li><a href="#">Jackets</a></li>
								 <li><a href="#">PURSE</a></li>
							</ul>
				</div>
			 	
                <div class="dropdown" style="position:absolute; left:40%;top:0%; width:20%;">
                        <button type="button" class="btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" style="position:absolute; left:0%;top:0%; width:100%;">
	                    KIDS <span class="caret"></button>
						    <ul class="dropdown-menu" role="menu">
							     <li> <a href="#">Shirts</a></li>
								 <li><a href="#">T-Shirts</a></li>
								 <li><a href="#">Footwear</a></li>
								 <li><a href="#">Jackets</a></li>
								 <li><a href="#">Trousers</a></li>
							</ul>
				</div>
			 	
                <div class="dropdown" style="position:absolute; left:60%;top:0%; width:20%;">
                        <button type="button" class="btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" style="position:absolute; left:0%;top:0%; width:100%;">
	                    TOP BRANDS <span class="caret"></button>
						    <ul class="dropdown-menu" role="menu">
							     <li> <a href="#">PUMA</a></li>
								 <li><a href="#">ADIDAS</a></li>
								 <li><a href="#">NIKE</a></li>
								 <li><a href="#">KINGSTON</a></li>
								 <li><a href="#">JOYOUS</a></li>
							</ul>
				</div>
			 
                <div class="dropdown" style="position:absolute; left:80%;top:0%; width:20%;">
                        <button type="button" class="btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" style="position:absolute; left:0%;top:0%; width:100%;">
	                    DISCOUNTS <span class="caret"></button>
						    <ul class="dropdown-menu" role="menu">
							     <li> <a href="#">BUY1 GET1</a></li>
								 <li><a href="#">BUY2 GET1</a></li>
								 <li><a href="#">MIN 30%</a></li>
								 <li><a href="#">MIN 40%</a></li>
								 <li><a href="#">MIN 50%</a></li>
							</ul>
				</div>
				
                
		        
		    </div>
        </div>
		<!-- This is our content beginning-->
        <div class="row visible-sm visible-xs visible-md visible-lg " style="height:97%;">
		    <!--This is the design of our block for tablet and mobile-->
	        <div class="col-xs-12 col-sm-12 visible-sm visible-xs " style="height:10%;
	        border-bottom:4px solid blue;">
	            <h3 style="text-align:center;"> Fashion & lifestyle</h3>
                <img src="Resources/men1.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%; border:3px dashed black; " />
	        </div>
			<!--This is the design of our block for laptops-->
	        <div class=" visible-md visible-lg col-md-6 col-lg-6" style="height:20%;
	        border-bottom:4px solid blue;">
	            <h3 style="text-align:center;"> Fashion & lifestyle</h3>
                <img src="Resources/men1.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%; border:3px dashed black; " />
	        </div>
	         <!--This is the design of our block for tablet and mobile-->
	        <div class="col-xs-12 col-sm-12 visible-sm visible-xs " style="border-bottom:4px solid blue;text-align:center;height:10%;">
	            <h3 style="text-align:center;"> Mobile & Tablets</h3>
                <img src="Resources/mobile.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
			<!--This is the design of our block for laptops-->
	        <div class=" visible-md visible-lg col-md-6 col-lg-6" style="border-bottom:4px solid blue;text-align:center;height:20%;">
	            <h3 style="text-align:center;"> Mobile & Tablets</h3>
                <img src="Resources/tab.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
	         <!--This is the design of our block for tablet and mobile-->
	        <div class="col-xs-12 col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	             <h3 style="text-align:center;"> Electronic & Accessories</h3>
                 <img src="Resources/electronic.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:40%;border:3px dashed black; " />
	        </div>
			<!--This is the design of our block for laptops-->
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	             <h3 style="text-align:center;"> Electronic & Accessories</h3>
                 <img src="Resources/electronic.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
	
	        <div class="col-xs-12 col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	             <h3 style="text-align:center;"> TV & Appliances</h3>
                 <img src="Resources/tv.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	             <h3 style="text-align:center;"> TV & Appliances</h3>
                 <img src="Resources/tv.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	
	        <div class="col-xs-12  col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	             <h3 style="text-align:center;"> Home & Furniture</h3>
                 <img src="Resources/home.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	            <h3 style="text-align:center;"> Home & Furniture</h3>
                <img src="Resources/home.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
	
	        <div class="col-xs-12  col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	             <h3 style="text-align:center;"> Electronics</h3>
                 <img src="Resources/elec.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	            <h3 style="text-align:center;"> Electronics</h3>
                <img src="Resources/elec.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	
	        <div class="col-xs-12  col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	            <h3 style="text-align:center;"> Household</h3>
                <img src="Resources/household.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	             <h3 style="text-align:center;"> Household</h3>
                 <img src="Resources/household.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
	
	        <div class="col-xs-12  col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	             <h3 style="text-align:center;"> Appliances</h3>
                 <img src="Resources/app.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
	        <div class=" visible-md visible-lg col-md-6 col-lg-6"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	             <h3 style="text-align:center;"> Appliances</h3>
                 <img src="Resources/app.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
			<!--This is the design of our block for tablet and mobile-->
	 
	        <div class="col-xs-12  col-sm-12 visible-sm visible-xs "style="border-bottom:4px solid blue;text-align:center;height:10%;">
	            <h3 style="text-align:center;"> Electricals</h3>
                <img src="Resources/electrical.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:70%;border:3px dashed black; " />
	        </div>
			<!--This is the design of our block for laptops-->
	        <div class=" visible-md visible-lg col-md-12 col-lg-12"style="border-bottom:4px solid blue;text-align:center;height:20%;">
	             <h3 style="text-align:center;"> Electricals</h3>
                 <img src="Resources/electrical.jpg"  style="display: block;margin: 0 auto; border-radius:50%;max-height:80%;border:3px dashed black; " />
	        </div>
	        <!-- This is the end block of the website consisting info of details-->
	        <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 visible-sm visible-xs visible-md visible-lg"style="background:url(Resources/faishion.png);text-align:center;height:30%;">
	            <img src="Resources/leaf.jpg" style="position:absolute;left:0%;top:1%;max-height:10%; border-radius:50%;"/>
	            <h4 style="position:absolute;left:10%;top:1%;font-family:fantasy;font-size:125%;">fashionara</h4>
	            <img src="Resources/fb.png" style="position:absolute;left:80%;top:1%;max-height:10%; border-radius:50%;"/>
	            <img src="Resources/gmail.jpg" style="position:absolute;left:90%;top:1%;max-height:10%; border-radius:50%;"/>
	            </br>
	            <button type="button" class="btn-lg btn-link" style="color:black;margin-bottom:2%;">ABOUT US</button>  
	            </br>
	           <button type="button" class="btn-lg btn-link"style="color:black;margin-bottom:2%;" >Tems & Conditions Of Use</button>  
	             </br>
	            <button type="button" class="btn-lg btn-link"style="color:black;margin-bottom:2%;" >Offer Terms & Conditions</button>  
	            </br>
	            <button type="button" class="btn-lg btn-link"style="color:black;margin-bottom:2%;" >Returns &Exchange Policy</button>  
	            </br>
	           <button type="button" class="btn-lg btn-link" style="color:black;margin-bottom:2%;">Shipping Policy</button>  
	            </br>
	           <button type="button" class="btn-lg btn-link" style="color:black;margin-bottom:2%;">Privacy Policy</button> 
			    </br>
                <button type="button" class="btn-lg btn-link" style="color:black;margin-bottom:2%;">OUR TEAM</button>			   
	            </br>
	         
	           
        </div>
     </div> 
	 <script src="jquery.js"></script>
     <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>