<?php 
require("../controller/Registration.php")
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration for Seller</title>
    <script src="../Assets/JS/Reg_form.js"></script>
</head>

<body>
    <table align="center" width="900px" border="1">
        <tr>
            <td align="left" colspan="3">
                <img width=20% src=../Assets/logo.jpeg>
                <div align="right">
                    <a href="../View/home.html">Home &nbsp</a>
                    <a href="../View/Login.php" target="_blank">Login &nbsp</a>
                    <a href="../View/Registration.html" target="_blank">Registration &nbsp</a>
                    <a href="../View/Contact_us.html" target="_blank">Contact Us</a>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" height="400px">
                <fieldset>
                    <legend>Registration</legend>
                    <form name="Reg_form" method="post" action="" >
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="name" value="<?php echo $name ?>" autocomplete="off"></td>
                                <td><?php echo $nameErr ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" value="<?php echo $email ?>"></td>
                                <td><?php echo $emailErr ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" name="user_name" value="<?php echo $username ?>" autocomplete="off"></td>
                                <td><?php echo $usernameErr ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" value="<?php echo $password ?>" autocomplete="off"></td>
                                <td><?php echo $passwordErr ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td><input type="password" name="confirm_password" value="" autocomplete="off"></td>
                                
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                        </table>
                        <fieldset>
                            <legend>Role</legend>
                            <table>
                                <tr>

                                    <td><input type="radio" name="radio" value="Seller">Seller</td>
                                    <td><input type="radio" name="radio" value="Customer">Customer</td>
                                    <td><input type="radio" name="radio" value="Delivery Boy">Delivery boy</td>
                                    <td><input type="radio" name="radio" value="Delivery Manager">Delivery Manager</td>

                                </tr>

                            </table>

                        </fieldset>
                        <div>
                            <hr>
                        </div>


                        <div align="left">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" height="50px">
                <p>copyright @ 2022</p>
            </td>
        </tr>
    </table>
</body>

</html>