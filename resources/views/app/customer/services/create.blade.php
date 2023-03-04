@include("app.layouts.header")


    <!-- CSS Files -->
    <link href="{{asset('wizard_assets/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('wizard_assets/css/demo.css')}}" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('wizard_assets/css/themify-icons.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>

<body>
<style>

</style>
<div class="image-container set-full-height" >

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="{{route('app.customer.store_services_request')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
                            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Hizmet talebi oluştur</h3>
                                <p class="category">Öncelikle bazı bilgilere ihtiyacımız var</p>
                            </div>

                            <div class="wizard-navigation">
                                <div class="progress-with-circle">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#about" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-user"></i>
                                            </div>
                                            Ön Bilgi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#account" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-settings"></i>
                                            </div>
                                            Hizmet Seçimi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#address" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-map"></i>
                                            </div>
                                            Detay&Onay
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h5 class="info-text"> Lütfen bilgilerin doğru ve eksiksiz olduğundan emin olun
                                            <br>
                                            <small>Eğer bilgiler yanlış veya eksik ise ayarlar bölümünden düzeltiniz</small>
                                        </h5>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>İsim Soyisim</label>
                                                <input name="name" type="text" disabled class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>E-Mail</label>
                                                <input name="email" type="text" disabled class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telefon</label>
                                                <input name="phone" type="number" disabled pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ülke</label>
                                                <input name="country" type="text" disabled  class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->country}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Şehir</label>
                                                <input name="city" type="text"  disabled  class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->city}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Adres <small></small></label>
                                                <textarea name="address" id="" disabled cols="50" rows="5" style="background-color: #e7e6e6"  class="form-control-plaintext">{{\Illuminate\Support\Facades\Auth::user()->address}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h5 class="info-text">Hangi hizmeti almak istiyorsunuz </h5>
                                    <div class="row">
                                        @forelse($servicesList as $services => $service)
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label>
                                                    <input type="radio" required name="services_id" value="{{$service->id}}" class="card-input-element" />
                                                    <div class="card card-default card-input">
                                                        <div class="card-header" style="color: rgb(0 0 0 / 50%);font-size: x-large">{{$service->service}}</div>
                                                        <div class="card-body" style="color: rgb(0 0 0 / 50%);">
                                                            {{$service->details}}
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        @empty
                                            <center>
                                            <div class="col-md-4 col-lg-4 col-sm-4">

                                                <label>
                                                    <div class="card card-default card-input">
                                                        <div class="card-header" style="color: rgb(0 0 0 / 50%);font-size: x-large">Servis Bulunamadı</div>
                                                        <div class="card-body" style="color: rgb(0 0 0 / 50%);">
                                                            Üzgünüz...
                                                        </div>
                                                    </div>
                                                </label>

                                            </div>
                                            </center>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="info-text"> Son bir adım... Hizmet talebiniz hakkında detayları almamız gerekiyor </h5>
                                        </div>
                                        <div class="col-sm-12 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Talep detayları</label>
                                                <textarea name="request_details" id="" cols="50" rows="5" style="background-color: #e7e6e6"  class="form-control-plaintext"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Görsel (opsiyonel)</label>
                                                <input type="file" name="request_img0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Görsel (opsiyonel)</label>
                                                <input type="file" name="request_img1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Görsel (opsiyonel)</label>
                                                <input type="file" name="request_img2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Görsel (opsiyonel)</label>
                                                <input type="file" name="request_img3" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>İletişim Tarihi</label>
                                                <input type="datetime-local" name="contact_time" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>İletişim Tercihi</label><br>
                                                <select name="contact_type" class="form-control">
                                                    <option value="">İletişim tercihi seçiniz</option>
                                                    <option value="phone"> Telefonla (sesli) </option>
                                                    <option value="mail"> Email </option>
                                                    <option value="live_meet"> Görüntülü Görüşme </option>
                                                    <option value="chat"> Mesaj (whatsapp) </option>
                                                </select>
                                                <small style="color: green">*Gizliliğinize önem veriyoruz.
                                                    <br>Teknik ekibimiz ile sadece seçtiğiniz iletişim tercihi bilgilerinizi paylaşacağız</small>

                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <div class="choice" data-toggle="onsite_services">
                                                    <input type="checkbox" name="onsite_service">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="fa fa-cog"></i>
                                                        <p>Yerinde Servis</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-success" id="onsite_message"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='İleri' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' value='Onayla' />
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Geri' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    <div id="toast" style="background-color: #f50000;">
        <div id="img" style="background-color: #e75b5b;">Hata</div>
        <div id="desc" style="color: white">
        </div>
    </div>
    @error('error')
    <script>
        $(document).ready(function(){
            var x = document.getElementById("toast")
            x.className = "show";
            $("#desc").html('{{$message}}')
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        })
    </script>
    @enderror



</div>

</body>

<!--   Core JS Files   -->
<script src="{{asset('wizard_assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('wizard_assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('wizard_assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('wizard_assets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="{{asset('wizard_assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,

                    <a href="https://symfonysoft.com" class="font-weight-bold" target="_blank">SymfonySoft</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">Larasoft</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</html>

