
@extends('layouts.main')


@section('customcss')
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">

    <style>
        h6, .h6 {
            font-size: 2rem;
        }
    </style>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block"> أخر تحديث: <b>  {{$datetime}} </b></h3>

                </div>

            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->


                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">{{$nbelected}}</h3>
                                            <h6>عدد المنتخبين الكلي</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">{{$shia}}</h3>
                                            <h6>عدد المنتخبين الشيعة</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                             aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">{{$nodine}}</h3>
                                            <h6>عدد المنتخبين الغير معروفة ديانتهم</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                             aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card codecard">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form">المذاهب</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show ">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>المذهب</th>
                                            <th> عدد المنتخبين</th>
                                            <th> عدد غير المنتخبين</th>
                                            <th> عدد الكلي </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($datadine) > 0 )
                                            @foreach ($datadine as $d)
                                                <tr class="bg-success bg-lighten-5">
                                                    <td>{{$d->dine}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->total}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->ofall - $d->total}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->ofall}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card codecard">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form">الاقضية</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show ">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>القضاء</th>
                                            <th> عدد المنتخبين</th>
                                            <th> عدد غير المنتخبين</th>
                                            <th> عدد الكلي </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($datakada2) > 0 )
                                            @foreach ($datakada2 as $d)
                                                <tr class="bg-success bg-lighten-5">
                                                    <td>{{$d->kadaa}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->total}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->ofall - $d->total}}</td>
                                                    <td><i class="cc BTC-alt"></i> {{$d->ofall}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection


@section('customjs')
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script>
        $("#dash2").addClass("active");
    </script>
@endsection
