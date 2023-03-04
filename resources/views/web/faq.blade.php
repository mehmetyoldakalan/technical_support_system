@include("web.layouts.header")

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#heading-1").click(function(){
            $("#collapse-1").slideToggle();
        })
        $("#heading-2").click(function(){
            $("#collapse-2").slideToggle();
        })
        $("#heading-3").click(function(){
            $("#collapse-3").slideToggle();
        })
        $("#heading-4").click(function(){
            $("#collapse-4").slideToggle();
        })
        $("#heading-5").click(function(){
            $("#collapse-5").slideToggle();
        })
        $("#heading-6").click(function(){
            $("#collapse-6").slideToggle();
        })
        $("#heading-7").click(function(){
            $("#collapse-7").slideToggle();
        })
    });
</script>
<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="assets/images/photos/parallax-counter.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Sık Sorulan Sorular</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Anasayfa</a></li>
                            <li class="active">SSS</li>
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
                <!-- ***** Page Content Start ***** -->
                <div class="col-lg-12s col-md-12 col-sm-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    <span class="badge">1</span> Larasoft işleri nasıl çözümler?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Larasoft olarak fikirleriniz, istekleriniz, düşünceleriniz ve önerileriniz bizim için birinci öncelik. Buna göre ilk önce sizi dinleriz, ne istediğinizi, ne düşündüğünüzü anlarız. Sizden aldığımız bilgileri rapor haline getirir ve sizinle paylaşırız. Son kez sizin kontrolünüzden geçtikten sonra yol haritamızı çıkarıp işe koyuluruz. Projenin her bir aşamasında size bilgi içeren mailler göndermeyi ihmal etmiyoruz. Unutmayın Larasoft ile tüm kontrol SİZDE.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <span class="badge">2</span>Larasoft projeyi ne zaman teslim eder?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Bu soru tamamen projenize bağlı. Proje kapsamına göre bu süre 2 hafta ile 6 ay arasında değişiklik göstermektedir</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    <span class="badge">3</span> Projemin gizliliği sağlanacak mı?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Elbette. Projeniz iş ve gizlilik sözleşmelerine bağlı olarak geliştirilmektedir</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    <span class="badge">4</span> How does the NBN affect my Turing Internet Service?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    <span class="badge">5</span> I’ve handed in my application. Now what happens?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    <span class="badge">6</span> What is involved in a standard install?
                                </button>
                            </h2>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    <span class="badge">7</span> What if mapping is unsuccessful, do I have any other options?
                                </button>
                            </h2>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- ***** Page Content End ***** -->

                <!-- ***** Aside Start ***** -->
                <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                    <aside class="default-aside">
                        <div class="sidebar">
                            <ul>
                                <li class="active"><a href="#">Cloud Solutions</a></li>
                                <li><a href="#">Network Services</a></li>
                                <li><a href="#">Webcast Services</a></li>
                                <li><a href="#">Disaster Recovery</a></li>
                                <li><a href="#">Digital Platform</a></li>
                                <li><a href="#">Systems Solutions</a></li>
                                <li><a href="#">Hosting Services</a></li>
                                <li><a href="#">Data Services</a></li>
                            </ul>
                        </div>
                    </aside>
                </div> -->
                <!-- ***** Aside End ***** -->
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->

</section>


@include("web.layouts.footer")
