<?php
    $username="";
    $usernameErr="";
    $password="";
    $passwordErr="";
    $hasErr=false;

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

        if( empty($_POST["password"]) )
        {
            $passwordErr="Field Is Required";
        }
        elseif(strlen($_POST["password"])<4)
        {
            $hasErr=true;
            $passwordErr="Password must be greeter then 4";
        }
        else
        {
            $password=$_POST['password'];
        }

        if($hasErr==false)
        {
            
        }
    }
?>