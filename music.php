<?php
    include("classes/header.php")
?>
    
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div>
            <div  align="center">
                <div class="blog-posts-area">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post">
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6 style="text-transform: uppercase; font-size: 28px">Music Channel</h6>
                            </a>
                        </div>
                    </div>
                </div>
     
                <video id="example-video" class="video-js vjs-default-skin" controls autoplay="autoplay">
                    <!-- <source src="http://hls.mobilestream.ce.netromedia.com/MobileStream/MobileStream/playlist.m3u8" type="application/x-mpegURL"> -->
                    <source src="https://cdn.internetmultimediaonline.org/241F21/lwsatmobilestream/lwsatMobileStream.m3u8" type="application/x-mpegURL">
                </video>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->
    
<?php
    include("classes/ad.php");

    include("classes/social_media.php");

    include("classes/whatsapp_widget.php");

    include("classes/insta_feed.php");

    include("classes/footer.php");
?>  