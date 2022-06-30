<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
    if(isset($_POST['pay'])){
      header('location: ./merPay.php');
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign-up</title>
  <style>
    a {
      color: black;
    }
  </style>
</head>

<body>
  <div>
    <center>
    <form method="POST" >
      <h1>Send Payment</h1>
      <div>
        <input type="text" name="user_name" placeholder="Merchant Name"><br><br>
      </div>
      <div>
        <i class="fas fa-lock"></i>
        <input type="text" name="acc_name" placeholder="Acc: Number"><br><br>
      </div>
      <div>
        <i class="fas fa-phone"></i>
        <input type="text" name="bankname" placeholder="Bank Name"><br><br>
      </div>
      <div>
      <input type="text" name="routing" placeholder="Routing Number"><br><br>
      </div>
      <input type="submit" name="pay" value="Pay Now"> <br><br>
    </form>
    </center>
  </div>
</body>

</html>

<?php
	}else{
		header('location: ../log/login.php');
	}
?>