<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3"style="min-height: 140px">
            <div class="row">
                <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">MEVCUT HİZMET SAYISI</p>
                        <h5 class="font-weight-bolder">
                            {{$data['current_requests']}}
                        </h5>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                            <a href="{{route('app.customer.current_services_request')}}">GÖRÜNTÜLE</a>
                        </p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3"style="min-height: 140px">
            <div class="row">
                <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">TAMAMLANMIŞ HİZMET SAYISI</p>
                        <h5 class="font-weight-bolder">
                            {{$data['closed_requests']}}
                        </h5>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                            <a href="{{route('app.customer.past_services_request')}}">GÖRÜNTÜLE</a>
                        </p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3" style="min-height: 140px">
            <div class="row">
                <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Toplam Hizmet Alımı</p>
                        <h5 class="font-weight-bolder">
                            {{$data['total_requests']}}
                        </h5>

                        <p class="text-sm mb-0 text-uppercase font-weight-bold">
                            <a href="{{route('app.customer.create_services_request_pre')}}">YENİ OLUŞTUR</a>
                        </p>

                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card">
        <div class="card-body p-3"style="min-height: 140px">
            <div class="row">
                <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Merhaba</p>
                        <h5 class="font-weight-bolder">
                            {{strtoupper(\Illuminate\Support\Facades\Auth::user()->name)}}
                        </h5>
                        <p class="mb-0">
                            HOŞGELDİNİZ
                        </p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-warning text-center rounded-circle">
                        <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
