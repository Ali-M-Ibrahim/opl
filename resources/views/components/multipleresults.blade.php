<div id="data">
@if (!(empty($ajaxcode)))
@if(count($result)>0)
<div class="row" id="header-styling">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">نتيجة البحث </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-success white">
                            <tr>
                                <th>الرقم</th>
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>رقم الهاتف</th>
                                <th>الجامعة</th>
                                <th>إنتخب</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($result as $r)
                            <tr>
                                <td>{{$r->code}}</td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->address}}</td>
                                <td>{{$r->telephone}}</td>
                                <td>{{$r->university}}</td>
                                <td>
                                    @if($r->gethaselected)

                                        @if($r->gethaselected->state =="1")
                                            نعم
                                        @else
                                            ملغى
                                        @endif

                                    @else
                                        كلا
                                    @endif
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
</div>

@else
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">نتيجة البحث </h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>هذا الإسم خاطئ أو لا يحق له الانتخاب</p>
                </div>
            </div>
        </div>
    </div>
@endif
@endif
</div>
