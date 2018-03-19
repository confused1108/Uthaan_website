<html>
<head>

    <link href='css/navbar.css' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster+Two:700,700italic' rel='stylesheet' type='text/css'>
    <script>
        //fade in-out the page
        $(document).ready(function(){
            $(".fd_pg").click(function(){
                $("html").fadeOut().fadeIn()
            });
        });
        //Hamburger menu
        function myFunction() {
            document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
        }
    </script>
</head>
<body>



    <div class="nav" id="top" style="position:fixed;">
        <ul class="topnav">
            <div class="left_logo" style=" background-color: transparent;"></div>

            <li><a class="fd_pg" href="index.php" >Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Shows</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="interviews.php">Interviews</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="admin/index.php">Admin</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
        </ul>
    </div>
</body>
</html>
