<?php
    include("classes/header.php")
?>

    <!-- ##### Blog Area Start ##### -->
    <div class="hero-area section-padding-0-80">
        <div class="container">
            <div class="blog-posts-area">
                <!-- Single Featured Post -->
                <div class="single-blog-post featured-post">
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6 style="text-transform: uppercase; font-size: 28px">Contact Us</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!--div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div-->

            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="contact-form-area">
                        <form action="email.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="15" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h4 style="padding: 2px 0; line-height: 0.7;">Address:</h4>
                        <p>333 Pretoria Ave <br>Randburg Ferndale, Gauteng <br>Johannesburg, South Africa </p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h4 style="padding: 2px 0; line-height: 0.7;">Phone:</h4>
                        <p>+27 11 886 1778</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h4 style="padding: 2px 0; line-height: 0.7;">SMS Lines:</h4>
                        <p>+27 83 885 2040</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h4 style="padding: 2px 0; line-height: 0.7;">Email:</h4>
                        <p>feedbacks@loveworldsat.org</p>
                    </div>
                </div>
            </div>
    
            <br><br><br><br><br><br><br>
            
            <!-- Google Maps -->
            <div class="responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.230684149042!2d28.00278631502772!3d-26.09138738348817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957490e5d637b9%3A0x1e502aee225b895d!2s333+Pretoria+Ave%2C+Ferndale%2C+Randburg%2C+2194!5e0!3m2!1sen!2sza!4v1548062975534" width=100% height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
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