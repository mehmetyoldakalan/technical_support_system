@include("app.layouts.header")
<link href="{{asset('wizard_assets/css/demo.css')}}" rel="stylesheet" />


    <div class="image-container set-full-height" style="display: flex;justify-content: space-between;" >

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-sm-offset-2" style="background-color: #efebeb;opacity: 0.94">

                <div class="wizard-container">

    <div class="row">
        <h5 class="info-text" style="text-align: center;padding-bottom: 18px;padding-top: 12px;">Hangi kategoride hizmet almak istiyorsunuz</h5>
        @forelse($mainServicesList as $services => $service)
    <div class="col-md-4 ">
        <label style="width: 100%;">
            <a href="{{route('app.customer.create_services_request',['main'=>$service->id])}}"  value="{{$service->id}}"  />
            <div class="card card-default card-input">
                <div class="card-header" style="color: rgb(0 0 0 / 50%);font-size: x-large">{{$service->service}}</div>
                <div class="card-body" style="color: rgb(0 0 0 / 50%);">
                    {{$service->details}}
                </div>
            </div>
            </a>
        </label>
    </div>
        @empty
            <center>
                <div class="col-md-4 col-lg-4 col-sm-4">

                    <label>
                        <div class="card card-default card-input">
                            <div class="card-header" style="color: rgb(0 0 0 / 50%);font-size: x-large">Kategori Bulunamadı</div>
                            <div class="card-body" style="color: rgb(0 0 0 / 50%);">
                                Üzgünüz...
                            </div>
                        </div>
                    </label>

                </div>
            </center>
        @endforelse
    </div>
    </div></div>
    </div>
    </div>
    </div>


@include("app.layouts.footer")
