@extends('layouts.mainbroker')
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
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">الوكلاء</h4>
                        <a href="{{ route('brokers.create') }}" class="btn btn-success">إضافة </a>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                            <table class="table table-striped table-bordered file-export2 col-l-12" style="width: 100%!important;">
                            <thead>
                            <tr>
                                <th>رقم النقابة</th>
                                <th>الاسم</th>
                                <th>رقم الهاتف</th>
                                <th>  إنتخب</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brokers as $broker)
                                <tr>
                                    <td>{{ $broker->code }}</td>
                                    <td>{{ $broker->name }}</td>
                                    <td>{{ $broker->telephone }}</td>
                                    <td>{{ $broker->status ?? 'كلا' }}</td>
                                    <td>
                                        <a href="{{ route('brokers.edit', $broker->id) }}" class="btn btn-sm btn-primary">تعديل</a>
                                        <form action="{{ route('brokers.destroy', $broker->id) }}" method="POST" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('تأكيد الحذف؟')">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection

