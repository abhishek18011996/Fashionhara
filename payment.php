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
   
    <title>transparent login form</title>
 
    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet" type="text/css"/>
	
 
  </head>
  <body>
  <?php
$confirmerr="";
$x=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_SESSION['Name'];
	$username=$_SESSION['Username'];
	$address=$_SESSION['Address'];
	$email=$_SESSION['Email'];
	$product=$_POST["product"];
	$db = mysqli_connect('localhost','root','','customerorder2')
 or die('Error connecting to MySQL server.');
 
 $query2 ="INSERT INTO table_co2(Name,Email,Address, Product) VALUES ('$name', '$email', '$address','$product')";
$result = mysqli_query($db, $query2);
$confirmerr="product successful!!<a href='faishionhara.php'>click on link to shop </a>";

}
?>
 <div class="containerfluid bg">
      <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-md-4 col-sm-4 col-xs-12">
               <!-- form start -->
               <form class="formcontainer2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1> Payment Faishionhara</h1>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Name </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION["Name"]; ?>" name="name">
                 </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION["Address"]; ?>" name="address">
               </div>
               <div class="form-group">
                   <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION["Username"]; ?> " name="username">
                </div>
               <div class="form-group">
                       <label for="exampleInputPassword1">Email</label>
                       <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION["Email"]; ?> " name="email">
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Product Code</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product Name" name="product">
               </div>
                </br>
               <button type="submit" class="btn btn-success btn-block">Confirm</button>
              <span  class="error" style="color:red;"> <?php echo $confirmerr;?></span>
             </form>
               <!-- form  end -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12"></div>
         </div>
     </div>
        <script src="jquery.js"></script>
       <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
