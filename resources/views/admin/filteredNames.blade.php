
@extends('layouts.main')


@section('customcss')
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">

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
                    <h3 class="content-header-title mb-0 d-inline-block">عامل الهاتف</h3>
                </div>
            </div>
            <div class="content-body">

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card codecard">
                                <div class="card-header">
                                    <h4 class="card-title">عامل الهاتف</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <form id="myform">
                                        <div class="col-l-12 row">

                                            <div class="form-group col-l-3 m-1">
                                                <div class="text-bold-600 font-medium-2">
                                                    المذهب
                                                </div>
                                                {!! Form::select('dine', $dine, null, ['class' => 'select2 form-control block selectdine','placeholder'=> 'إختر المذهب']) !!}
                                            </div>


                                            <div class="form-group col-l-2   m-1">
                                                <div class="text-bold-600 font-medium-2">
                                                    القضاء
                                                </div>
                                                {!! Form::select('kadaa', $kadaa, null, ['class' => 'select2 form-control block selectkadaa','placeholder'=> 'إختر القضاء']) !!}

                                            </div>



                                            <div class="form-group col-l-2  m-1">
                                                <div class="text-bold-600 font-medium-2">
                                                    الجامعة
                                                </div>
                                                {!! Form::select('uni', $unis, null, ['class' => 'select2 form-control block selectuni','placeholder'=> 'إختر الجامعة']) !!}

                                            </div>


                                            <div class="form-group col-l-2  m-3">
                                                <button class="btn btn-primary" onclick="getNames(event)">بحث</button>

                                            </div>

                                        </div>

                                        </form>




                                        <table class="table table-striped table-bordered file-export col-l-12" style="width: 100%!important;">
                                            <thead>
                                            <tr>
                                                <th class="all">ID</th>
                                                <th class="all">الاسم</th>
                                                <th class="all">المذهب</th>
                                                <th class="all">المحافظة</th>
                                                <th class="all">القضاء</th>
                                                <th class="all">العنوان</th>
                                                <th class="all">الهاتف</th>
                                                <th class="all">هاتف العمل</th>
                                                <th class="all">الجامعة</th>
                                                <th class="all">إنتخب</th>

                                            </tr>
                                            </thead>
                                            @include('components/namesfiltered')
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
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>

    <script>
        $("#amelhatef").addClass("active");

        function getNames(e){
            e.preventDefault();
            var block_ele = $(".codecard");
            block_ele.block({
                message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
                overlayCSS: {
                    backgroundColor: '#FFF',
                    cursor: 'wait',
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'none'
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var form = $("#myform");
            $.ajax({
                type: 'get',
                data: form.serialize(),
                contentType: "charset=utf-8",
                success: function(data) {
                    block_ele.unblock();
                    $("#data").replaceWith(data);

                    $('.file-export').DataTable({
                        dom: 'Blfrtip',
                        "destroy": true,
                        buttons:[
                            {
                                extend: 'copy',
                                charset: 'UTF-8',
                                bom: "true"
                            },
                            {
                                extend: 'csv',
                                charset: 'UTF-8',
                                bom: "true"
                            },
                            {
                                extend: 'pdf',
                                charset: 'UTF-8',
                                bom: "true"
                            },
                            'excel', 'print', 'colvis'
                        ],
                        "searching": true,
                        pageLength: 25,
                        "lengthMenu": [[25, 50, 75,100], [25, 50, 75, 100]],
                        "ordering": true,
                        responsive: true,
                        columnDefs: [
                            {
                                "targets": [ 3],
                                "visible": true,
                                "searchable": true
                            },
                            {
                                "targets": [ 4 ],
                                "visible": true,
                                "searchable": true
                            },
                        ],

                        "oLanguage": {
                            "sSearch": "ابحث ",
                            "emptyTable":"لا توجد بيانات متوفرة في الجدول",
                            "lengthMenu":     "عرض  _MENU_ ",
                            "paginate": {
                                "first":      "الأول",
                                "last":       "الاخير",
                                "next":       "التالي",
                                "previous":   "السابق"
                            },
                        }
                    });
                    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel, .buttons-colvis').addClass('btn btn-primary mr-1');

                },
                error: function (data) {
                    block_ele.unblock();
                    alert("error has occurred");

                }
            });


        }


    </script>
@endsection
