<?php
include 'admin/files/connect.php';
include 'navbar.php';
?>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='icon.ico' rel='icon' type='image/x-icon'/>
    <meta name="keywords" content="uthaan,uthan,iiitmg,abv-iiitmg,club of ABV-IIITM,journalism club,utan,utaan,be my guest,uthaaan,interview,Pictionary,ABV-IIITM">
    <meta name="description" content="Uthaan is journalism and recreational forum of ABV-IIITMG. This forum has been formed in order to enable all round development of the students in all facets of life. We are the eyes and ears of the institute, when it comes to any event occurring inside it, We cover the events through all forms of media.">
    <meta name="author" content="Hitesh Ahuja">
    <meta property="og:image" content="http://example.com/logo.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:description" content="Uthaan is journalism and recreational forum of ABV-IIITMG."/>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>
        Uthaan | Welcome to Uthaan
    </title>
    <link href='css/carousels.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <script src="js/owl.carousel.min.js"></script>
<style>
    .owl-carousel .item {
        width:280px;
        height:300px;
        position: relative;
        z-index: 100;
        -webkit-backface-visibility: hidden;
        margin: auto;
    }
    .
</style>

</head>
<body style="background-color: #EBE3E0">


<!-- Modal code-->
<div style="position: fixed; margin-top: 20%; display: block; cursor: pointer;  z-index:1000">
    <a onclick="document.getElementById('id01').style.display='block'"><img src="images/upload.png" style="width: 50px; height: 150px;"></a>
</div>

<div id="id01" class="modal" onload="document.getElementById('id01').style.display='block'" style=" z-index:1000">

    <form class="modal-content animate">
        <div class="imgcontainer" style="height: 40px;" >
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h3 style="margin-top: 0; padding-top: 5px;">Updates</h3>
        </div>

        <!--Getting data from database and displaying -->
        <div class="container">
        <?php
        $query=mysqli_query($connection,"SELECT content FROM updates ORDER BY update_id DESC LIMIT 5");
        while($row = mysqli_fetch_array($query)){
            $update=$row['content'];
            echo " <p>".$update."</p> <hr>";
        }
        ?>
            <!------------------>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
<!--modal code ends-->


<div  style="padding: 0;margin: 0;">
    <ul id="slides" >
        <li class="slide showing"><h1><span>Welcome to Uthaan, ABV-IIITM Gwalior</span></h1></li>
        <li class="slide"><h1><span>To seek, to find and not to yield</span></h1></li>
        <li class="slide"><h1><span>Aim: To eliminate distance between seniors and juniors</span></h1></li>
        <li class="slide"><h1><span>Activities: Journalism, Writing, Photography, Technical</span></h1></li>
        <li class="slide"><h1><span>Not just a club, A family</span></h1></li>
    </ul>
</div>
<br>
<div>
    <div class="owl-carousel">
        <div class="item"><img src="images/slides/slide1.jpg"></div>
        <div class="item"><img src="images/slides/slide2.jpg"></div>
        <div class="item"><img src="images/slides/slide3.jpg"></div>
        <div class="item"><img src="images/slides/slide4.jpg"></div>
        <div class="item"><img src="images/slides/slide5.jpg"></div>
        <div class="item"><img src="images/slides/slide6.jpg"></div>
        <div class="item"><img src="images/slides/slide7.jpg"></div>
        <div class="item"><img src="images/slides/slide8.jpg"></div>
        <div class="item"><img src="images/slides/slide9.jpg"></div>
        <div class="item"><img src="images/slides/slide10.jpg"></div>
        <div class="item"><img src="images/slides/slide11.jpg"></div>
        <div class="item"><img src="images/slides/slide12.jpg"></div>
        <div class="item"><img src="images/slides/slide13.jpg"></div>
        <div class="item"><img src="images/slides/slide14.jpg"></div>
        <div class="item"><img src="images/slides/slide15.jpg"></div>
    </div>
</div>

<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-3">
            <img src="images/uthaansidebar.jpg" style="margin-left: auto; margin-right: auto; display: block">
        </div>

        <div class="col-md-7" style="margin-left: 5%">
            <img src="images/logo.png" style="width: 50%; height: 30%; margin-left: 25%">
            <h2 style="font-family: 'Raleway', sans-serif; text-align: left; font-weight: bold; " >About Uthaan</h2>

            <h4 style="font-family: 'Raleway', sans-serif; text-align: justify; color: #2e2e1f; line-height: 1.3" > <b>Uthaan</b>  is journalism and recreational forum of the institute, by the students for the students. This forum has been formed in order to enable all round development of the students in all facets of life. Our aim is to develop and nurture every sort of quality in the students. It is a forum which serves as a bridge between academics and student welfare. We are the eyes and ears of the institute, when it comes to any event occurring inside it, We cover the events through all forms of media. The forum has been divided into various departments for this very purpose. Under the aegis of Uthaan we also hold various competitions for the students to develop their skills.</h4>
                <br>
            <h2 style="font-family: 'Raleway', sans-serif; text-align: right; font-weight: bold; " >Director's Message</h2><br>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                <img src="images/director.jpg" style="border-radius: 50%; width: 65%; margin:auto" >
                </div>
                <div class="col-md-8">
                    <h4 style="font-family: 'Raleway', sans-serif; text-align: justify; color: #2e2e1f; line-height: 1.3" > I have seen <b>Uthaan</b> grow from a mere 4 members to 32 members. The success of Uthaan is a result of dedicated work of its student community.Uthaan is a wonderful platform for the students to showcase and nurtue their talents aside from academics.</h4>
                </div>
            </div>
                <br>
                <h2 style="font-family: 'Raleway', sans-serif; text-align: left; font-weight: bold; " >Faculty Co-ordinator's Message</h2><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 style="font-family: 'Raleway', sans-serif; text-align: justify; color: #2e2e1f; line-height: 1.3" >  <b>Uthaan</b> is a bridge between academics and students' welfare. It exposes the students to the outerworld by giving them a platform to interact with the players in professional fields.It is a forum that promotes all round development.</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/rajendra.jpg" style="border-radius: 50%; width: 65%; margin-left: auto; margin-right: auto" >
                        </div>
                    </div>
        </div>
            <br>
        </div>

    </div>
</div>
    <br>
    <div style="background-image: url('images/low.png');  border-top-right-radius: 10%; border-top-left-radius: 10%">
        <br>
        <h2 style="font-family: 'Raleway', sans-serif; text-align: center; color: white; font-weight: bold; " >Founders</h2><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/team/arpan.jpg" style="margin-left: auto; margin-right: auto; display: block">
                    <a href="https://www.facebook.com/arpan.jain.1405" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block " ></a>
                </div>
                <div class="col-md-4">
                    <img src="images/team/amandeep.jpg" style="margin-left: auto; margin-right: auto; display: block">
                    <a href="https://www.facebook.com/asr.jackson.9" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="col-md-4">
                    <img src="images/team/akshay.jpg" style="margin-left: auto; margin-right: auto; display: block">
                    <a href="https://www.facebook.com/akshaytheboss" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
            </div>
        </div>
        <br>
        <h2 style="font-family: 'Raleway', sans-serif; text-align: center; color: white; font-weight: bold; " >Core Team</h2><br>
        <div>
            <div class="owl-carousel">

                <div class="item">
                    <img src="images/team/prajval.jpg">
                    <a href="https://www.facebook.com/PrajvalGupta" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/angel.jpg">
                    <a href="https://www.facebook.com/angel.suryavanshi.7" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/vaibhav.jpg">
                    <a href="https://www.facebook.com/vaibhav.khandelwal.7777" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/saloni.jpg">
                    <a href="https://www.facebook.com/saloni.jain.94801" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/gaurav.jpg">
                    <a href="https://www.facebook.com/itsmegauravagarwal" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/deepak.jpg">
                    <a href="https://www.facebook.com/profile.php?id=100003788808946" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/sharad.jpg">
                    <a href="https://www.facebook.com/sharad.krishna.510" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/mahima.jpg">
                    <a href="https://www.facebook.com/mahima.gupta.121" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/prakhar_s.jpg">
                    <a href="https://www.facebook.com/prakhar.srivastava.50746" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/hardik.jpg">
                    <a href="https://www.facebook.com/hardik.khandelwal.167" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/raman.jpg">
                    <a href="https://www.facebook.com/smartlink27" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/shubham.jpg">
                    <a href="https://www.facebook.com/raman.prabhakar" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
            </div>
        </div>
        <br>
        <h2 style="font-family: 'Raleway', sans-serif; text-align: center; color: white; font-weight: bold; " >Mentors</h2><br>
        <div>
            <div class="owl-carousel">
                <div class="item">
                    <img src="images/team/ritika.jpg">
                    <a href="https://www.facebook.com/ritika.agarwal.121398" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/prakhar_b.jpg">
                    <a href="https://www.facebook.com/prakhar.bansal.501" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/hitesh.jpg">
                    <a href="https://www.facebook.com/call.me.Hits" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/ayushi.jpg">
                    <a href="https://www.facebook.com/ayushi.rastogi.311" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/surya.jpg">
                    <a href="https://www.facebook.com/surya.p.singh.351" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/nidhi.jpg">
                    <a href="https://www.facebook.com/nidhi.kesarwani.509" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/apurva.jpg">
                    <a href="https://www.facebook.com/apurva.srivastava.1998" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/daksh.jpg">
                    <a href="https://www.facebook.com/daksh.berry.5" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/riya.jpg">
                    <a href="https://www.facebook.com/KwL.RiYa" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/vishaka.jpg">
                    <a href="https://www.facebook.com/vishakha.gupta.188478" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/rishabh.jpg">
                    <a href="https://www.facebook.com/rishabh.patel.16100" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
                <div class="item">
                    <img src="images/team/rohit.jpg">
                    <a href="https://www.facebook.com/rohitvermajaipur" target="_blank"><img src="images/fb.png" style="width: 32px; height: 32px; margin-left: auto; margin-right: auto; display: block "></a>
                </div>
            </div>
        </div>
        <br>
        <br><br><br><br><br><br><br><br>
    </div>

</body>
<script>
    //main carousel
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,5000);

    function nextSlide(){
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    </script>
<script>

    $('.owl-carousel-2').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>

