<?php 
	session_start();

	if(isset($_POST['login'])){

		$username 	= $_POST['user_name'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: ../view/admin.php');
					}
				}
				echo "invalid username....";
			}
      else{
				echo "invalid password....";
			}
		}
    else{
			echo "write username and password......";
		}
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style>
    a {
      color: black;
    }
  </style>
</head>

<body>

  <div>
	  <center>
	<fieldset style="width: 30%" >
	  <form method="POST">
      <legend><h1>Login</h1></legend>
      <div>
        <input type="text" name="user_name" placeholder="user name"> <br><br>
      </div>
      <div>
        <input type="password" name="password" placeholder="password"><br><br>
      </div>
      <input type="submit" name="login" value="Log-in"> <br><br>
      <a href="signup.php">Sign-up</a>
    </form>
	</fieldset>
	  </center>
  </div>
</body>
</html>