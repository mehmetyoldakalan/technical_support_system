@include('app.layouts.header')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Geçmiş Hizmet Alımlarım</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hizmet Adı</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">İletişim Tercihi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Yerinde Hizmet</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Durum</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">İletişim Tarihi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pastRequest as $requests=>$request)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$request->getService->service}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            @if($request->contact_type=="phone")
                                                Telefon
                                            @elseif($request->contact_type=="live_meet")
                                                Görüntülü Görüşme
                                            @elseif($request->contact_type=="mail")
                                                Mail
                                            @elseif($request->contact_type=="chat")
                                                Mesajlaşma
                                            @endif
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">

                                        @if($request->onsite_service=='yes')
                                            <span class="badge badge-sm bg-gradient-success">
                                                Evet
                                            </span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-danger">
                                                Hayır
                                            </span>

                                        @endif

                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Tamamlandı</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$request->contact_time}}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('app.customer.past_services_request_details',['id'=>$request->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-desktop" style="margin-right: 5%"></i>Görüntüle
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('app.layouts.footer')
