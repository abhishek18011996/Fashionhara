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
$registererr="";
$x=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$db = mysqli_connect('localhost','root','','customerdetail')
 or die('Error connecting to MySQL server.');
 $query = "SELECT * FROM table_cd";
mysqli_query($db, $query) or die('Error querying1 database.');
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
	if( $email==$row['Email'])
		$x++;
}
	 if($x==1)
		 $registererr="registration failed!email id already exists";
	 else{
 $query2 ="INSERT INTO table_cd (Email, Name, Address, Username) VALUES ('$email', '$name', '$address', '$username')";
mysqli_query($db, $query2) or die('Error querying2 database.');
$result = mysqli_query($db, $query2);
$registererr="registration successful!!<a href='transparentloginform.php'>click on link </a>";
	 }
}
?>
     <div class="containerfluid bg">
          <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                   <!-- form start -->
                        <form class="formcontainer2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                              <h1> Register Faishionhara</h1>
                              <div class="form-group">
                                     <label for="exampleInputEmail1">Name </label>
                                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
                              </div>
                             <div class="form-group">
                                   <label for="exampleInputPassword1">Address</label>
                                   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" name="address">
                             </div>
                             <div class="form-group">
                                   <label for="exampleInputPassword1">Username</label>
                                   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username">
                             </div>
                             <div class="form-group">
                                     <label for="exampleInputPassword1">Email</label>
                                     <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
                             </div>
                                  </br>
                                <button type="submit" class="btn btn-success btn-block">Register</button>
                                <span  class="error" style="color:red;"> <?php echo $registererr;?></span>
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
