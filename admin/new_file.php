<?php

@ include ('inc/session.php');


$ses_sql=mysql_query("select username from users where username='$user_check'", $connection);
$rows = mysql_num_rows($ses_sql);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>I</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curabitur Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.js"> </script>
  <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
<!---End-smoth-scrolling---->
    <style type="text/css">
       video:{
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>

</head>
<body>

        <!--start-banner-->
            <div class="banner ban1">
                <div class="container">
                    <div class="top-menu">
                    <span class="menu"><img src="images/nav.png" alt=""/> </span>
                        <ul>

                            <li class="pull-left"><a  href="menu.html"><?php
                                echo $login_session?></a></li>
                            <li><a  href="index.html">About</a></li>
                            <li><a  href="about.html">My Account</a></li>
                            <li><a  href="menu.html">Faqs</a></li>

                            <li><a  href="inc/logout.php">Logout</a></li>
                        </ul>
                        <!-- script for menu -->

                             <script>
                             $("span.menu").click(function(){
                             $(".top-menu ul").slideToggle("slow" , function(){
                             });
                             });
                             </script>
                        <!-- //script for menu -->
                    </div>
                    </div>
            </div>
        <!--end-banner-->

            <!--contact-->
            <div class="content">
 <div class="main-1">
        <div class="container">
<div class="login-page">
               <div class="account_grid">

                   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                       <h1>DAY 183</h1>
                       <p>Image Appear here</p>

                       <!--<button id="full">Fullscreeen</button>



                       <div id="video_container">
                           <video id="video1" width="1280" height="720" class="videoInsert" allowfullscreen frameborder="0" autoplay >
                               <source src="movie.mp4" type="video/mp4">
                           </video>
                       </div>-->

                       <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                           <input type="hidden" name="cmd" value="_s-xclick">
                           <input type="hidden" name="hosted_button_id" value="LV8GUMGA43U6J">
                           <table>
                               <tr><td><input type="hidden" name="on0" value="Package">Package</td></tr><tr><td><select name="os0">
                               <option value="Annual">Annual $1,200.00 USD</option>
                               <option value="Monthly">Monthly $100.00 USD</option>
                               <option value="Daily">Daily $10.00 USD</option>
                               </select> </td></tr>
                           </table>
                           <input type="hidden" name="currency_code" value="USD">
                           <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                           <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                       </form>


                   </div>
               <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                   <div class="btn-select">

                       <button id="full" class="acount-btn">Morning Maths</button>

                       <div oncontextmenu="return false"  id="video_container" style=" { cursor:none; } ">
                           <video id="video1" class="videoInsert" allowfullscreen frameborder="0" style="cursor: none;">
                               <source src="movie.mp4" type="video/mp4">
                           </video>
                       </div>
                   </div>
                   <div>
                       <button id="full1" class="acount-btn">Morning Maths Review</button>
                       <div oncontextmenu="return false" id="video_container" style=" { cursor:none;} ">
                           <video id="video2" class="videoInsert" allowfullscreen frameborder="0" style="cursor: none;">
                               <source src="183morningreview.mp4" type="video/mp4">
                           </video>
                       </div>
                   </div>
                   <div></div>
                   <div>
                       <a class="acount-btn" href="" onclick="openindex()">Evening Maths</a>
                   </div>
                   <div>
                       <button id="full3" class="acount-btn">Evening Math Review</button>
                       <div oncontextmenu="return false" id="video_container" style=" { cursor:none;} ">
                           <video id="video3" class="videoInsert" allowfullscreen frameborder="0" style="cursor: none;">
                               <source src="183eveningreview.mp4" type="video/mp4">
                           </video>


                   </div>
               </div>

                   <div class="clearfix"> </div>
             </div>
           </div>
           </div>
    </div>
    </div>
<!-- login -->



    <div class="footer-section">
                    <div class="container">
                        <div class="footer-top">
                            <p>Copyright &copy; 2016 <span>PEAK PERFOMANCE INTERNATIONAL</span> All Rights Reserved.</p>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            /*
                            var defaults = {
                                containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear'
                            };
                            */

                            $().UItoTop({ easingType: 'easeOutQuart' });

                        });
                    </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


                    </div>
                    </div>

<script>
function openindex(){
    OpenWindow = window.open("../index.php","newwindow",config='toolbar=no,menubar=no,width=100000000%,height=10000000%;scrollbars=no,resizable=no,location=no,directories=no,status=no,fullscreen=yes');
}

</script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('video').hide();

             function reload() {
                 document.location.reload(true);
            }
            //Launches video full screen on button click
            $('#full').on('click', function(){
                // Set the element you want to go fullscreen
                var elm = document.getElementById("video1");
                elm.play();
                // Now request fullscreen on the element. Need to use browser prefix.
                if (elm.requestFullscreen) {
                    elm.requestFullscreen();
                } else if (elm.msRequestFullscreen) {
                    elm.msRequestFullscreen();
                } else if (elm.mozRequestFullScreen) {
                    elm.mozRequestFullScreen();
                } else if (elm.webkitRequestFullscreen) {
                    elm.webkitRequestFullscreen();
                }
                $('#video1').show();
            });
            //Listens for KEYUP_ESC
            $('body').on('keyup',function(evt) {
                var elm = document.getElementById("video1");
                var clone = $("#video1").clone();
                // clone.hide();
                if (evt.keyCode == 27) {
                   elm.pause();
                   elm.remove();
                   $(document).append(clone);
                   $('#video1').hide();
                }
            });
            //Checks if the video element has finished playing
            $("#video1").bind("ended",function(){
                var elm = document.getElementById("video1");
                var r = confirm("Continue to next lesson?");
                var elmN = document.getElementById("video2");
                if (r === true) {
                    elmN.play();
                    // Now request fullscreen on the element. Need to use browser prefix.
                    if (elmN.requestFullscreen) {
                        elmN.requestFullscreen();
                    } else if (elmN.msRequestFullscreen) {
                        elmN.msRequestFullscreen();
                    } else if (elmN.mozRequestFullScreen) {
                        elmN.mozRequestFullScreen();
                    } else if (elmN.webkitRequestFullscreen) {
                        elmN.webkitRequestFullscreen();
                    }
                    $('#video2').show();
                } else {
                    var clone = $("#video1").clone();
                    elm.remove();
                    $("body").append(clone);
                    $('#video1').hide();
                }
            });

            $('#full1').on('click', function(){
                // Set the element you want to go fullscreen
                var elm = document.getElementById("video2");
                elm.play();
                // Now request fullscreen on the element. Need to use browser prefix.
                if (elm.requestFullscreen) {
                    elm.requestFullscreen();
                } else if (elm.msRequestFullscreen) {
                    elm.msRequestFullscreen();
                } else if (elm.mozRequestFullScreen) {
                    elm.mozRequestFullScreen();
                } else if (elm.webkitRequestFullscreen) {
                    elm.webkitRequestFullscreen();
                }
                $('#video2').show();
            });

            //Listens for KEYUP_ESC
            $(document).on('keyup',function(evt) {
                var elm = document.getElementById("video2");
                var clone = $("#video2").clone();
                clone.hide();
                if (evt.keyCode == 27) {
                    elm.pause();
                    elm.remove();
                    $("body").append(clone);
                    reload();

                }
                $('video').hide();
            });
            //Checks if the video element has finished playing
            $("#video2").bind("ended",function(){
                alert("Continue?");
                var elm = document.getElementById("video2");
                var clone = $("#video2").clone();
                elm.remove();
                $(document).append(clone);
                $('#video2').hide();
            });

            $('#full3').on('click', function(){
                // Set the element you want to go fullscreen
                var elm = document.getElementById("video3");
                elm.play();
                // Now request fullscreen on the element. Need to use browser prefix.
                if (elm.requestFullscreen) {
                    elm.requestFullscreen();
                } else if (elm.msRequestFullscreen) {
                    elm.msRequestFullscreen();
                } else if (elm.mozRequestFullScreen) {
                    elm.mozRequestFullScreen();
                } else if (elm.webkitRequestFullscreen) {
                    elm.webkitRequestFullscreen();
                }
                $('#video3').show();
            });

            //Listens for KEYUP_ESC
            $('body').on('keyup',function(evt) {
                var elm = document.getElementById("video3");
                var clone = $("#video3").clone();
                // clone.hide();
                if (evt.keyCode == 27) {
                    elm.pause();
                    elm.remove();
                    $(document).append(clone);
                    $('#video3').hide();
                }

            });
            //Checks if the video element has finished playing
            $("video").bind("ended",function(){
                var elm = document.getElementById("video3");
                var clone = $("#video3").clone();
                elm.remove();
                $(document).append(clone);
                $('#video3').hide();
            });

        });

    </script>

</body>
</html>