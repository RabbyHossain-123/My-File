/* <?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?> */

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../model/home.css">
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

                                <td><a class="logo" href="../page/admin.php"><img src="../asset/image/logo.png" alt="logo"
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
                                    <fieldset style="width:100px; float:right; margin-left:620px;"><a
                                            href="../controller/logout.php" style="text-decoration:none"><big><i
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
                <table style="width:95%; margin:35px; margin-top: 10px;" >
                    <tr>
                        <td>
                            <fieldset> Todays Sale <br> 8000/-</fieldset>
                        </td>
                        <td>
                            <fieldset> This Week <br> 50000/-</fieldset>
                        </td>
                        <td>
                            <fieldset> This Month <br> 100000/-</fieldset>
                        </td>
                        <td>
                            <fieldset> This Year <br> 200000/-</fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <fieldset style ="margin-top:30px;"> AVAIABLE MENU <br> 50 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > DELIVERY MAN <br> 10 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > TOTAL FOOD <br> 80 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > TOTAL ORDER <br> 15 </fieldset>
                        </td>
                    </tr>
                    <tr>
                    <td >
                            <fieldset style ="margin-top:30px;"> TOTAL PAYMENT <br> 500 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > TOTAL DELIVERY PAYMENT <br> 150 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > CANCELLED ORDER <br> 5 </fieldset>
                        </td>
                        <td>
                            <fieldset style ="margin-top:30px;" > TOTAL REVIEW <br> 200 </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <img src="../image/chart.png" alt="chart" >
                        </td>
                        <td >
                            <img src="../image/chart2.png" alt="chart" style="width:320px;height:240px;">
                        </td>
                    </tr>
                   
                </table>
                <!-- right bar end-->

                <!-- admin panel END-->
                <footer>
                    <fieldset>
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

    /* <?php
	}else{
		header('location: ../controller/login.php');
	}
?> */