<?php 

//error empty
$Error = "";
$usernameError = $emailError = $genderError =  "";
$passError = $cpassError = "";
$gender =  "";

	if(isset($_POST['submit'])){

		$username 	= $_POST['user_name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
    $Confirm_Password = $_POST['cpassword'];

    $uname = $_REQUEST['user_name'];
    $Email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    // Username Validation
  if (empty($_POST["user_name"])) {
    $usernameError = "Username is Required";
      } else {
          $Username = validateInput($_POST["user_name"]);
          if (((!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $Username))) && (strlen($_POST["user_name"]) < 2)) {
              $usernameError = "only alphanumeric characters / at least 2 characters";
          }
      }
    // Email Validation
    if (empty($_POST["email"])) {
      $emailError = "Email is required";
        } 
        else {
            $Email = validateInput($_POST["email"]);
            $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid Email Format";
            }
        }
  
  // Password Validation
  if (empty($_POST["password"])) {
      $passError = "Password is Required";
      } else {
          if (strlen(($_POST["password"])) < 8) {
              $passError = "At least 8 character needed";
          } else {
              if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
      $passError = "At least one special character needed";
          }
        }
      }
  // Confirm Password Validation
  if (empty($_POST["cpassword"])) {
      $cpassError = "Confirm Password cannot be empty";
      } else {
      if (($_POST["password"]) != ($_POST["cpassword"])) {
      $cpassError = "Password does not match";
      }
    }
    // Gender Validation
    if (empty($_POST["gender"])) {
      $genderError = "Gender Required";
  } else {
      $gender = validateInput($_POST["gender"]);
  }


        //File Validation

   if ($emailError == "" && $usernameError == "" && $passError == "" && $cpassError == "" && $genderError == "" ) {
    $myfile = fopen('user.txt', 'a');
    $myuser = $username."|".$password."|".$email."|".$gender."\r\n";
    fwrite($myfile, $myuser);
    //image upload
    $des = "../asset/image/".$_FILES["myfile"]["name"];
    $src = $_FILES["myfile"]["tmp_name"];
      //validate upload
          if(move_uploaded_file($src, $des)){
             header('location: login.php');
          }
    }

  }
  
  function validateInput($information)
{
    $information = trim($information);
    $information = stripslashes($information);
    $information = htmlspecialchars($information);
    return $information;
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
      <fieldset style="width: 50%">
        <form method="POST" enctype="multipart/form-data">
            <legend>
              <h1>Sign Up</h1><br><br>
            </legend>
            <div>
              <label><strong>User Name</strong></label><br>
              <input type="text" name="user_name" placeholder="user name" value="<?php if(isset($uname)){ echo $uname; }?>"/> <br>
              <span style="color: red;">
              <?php
                if ($usernameError != "") {
                    echo "* " . $usernameError;
                }
                ?>
                </span><br><br>
            </div>
            <div>
              <label><strong>Password</strong></label><br>
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="password" value="<?php if(isset($pass)){ echo $pass; }?>"/> <br>
              <span style="color: red;">
              <?php
                if ($passError != "") {
                    echo "* " . $passError;
                }
                ?>
                </span><br><br>
            </div>
            <div>
              <label><strong>Confirm Password</strong></label><br>
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="password"><br>
              <span style="color: red;">
              <?php
                if ($cpassError != "") {
                    echo "* " . $cpassError;
                }
                ?>
                </span><br><br>
            </div>
            <div>
              <label><strong>Email</strong></label><br>
              <i class="fas fa-phone"></i>
              <input type="email" name="email" placeholder="Email"value="<?php if(isset($Email)){ echo $Email; }?>"/> <br>
              <span style="color: red;">
              <?php
                if ($emailError != "") {
                    echo "* " . $emailError;
                }
                ?>
                </span><br><br>
            </div>

            <div>
              <i class="fas fa-venus-mars"></i>
              <label><strong>Gender</strong></label>
              <input type="radio" id="gender" name="gender" value="Male"> Male
              <input type="radio" id="gender" name="gender" value="Female"> Female
              <input type="radio" id="gender" name="gender" value="Other"> Other <br>
              <span style="color: red;">
              <?php
                if ($genderError != "") {
                    echo "* " . $genderError;
                }
                ?>
                </span><br><br>
            </div>

            <div>
              <br><label><strong>Profile Picture</strong></label><br><br>
              IMG: <input type="file" name="myfile" /><br><br>
            </div>
            <input type="submit" class="btn" name="submit" value="Signup"> <br><br>
            <a href="login.php">Login</a>
          
        </form>
        </fieldset>
      </center>
    </div>
  </body>

  </html>