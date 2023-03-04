@include('app.layouts.header')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Destek Taleplerim</h6>
                    <button type="button" class="btn btn-primary btn-sm" style="float: right" data-toggle="modal" data-target=".bd-example-modal-lg">Destek Talebi Oluştur</button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Destek Talebi</h4>
                                    <i  class="fa fa-close" data-dismiss="modal" aria-label="Close"></i>
                                </div>
                                <form action="{{route('app.customer.support.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body mx-3">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-envelope prefix grey-text" id="title_icon"></i>
                                        <input type="text" id="title" name="title" required class="form-control validate">
                                        <label data-error="wrong" data-success="right"  id="title_label" for="title">Başlık</label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <textarea name="description" id="description" required cols="30" rows="10" class="form-control"></textarea>
                                        <label data-error="wrong" data-success="right" id="decription_label" for="description">Detay</label>
                                    </div>

                                </div>
                                <div  class="modal-footer d-flex justify-content-center">
                                    <button id="create_button" class="btn btn-default">Oluştur</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <div class="row" style="--bs-gutter-x: -0.5rem; !important;">

                                @foreach($supports as $support)
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$support->title}}</h5>
                                            <p class="card-text">{{$support->description}}</p>
                                            @if($support->status=='on')
                                                <button disabled onclick="return false" class="btn btn-primary btn-sm">Cevaplanmamış</button>
                                            @else
                                                <button  onclick="showResponse({{$support->id}});return false" class="btn btn-primary btn-sm">Cevabı Görüntüle</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var route='{{route('get_support_response')}}'
</script>
<script src="{{asset('js/customer/support.js')}}"></script>
@include('app.layouts.footer')

