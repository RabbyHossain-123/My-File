<?php
    $username="";
    $usernameErr="";
    $password="";
    $passwordErr="";
    $name="";
    $nameErr="";
    $email="";
    $emailErr="";
    $hasErr=false;

    function checkMail($email)
    {
        $len=strlen($email);
		for($i=0;$i<$len;$i++)
		{
			if($email[$i]=='@')
			{
				return true;
			}
		}
        return false;
    }

    if( isset($_POST['submit']) )
    {
        if( empty($_POST["username"]) )
        {
            $hasErr=true;
            $usernameErr="Field Is Required";
        }
        elseif(strlen($_POST['username'])<4)
        {
            $hasErr=true;
            $usernameErr="Username must be greater then 4";
        }
        else
        {   
            $username=$_POST['username'];
        }

        if( empty($_POST["pass"]) )
        {
            $passwordErr="Field Is Required";
        }
        elseif(strlen($_POST["pass"])<4)
        {
            $hasErr=true;
            $passwordErr="Password must be greeter then 4";
        }
        else
        {
            $password=$_POST['pass'];
        }

        if( empty($_POST["name"]) )
        {
            $nameErr="Field Is Required";
        }
        elseif(strlen($_POST["name"])<4)
        {
            $hasErr=true;
            $nameErr=" Name must be greater then 4";
        }
        else
        {
            $name=$_POST['name'];
        }

        if( empty($_POST["email"]) )
        {
            $emailErr="Field Is Required";
        }
        elseif(checkMail($_POST['email'])==false)
        {
            $hasErr=true;
            $emailErr="Invalid Email";
        }
        else
        {
            $email=$_POST['email'];
        }

        if($hasErr==false)
        {
            
        }
    }
?>