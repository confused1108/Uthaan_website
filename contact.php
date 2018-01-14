<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uthaan | Contact us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

    <!-- For-Mobile-Apps-and-Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classy Contact Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps-and-Meta-Tags -->
</head>
<body>
<div class="container">
    <br><br><br><br><br>
    <div class="left-w3">
        <h2>Contact Us!</h2>
        <form action="admin/files/send_message.php" method="post">
            <div class="agile1">
                <h3>Name</h3>
                <input type="text" name="name" class="name" placeholder="" required="">
            </div>
            <div class="agile1">
                <h3>Phone Number</h3>
                <input type="text" name="number" class="telephone" placeholder="" required="">
            </div>
            <div class="agile1">
                <h3>Email</h3>
                <input type="text" name="email" class="email" placeholder="" required="">
            </div>
            <div class="agile1">
                <h3>Message</h3>
                <textarea  name="message" placeholder=""  required=""></textarea>
            </div>
            <input type="submit" value="Send Message">
        </form>
    </div>
    <div class="right-w3ls">
        <h3 class="w3ls">Our Location</h3>
        <div class="agile1">
            <h3>Reach Us</h3>
            <div class="map">
                <iframe src="https://maps.google.com/maps?q=ABV-IIITM&t=&z=14&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<br><br><br><br>
</body>
</html>