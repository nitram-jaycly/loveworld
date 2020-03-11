<?php
    include("classes/header.php")
?>
    
    <!-- ##### Blog Area Start ##### -->
    <div class="hero-area section-padding-0-80">
        <div class="container">
            <div  align="center">
                <div class="blog-posts-area">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post">
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6 style="text-transform: uppercase; font-size: 28px">Daily Blog</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="blog-posts-area">
                       <div id="load_data"></div>
                       <div id="load_data_message"></div>
                       <br /><br /><br /><br />
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area stacky">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <center> 
                                <div class="">
                                    <h5 style="padding-bottom: 5px; font-size: 20px">Live TV</h5>
                                </div>    
                                <video id="example-video" class="video-js vjs-default-skin" style="height: 142px; width: 252px;" controls autoplay>
                                    <!-- <source src="http://hls.mobilestream.ce.netromedia.com/MobileStream/MobileStream/playlist.m3u8" type="application/x-mpegURL"> -->
                                    <source src="https://cdn.internetmultimediaonline.org/241F21/lwsatmobilestream/lwsatMobileStream.m3u8" type="application/x-mpegURL">
                                </video>
                                <br>
                                <img class="img-responsive" src="img/blog/ad/LOVEWORLDSAT-Decoder-and-Dish-Advert-Website.jpg">
                                   
                            </center>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
    
<?php
    include("classes/ad.php");

    include("classes/social_media.php");

    include("classes/whatsapp_widget.php");

    include("classes/insta_feed.php");

    include("classes/footer.php");
?>   