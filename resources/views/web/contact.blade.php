@include("web.layouts.header")

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="assets/images/photos/parallax-counter.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>İletişim</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Anasayfa</a></li>
                            <li class="active">İletişim</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->


    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact">
                        <!-- <div class="map-wrapper">
                            <div class="map-canvas" data-zoom="12" data-lat="-37.811085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Turing" data-icon-path="assets/images/marker-blue.png" data-content="455 West Orchard Street<br>Kings Mountain, NC 28086<br><br><a href='mailto:support@yourbrand.com'>mailto:support@yourbrand.com</a>">
                            </div>
                        </div> -->
                        <div class="contact-info">
                            <div class="row">
                                <!-- <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="item">
                                        <i class="fa fa-location-arrow"></i>
                                        <div class="txt">
                                            <span>455 West Orchard Street<br>Kings Mountain, NC 28086</span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="item">
                                        <i class="fa fa-envelope"></i>
                                        <div class="txt">
                                            <span><a href="mailto:info@larasoft.web.tr">info@larasoft.web.tr</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                    <div class="item">
                                        <i class="fa fa-envelope"></i>
                                        <div class="txt">
                                            <span><a href="mailto:support@larasoft.web.tr">support@larasoft.web.tr</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="social">

                                <li> <a href="https://github.com/larasoftdigital" target="blank"><i class="fa fa-github-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">
                            <!-- ***** Contact Text Start ***** -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <h5 class="margin-bottom-30">Bize Ulaşın</h5>
                                <div class="contact-text">
                                    <p>Dilediğiniz konuda destek vermek için sabırsızlanıyoruz. Size en kısa sürede yardımcı olmak için çalışacağımızdan emin olabilirsiniz.</p>
                                </div>
                            </div>
                            <!-- ***** Contact Text End ***** -->

                            <!-- ***** Contact Form Start ***** -->

                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <form action="iletisim" method="POST">
                                    <div class="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <input type="text" name="name_surname" placeholder="İsim Soyisim" required>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <input type="text" name="email" placeholder="E-Mail"required>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="message" placeholder="Mesajınız" required	></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button name="send" class="btn-primary-line">Gönder</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- ***** Contact Form End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->

</section>



@include("web.layouts.footer")

