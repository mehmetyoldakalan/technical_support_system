@include('app.layouts.header')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Hizmet Talebi Detayları</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">

                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">İsim-Soyisim</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->user->name}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">E-Mail</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->user->email}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Telefon</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->user->phone}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Şirket</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->user->company}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Adres</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->user->address}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Talep Adı</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->getService->service}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Talep Detayı</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <textarea disabled name="" id="" cols="60" rows="5" class="form-control">{{$requestDetails->request_details}}</textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Oluşturulma Tarihi</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->created_at}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">İletişim Tercihi</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        @if($requestDetails->contact_type=="phone")
                                            <input type="text" disabled class="form-control" value="Telefon">
                                        @elseif($requestDetails->contact_type=="live_meet")
                                            <input type="text" disabled class="form-control" value="Görüntülü Görüşme">
                                        @elseif($requestDetails->contact_type=="mail")
                                            <input type="text" disabled class="form-control" value="E-Mail">
                                        @elseif($requestDetails->contact_type=="chat")
                                            <input type="text" disabled class="form-control" value="Mesajlaşma">
                                        @endif

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">İletişim Tarihi</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control" value="{{$requestDetails->contact_time}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yerinde Hizmet</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        @if($requestDetails->onsite_service=="yes")
                                            <input type="text" disabled class="form-control" value="Evet" style="background-image: linear-gradient(310deg, #2dce89 0%, #2dcecc 100%);">
                                        @else
                                            <input type="text" disabled class="form-control" value="Hayır" style="background-image: linear-gradient(310deg, #f5365c 0%, #f56036 100%);">
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Durum</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <input type="text" disabled class="form-control">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('app.layouts.footer')
