<?php
    include("classes/header.php")
?>
    
    <div id="modal-content">
    </div>

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="blog-posts-area">
                <!-- Single Featured Post -->
                <div class="single-blog-post featured-post">
                    <div class="post-data">
                        <center>
                            <a href="#" class="post-title">
                                <h6>Share Your Testimony</h6>
                            </a>
                            <p>
                                <i>Please fill out the form below to share with us your testimony or miracle you received as a result of watching LoveWorldSAT.</i>
                            </p>    
                        </center>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 0 3% 0 3%;">
                <div class="contact-form-area">
                    <form action="testify_submit.php" Method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                            </div>
                            <div class="col-12" style="padding-top: 15px; padding-bottom: 15px" required>
                                <h4 style="padding-bottom: 3px">Please provide your feedback on the following</h4>
                                <label class="col-12 col-lg-2" style="padding-left: 0; font-weight: 500">
                                  <input type="radio" name="optradio" value="Salvation" required> &nbsp; Salvation
                                </label>
                                <label class="col-12 col-lg-2" style="padding-left: 0; font-weight: 500">
                                  <input type="radio" name="optradio" value="Healing" required> &nbsp; Healing
                                </label>
                                <label class="col-12 col-lg-2" style="padding-left: 0; font-weight: 500">
                                  <input type="radio" name="optradio" value="Financial" required> &nbsp; Financial
                                </label>
                                <label class="col-12 col-lg-2" style="padding-left: 0; font-weight: 500">
                                  <input type="radio" name="optradio" value="Other" style="padding-left: 30px" required> &nbsp; Other
                                </label>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="15" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <p style="padding-top: 10px;">Attach file (Video file, Picture file) :</p>
                                <input  type="file" name="file">
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn newspaper-btn mt-30 w-100" name="upload" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
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