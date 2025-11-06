
@extends('layouts.main')


@section('customcss')
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">
    <style>
        @media only screen and (max-width: 768px) {
            .dt-buttons{
                display: grid !important;
            }
            .dropdown-menu{
                right: 25% !important;
            }
        }
        .dt-button-collection.dropdown-menu{
            right: 50%;
        }
    </style>
@endsection

@section('content')


{{--    desktop	x > 1024--}}
{{--    tablet-l (landscape)	768 < x <= 1024--}}
{{--    tablet-p (portrait)	480 < x <= 768--}}
{{--    mobile-l (landscape)	320 < x <= 768--}}
{{--    mobile-p (portrait)	x <= 320--}}

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">المذاهب في الإنتخابات</h3>
                </div>
            </div>
            <div class="content-body">

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">المذاهب في الإنتخابات, أخر تحديث:  <b>  {{$datetime}} </b></h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered file-export2 col-l-12" style="width: 100%!important;">
                                            <thead>
                                            <tr>
                                                <th class="all">المذهب</th>
                                                <th class="all"> عدد المنتخبين</th>
                                                <th class="all"> عدد غير المنتخبين</th>
                                                <th class="all"> العدد الكلي  </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($data) > 0 )
                                                @foreach ($data as $d)
                                                    <tr>
                                                        <td> {{$d->dine}} </td>
                                                        <td> {{$d->total}} </td>
                                                        <td>{{$d->ofall- $d->total}}</td>
                                                        <td>{{$d->ofall}}</td>
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
                </section>
                <!--/ Configuration option table -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


@endsection


@section('customjs')
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatables/datatable-advanced.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js') }}"></script>
    <script>
        $("#mazhabelection").addClass("active");
    </script>
@endsection
