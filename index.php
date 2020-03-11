<?php
    include("classes/header_pop_up.php");
    
    include("classes/home/slider.php");
    
    include("classes/home/ticker_tv.php");
    
    include("classes/home/news.php");
    
    include("classes/home/ad.php");
    
    include("classes/home/programs.php");

    include("classes/home/social_tv.php");
    
    include("classes/home/blogs.php");
    
    include("classes/ad.php");

    include("classes/social_media.php");

    include("classes/whatsapp_widget.php");

    include("classes/insta_feed.php");

    include("classes/footer_pop_up.php");
?> 
    
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade alert" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div id="modal-content">
                    <div style="padding: 10.3% 0">  
                    </div>
                    <!--div class="modal-header"-->
                        <!--h3 class="modal-title" id="lineModalLabel">Sign-Up with ouV Station</h3-->
                    <!--/div-->
               </div>
                <div class="modal-content">
                    <div class="modal-body" style="background-color: #fff; padding-bottom: 7%">
                        <center style="padding: 0 10%">
                            <h6 style="padding: 7% 0 5% 0; color: #1b1464; font-weight: 400; letter-spacing: 5px;">SIGN UP FOR OUR NEWSLETTERS</h6>
                        
                            <form Action="cookies.php" Method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control my_input_lwsat blwlwst" id="user-email2" placeholder="YOUR NAME" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control my_input_lwsat blwlwst" id="user-email1" placeholder="YOUR EMAIL" required>
                                </div>
                                <div style="padding: 0.7%">  
                                </div>
                                <button type="submit" class="btn btn-primary center-block my_input_lwsat" style="background-color: #1b1464; border-color: #1b1464; padding-right: 20%; padding-left: 20%; letter-spacing: 3px;">SUBMIT</button>
                                <br><br>
                                <a href="#" style="font-size: 10px; color: #000; letter-spacing: 3px; border: none" data-dismiss="modal"><span aria-hidden="true">x MAYBE LATER</span><span class="sr-only">Close</span></a>
                            </form>
                        </center>
                    </div>
               </div>
            </div>
        </div>
  
        <style>
            .modal {
                padding-top: 10%;
            }
            
            .modal-dialog {
                border-style: solid;
                border-width: medium;
                border-color: #152535;
                padding-top: 0;
            }
            
            .center 
            {
                margin-top: 0px;
            }
                
            
            #modal-content  {
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important; 
                background: url("img/pop_up/LOVEWORLDSAT POP image.jpg");
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            
            
            .modal-content  {
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important;
                border-color: #fff;
            }
            
            .my_input_lwsat  {
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important;
            }  
            
            .modal-header 
            {
                padding-bottom: 5px;
            }

            .modal-footer 
            {
                padding: 0;
            }
    
            .modal-footer .btn-group button 
            {
                height:40px;
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important;
            }
            
            .blwlwst input::placeholder 
            {
                letter-spacing: 13px;
            }
    
            .modal-footer .btn-group:last-child > button 
            {
                border-right: 0;
            }
            
        </style>
        <!-- Popup Modal Window - END -->
    </div>
    
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	<!-- Slider js -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/instafeed.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- WhatsApp Live Chat Support -->
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<!-- Live TV Stream -->
	<link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <script>
        (function(window, videojs) {
            var player = window.player = videojs('example-video');
            
            // hook up the video switcher
            var loadUrl = document.getElementById('load-url');
            var url = document.getElementById('url');
            loadUrl.addEventListener('submit', function(event) {
              event.preventDefault();
              player.src({
                src: url.value,
                type: 'application/x-mpegURL'
              });
              return false;
            });
        }(window, window.videojs));
    </script>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-8378729-1");
            pageTracker._trackPageview();
        } catch(err) {}
    </script>
</body>

</html>