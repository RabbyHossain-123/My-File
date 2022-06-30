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
                        <input type="text" name="search" placeholder="Search Oder ID">
                        <button onclick="../search/searchevent.php">Search</button>
                    </td>
                </tr>
                </table>
                
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
                                            <h5>Tamim</h5>
                                            <p>Mirpur-2</p>
                                            <P>Payment Method: <span>Bkash</span></P>
                                            <P>Date: <span>12/12/2021</span></P>
                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Shundarban 7</h5>
                                            <strong>Non AC</strong>
                                            <P>Starting Point: <span>Dhaka</span></P>
                                            <P>End Point: <span>Barisal</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>DEPARTURE TIME</h5><br>
                                            <strong><span>7:30</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>ARRIVAL TIME</h5><br>
                                            <strong><span>8:55 AM</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>CABIN AVAILABLE</h5><br>
                                            <strong><span>26</span></strong>
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
                                        <button onclick="../editpage/editbooking.php">Edit</button> <br><br>
                                            <button onclick="../editpage/deletebooking.php">Delete</button>
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
                                    <img src="../image/sb.png" alt="bb logo" style="width:50px;height:50px;">
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>Saibul</h5>
                                            <p>Dhanmondi</p>
                                            <P>Payment Method: <span>Bkash</span></P>
                                            <P>Date: <span>06/11/2021</span></P>
                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>AK TRAVELS</h5>
                                            <p>1. DHK-BSL</p>
                                            <strong>Non AC</strong>
                                            <P>Starting Point: <span>Technical</span></P>
                                            <P>End Point: <span> Barisal Terminal</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>DEPARTURE TIME</h5><br>
                                            <strong><span>6:30</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>ARRIVAL TIME</h5><br>
                                            <strong><span>7:55 AM</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>SEATS AVAILABLE</h5><br>
                                            <strong><span>35</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h3>৳150.00</h3>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                        <button onclick="../editpage/editbooking.php">Edit</button> <br><br>
                                            <button onclick="../editpage/deletebooking.php">Delete</button>
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
                                            <h5>Adety</h5>
                                            <p>Quatar</p>
                                            <P>Payment Method: <span>Bkash</span></P>
                                            <P>Date: <span>09/06/2021</span></P>
                                        </dl>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <dl>
                                            <h5>BIMAN</h5>
                                            <p>1. DHK-BSL</p>
                                            <P>Starting Point: <span>Dhaka</span></P>
                                            <P>End Point: <span>Barisal</span></P>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>DEPARTURE TIME</h5><br>
                                            <strong><span>3:30 PM</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>ARRIVAL TIME</h5><br>
                                            <strong><span>11:55 AM</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul>
                                        <dl>
                                            <h5>SEATS AVAILABLE</h5><br>
                                            <strong><span>26</span></strong>
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
                                            <button onclick="../editpage/editbooking.php">Edit</button> <br><br>
                                            <button onclick="../editpage/deletebooking.php">Delete</button>
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
                    <fieldset style="margin-top: 25px;" >
                        <div>
                            <center>
                                <span class="credit">Created By <a href="">Rabby</a> | </span>
                                <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                            </center>
                        </div>
                    </fieldset>
                </footer>
        </main1>

    </body>

    </html>

    <?php
	}else{
		header('location: ../controller/login.php');
	}
?>