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
$loginerr="";
$x=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$db = mysqli_connect('localhost','root','','customerdetail')
 or die('Error connecting to MySQL server.');
 $query = "SELECT * FROM table_cd";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
	if( $_POST['email']==$row['Email']){
		$x++;
		$_SESSION['Name']=$row['Name'];
		$_SESSION['Address']=$row['Address'];
		$_SESSION['Username']=$row['Username'];
		$_SESSION['Email']=$row['Email'];
	}
}	
    if($x==1)
		$loginerr=$_SESSION['Name']."login successful!<a href='fashionhara.php'>Please click on the link </a>";
	else
		$loginerr="*login failed!need to register";
}

?> 

   <div class="containerfluid bg">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                 <!-- form start -->
                <form class="formcontainer" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1> Login Faishionhara</h1>
                    <div class="form-group">
                          <label for="exampleInputEmail1">Username </label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username">
                    </div>
                   <div class="form-group">
                         <label for="exampleInputPassword1">Email</label>
                         <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
                   </div>
                    <label>
                    <input type="checkbox"> Remember me
                    </label>
	                <br/>
                   <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </br>
                  <a class="btn btn-success btn-block" href="registerform.php">Register</a>
                   <span  class="error" style="color:red;"> <?php echo $loginerr;?></span>
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