<?php
error_reporting();
include('config.php');
// fetching admin email where mail will send
$sql ="SELECT emailId from tblemail";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0):
foreach($results as $result):
$adminemail=$result->emailId;
endforeach;
endif;
if(isset($_POST['submit']))
{
// getting Post values	
$name=$_POST['name'];
$phoneno=$_POST['phonenumber'];
$email=$_POST['emailaddres'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$uip = $_SERVER ['REMOTE_ADDR'];
$uid="TXN";
$txnn=rand(10000000,99999999);
$txn=$uid.$txnn;
$amount=1;
$isread=0;
// Insert quaery
$sql="INSERT INTO  tblcontactdata(FullName,PhoneNumber,EmailId,Subject,Message,UserIp,amount,txnid,Is_Read) VALUES(:fname,:phone,:email,:subject,:message,:uip,:amount,:txn,:isread)";
$query = $dbh->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phoneno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':uip',$uip,PDO::PARAM_STR);
$query->bindParam(':txn',$txn,PDO::PARAM_STR);
$query->bindParam(':amount',$amount,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
//mail function for sending mail
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
  echo "<script>window.location.href='index.php'</script>";
}


}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Uniform Request</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style type="text/css">
	select {
    padding: .8em 4em .8em 1em;
    width: 80%;
    margin-bottom: 1em;
    border: 1px solid#CECCCC;
    outline: none;
    color: #555;
}
.login-form input[type="number"] {
    padding: .8em 4em .8em 1em;
    width: 80%;
    margin-bottom: 1em;
    border: 1px solid#CECCCC;
    outline: none;
    color: #555;
}
</style>
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,600,700' rel='stylesheet' type='text/css'>
<!--web-fonts-->
</head>
<body>
		<!---header--->
		<div class="header">
		  <div class="row">
		    <div class="col">
		      <img src="" width="100px">
		    </div>
		    <div class="col">
		      <h1>Contact form<br>
			Uniform Request Form</h1>
		    </div>
		  </div>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
				<div class="login-form">
					<h2>Please fill the form </h2>
					
						<span></span>
					<form name="ContactForm" method="post">

<h4>Your Name</h4>
<input type="text" name="name" class="user" placeholder="jhon M"  autocomplete="off" required>

<h4>Your Registration Number</h4>
<input type="number" name="phonenumber" class="phone" placeholder="000000000000" maxlength="10" required autocomplete="off">

<h4>Your Gender</h4>
<select name="emailaddres" class="email" id="email">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>

<h4>Your Department</h4>
<input type="text" name="subject" class="email" placeholder="Subject" autocomplete="off">

<h4>Your Size</h4>
<select name="message" id="message">
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XXL">XXL</option>
  <option value="XXXL">XXXL</option>
</select>
<input type="submit" value="Pay for Uniform (3600 Rs.)" name="submit">
</form>
				
				</div>
				</div>
			</div>

		<!---main--->
</body>
</html>