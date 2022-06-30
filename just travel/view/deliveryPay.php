<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/home.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <title>Admin</title>
    </head>

    <body>

        <header>
            <!-- Navigation Bar -->
            <div>
                <nav>
                    <fieldset>
                        <table>
                            <tr>
                                <td><a class="logo" href="../page/admin.php"><img src="../image/logo.png" alt="logo"
                                            height="50px"></a> </td>
                                <td> <a href="#bus" style="text-decoration:none; margin-left:20px;"><big><i
                                                class="fas fa-bus"></i>&nbsp;Bus</big></a></td>
                                <td><a href="#launch" style="text-decoration:none; margin-left:20px;"><big><i
                                                class="fas fa-ship"></i>&nbsp;Launch</big></a></td>
                                <td><a href="#air" style="text-decoration:none; margin-left:20px;"><big><i
                                                class="fas fa-plane"></i>&nbsp;Air</big></a></td>
                                <td><a href="#event" style="text-decoration:none; margin-left:20px;"><big><i
                                                class="far fa-calendar-alt"></i>&nbsp;Events</big></a></td>
                                <td><a href="#places" style="text-decoration:none; margin-left:20px;"><big><i
                                                class="fas fa-globe-asia"></i>&nbsp;Places</big></a></td>
                                <td>
                                    <fieldset style="width:100px; float:left; margin-left:620px;"><a
                                            href="../log/logout.php" style="text-decoration:none"><big><i
                                                    class="fas fa-user-plus"></i>Logout</big></a></fieldset>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </nav>
            </div>
        </header>

        <!-- admin panel -->

        <main1>
            <!-- side bar -->
            <div class="sidenav"> <br>
                <a href="admin.php">Stats</a> <br>
                <a href="user.php">User</a> <br>
                <a href="hotel.php">Menu</a> <br>
                <a href="booking.php">Order Info</a> <br>
                <a href="userPay.php">Order Payment</a> <br>
                <a href="merPay.php">Delivery man Payment</a>
            </div>
            <!-- side bar end -->

            <!-- right bar -->
            <div class="main">
                <table style="width:100%; margin:35px; margin-top: 10px;">
                    <tr>
                        <td>
                            <input type="text" name="search" placeholder="Payment ID">
                            <button onclick="../search/searchevent.php">Search</button>
                        </td>
                    </tr>
                </table>

                <fieldset style="width:90%; margin:0 auto; margin-top: 25px;">
                    <table style="width:100%; margin:0 auto; margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../image/ub.png" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Shundarban</h5>

                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Mirpur 2</h5>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Payment Method: <span>Bkash</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Acc: No. <span>01779174188</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳2650.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <select name="status" id="">
                                                <option value="unapp">disapprove</option>
                                                <option value="saab">Approved</option>
                                            </select> <br><br>
                                            <button onclick="document.location='payment.php'">Pay Now</button>
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>

                <fieldset style="width:90%; margin:0 auto; margin-top: 25px;">
                    <table style="width:100%; margin:0 auto; margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../image/bb.png" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Torongo</h5>

                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Mirpur 2</h5>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Payment Method: <span>Bkash</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Acc: No. <span>01779174188</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳2650.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <select name="status" id="">
                                                <option value="unapp">disapprove</option>
                                                <option value="saab">Approved</option>
                                            </select> <br><br>
                                            <button onclick="document.location='payment.php'">Pay Now</button>
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>

                <fieldset style="width:90%; margin:0 auto; margin-top: 25px;">
                    <table style="width:100%; margin:0 auto; margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../image/l3.png" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Shundarban</h5>
                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Mirpur 2</h5>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Payment Method: <span>Bkash</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Acc: No. <span>01779174188</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳2650.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <select name="status" id="">
                                                <option value="unapp">disapprove</option>
                                                <option value="saab">Approved</option>
                                            </select> <br><br>
                                            <button onclick="document.location='payment.php'">Pay Now</button>
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>

                <fieldset style="width:90%; margin:0 auto; margin-top: 25px;">
                    <table style="width:100%; margin:0 auto; margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../image/163455627.webp" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Shundarban</h5>

                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Mirpur 2</h5>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Payment Method: <span>Bkash</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Acc: No. <span>01779174188</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳2650.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <select name="status" id="">
                                                <option value="unapp">disapprove</option>
                                                <option value="saab">Approved</option>
                                            </select> <br><br>
                                            <button onclick="document.location='payment.php'">Pay Now</button>
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>

                <fieldset style="width:90%; margin:0 auto; margin-top: 25px;">
                    <table style="width:100%; margin:0 auto; margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../image/l1.jfif" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Shundarban</h5>

                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Mirpur 2</h5>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Payment Method: <span>Bkash</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <P>Acc: No. <span>01779174188</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳2650.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <select name="status" id="">
                                                <option value="unapp">disapprove</option>
                                                <option value="saab">Approved</option>
                                            </select> <br><br>
                                            <button onclick="document.location='payment.php'">Pay Now</button>
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <!-- right bar end-->

                <!-- admin panel END-->
                <footer>
                    <fieldset>
                        <div>
                            <center>
                                <span class="credit">Created By <a href="">Tamim</a> | </span>
                                <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
                            </center>
                        </div>
                    </fieldset>
                </footer>
        </main1>

    </body>

    </html>

    <?php
	}else{
		header('location: ../log/login.php');
	}
?>