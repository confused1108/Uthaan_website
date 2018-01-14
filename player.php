<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 01-Sep-17
 * Time: 12:01 AM
 */
include 'admin/files/connect.php';
include 'navbar.php';
$id=$_GET['id'];
$type=$_GET['type'];
?>
<html>
<head>
    <link rel="stylesheet" href="css/player.css">
</head>
<body>
<br><br>

<main class="site-content">
    <?php
    if($type=='1')
    {
        echo " <section class=\"video-area\">
        <div class=\"wrapper\">";
        $query=mysqli_query($connection,"SELECT * FROM shows WHERE show_id=$id LIMIT 1");
        while($row = mysqli_fetch_array($query)){
            $title=$row['heading'];
            $description=$row['description'];
            $link=$row['link'];
            $show_type=$row['show_type'];
            echo "<header class=\"video-header\">
                <h2 class=\"video-title\">$title</h2>
            </header>

            <div class=\"video-column\">
                <div class=\"video-player\">
                    <iframe  class=\"video\" id=\"video\"
                            src=\"$link\">
                    </iframe>
                </div>

                <div class=\"video-info\">
                    <div class=\"description\" style=\"color: #ffdb4d\">
                        <p>$description</p>
                    </div>
                </div>
            </div>";
        }
        echo " <div id=\"video-playlist\" class=\"video-playlist\">
                <header class=\"playlist-title\">You may also like...</header>";

        $query=mysqli_query($connection,"SELECT * FROM shows WHERE show_id!=$id LIMIT 3");
        while($row = mysqli_fetch_array($query)) {
            $title = $row['heading'];
            $description = $row['description'];
            $thumb=$row['thumbnail'];
            $show_id=$row['show_id'];
            echo " <a style=\"color:white; text-decoration: none; cursor: pointer\" href='player.php?id=$show_id&type=1' class=\"next-video\">
                    <img src=\"admin/uploads/shows/$thumb\" alt=\"\">
                    <h3 class=\"next-video-title\">$title</h3>
                    </a>
                <br>";
        }

        echo"</div>
        </div>
    </section>";
    }

    else if($type=='2')
    {
        echo " <section class=\"video-area\">
        <div class=\"wrapper\">";
        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE video_id=$id LIMIT 1");
        while($row = mysqli_fetch_array($query)){
            $title=$row['heading'];
            $description=$row['description'];
            $link=$row['link'];
            $editor=$row['editor'];
            echo "<header class=\"video-header\">
                <h2 class=\"video-title\">$title</h2>
            </header>

            <div class=\"video-column\">
                <div class=\"video-player\">
                    <iframe  class=\"video\" id=\"video\"
                            src=\"$link\">
                    </iframe>
                </div>

                <div class=\"video-info\">
                    <div class=\"description\" style=\"color: #ffdb4d\">
                        <p>$description</p>
                        <p><b>Edited by: </b>$editor</p>
                    </div>
                </div>
            </div>";
        }
        echo " <div id=\"video-playlist\" class=\"video-playlist\">
                <header class=\"playlist-title\">You may also like...</header>";

        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE video_id!=$id LIMIT 3");
        while($row = mysqli_fetch_array($query)) {
            $title = $row['heading'];
            $description = $row['description'];
            $thumb=$row['thumbnail'];
            $video_id=$row['video_id'];
            echo "  <a style=\"color:white; text-decoration: none; cursor: pointer\" href='player.php?id=$video_id&type=1' class=\"next-video\">
                    <img src=\"admin/uploads/shows/$thumb\" alt=\"\">
                    <h3 class=\"next-video-title\">$title</h3>
                    </a>
                <br>";
        }

        echo"</div>
        </div>
    </section>";
    }

    else
    {
        echo "<br><br><br><br><h1 style='text-align: center; color: white'>ERROR<br>It's not a correct choice</h1>";
    }
    ?>
</main>
</body>
<script>
    /*
     TODO:
     Clean up this mess, please
     */

    var videoPlayer = function(){
        "use strict";

        function el(id) {
            return document.getElementById(id);
        }

        var vid = el("video"),

            btnState = el("btnState"),
            btnReplay = el("btnReplay"),
            btnSound = el("btnSound"),
            sliderVolume = el("sliderVolume"),

            barSeeker = el("barSeeker"),
            barBuffer = el("barBuffer"),
            barProgress = el("barProgress"),

            timePlayed = el("timePlayed"),
            timeDuration = el("timeDuration"),
            timeBubble = el("timeBubble"),

            thePosition,
            theMinutes,
            theSeconds,
            theTime;

        var readableTime = function(t) {
            theMinutes = "0" + Math.floor(t / 60); // Divide seconds to get minutes, add leading zero
            theSeconds = "0" + parseInt(t % 60); // Get remainder seconds
            theTime = theMinutes.slice(-2) + ":" + theSeconds.slice(-2); // Slice to two spots to remove excess zeros
            return theTime;
        };

        /* Video controls */

        var togglePlay = function(){
            if(vid.paused) {
                vid.play();
                btnState.firstElementChild.className = "fontawesome-pause";
                btnReplay.style.display = "none";
                vid.style.opacity = 1;
            } else {
                vid.pause();
                btnState.firstElementChild.className = "fontawesome-play";
            }
        };

        var toggleSound = function(){
            if(vid.muted) {
                vid.muted = false;
                sliderVolume.value = 10;
                btnSound.firstElementChild.className = "fontawesome-volume-up";
            } else {
                vid.muted = true;
                sliderVolume.value = 0;
                btnSound.firstElementChild.className = "fontawesome-volume-off";
            }
        };

        /* Update seeker value and time played */
        var updateTimeDisplay = function() {
            var timePercent = (100 / vid.duration) * vid.currentTime;
            barSeeker.value = timePercent;
            barProgress.value = timePercent;
            timePlayed.innerHTML = readableTime(vid.currentTime);
        };

        var replayVideo = function() {
            vid.currentTime = 0;
            btnState.firstElementChild.className = "fontawesome-pause";
            el("likeThis").classList.remove("wiggle");
            btnReplay.style.display = "none";
            vid.play();
        };

        /* Event listeners */

        // Toggle buttons
        vid.addEventListener("click",togglePlay);
        btnState.addEventListener("click",togglePlay);
        btnSound.addEventListener("click",toggleSound);

        // Volume slider
        sliderVolume.addEventListener("change", function() {
            var theVolume = sliderVolume.value / 10;
            vid.volume = theVolume;

            if(theVolume === 0) {
                btnSound.firstElementChild.className = "fontawesome-volume-off";
            } else if (theVolume === 1) {
                btnSound.firstElementChild.className = "fontawesome-volume-up";
            } else {
                btnSound.firstElementChild.className = "fontawesome-volume-down";
            }
        });

        // Replay button, something needs fixing, but I forget what
        vid.addEventListener("ended", function(){
            btnReplay.style.display = "block";
            btnState.firstElementChild.className = "fontawesome-play";
        });


        /* Event listeners for the seek bar */

        // Move seeker bar
        vid.addEventListener("timeupdate",updateTimeDisplay);

        // Allow click on seeker to change video position
        barSeeker.addEventListener("change", function() {
            thePosition = vid.duration * (barSeeker.value / 100);
            vid.currentTime = thePosition;
        });

        // Pause video and seeker update while seeker is being interacted with
        barSeeker.addEventListener("mousedown",function(){
            vid.pause();
            vid.removeEventListener("timeupdate",updateTimeDisplay);
        });

        barSeeker.addEventListener("mouseup",function(){
            vid.play();
            btnState.firstElementChild.className = "fontawesome-pause";
            vid.addEventListener("timeupdate",updateTimeDisplay);
        });

        // Buffer bar
        vid.addEventListener("timeupdate", function() {
            var bufferPercent = (100 / vid.duration) * vid.buffered.end(vid.buffered.length - 1);
            barBuffer.value = bufferPercent;
        });

        // Video length
        vid.addEventListener('loadeddata', function(){
            timeDuration.innerHTML = readableTime(vid.duration);
        });

        // Time bubble on seeker
        var bubblePop = function(e){
            var cursorPos = (e.clientX - (barSeeker.getBoundingClientRect().left)) / (barSeeker.offsetWidth);
            var seekTime = cursorPos * vid.duration;

            if(seekTime) {
                timeBubble.innerHTML = readableTime(seekTime);
                timeBubble.style.left = (e.clientX - barSeeker.getBoundingClientRect().left + 78) + "px";
                timeBubble.style.display = "block";
            }
        };

        barSeeker.addEventListener("mousemove", bubblePop);

        barSeeker.addEventListener("mouseout", function(){
            timeBubble.style.display = "none";
        });

        vid.addEventListener("timeupdate", function(){
            theTime = parseInt(vid.currentTime);
            if(vid.duration - theTime < 10 && vid.duration - theTime > 9 ) {
                el("likeThis").classList.add("wiggle");
            }
        });

// Video playlist
        var playlistAnchor = document.querySelectorAll(".next-video"),
            imageURL = document.querySelectorAll(".next-video img");

        var prevTitle = document.querySelector(".video-title"),
            prevDescription = document.querySelector(".description");

        for (var i = 0; i < 4; i++) {
            (function(){
                var k = i;

                playlistAnchor[i].addEventListener("click", function(e){
                    e.preventDefault();

                    var playedVideo = document.querySelector(".played-video");
                    playedVideo.classList.remove("slide");
                    playedVideo.classList.remove("played-video");

                    // Update video
                    vid.poster = imageURL[k].src;
                    vid.src = playlistAnchor[k].href;

                    // Update info
                    prevTitle.innerHTML = this.querySelector(".next-video-title").textContent;
                    prevDescription.innerHTML = this.querySelector(".next-video-description").textContent;

                    // Reset and play video
                    replayVideo();

                    this.classList.add("played-video");
                    playedVideo.classList.add("slide");

                    setTimeout(function(){
                        playlistAnchor[k].parentNode.appendChild(playlistAnchor[k]);
                    }, 500);
                });

            }());
        }

    }();
</script>
</html>