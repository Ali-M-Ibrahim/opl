
@extends('layouts.mainuser')



@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">بحث عن دكتور</h3>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card codecard">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">البحث عن طريق الرقم</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show ">
                                    <div class="card-body">
                                        <form id="codeform" class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم النقابة</label>
                                                            <input id="code" type="text" style="direction: rtl" required  class="form-control" placeholder="رقم النقابة"  name="code">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions right">

                                                <button type="button" onclick="savedata(event)" class="btn btn-info mr-1">
                                                    <i class="ft-check"></i> إنتخب
                                                </button>


                                                @if($errors->any())
                                                    @foreach($errors->all() as $error)
                                                        <div class="get-in-touch text-center">
                                                            <p style="color: #009541;font-size:20px" class="mb-45 message" >هذا الرقم مسجل أنه إنتخب من قبل </p>
                                                        </div>
                                                    @endforeach
                                                @endif

                                                @if (session('code')==='200')
                                                    <div class="get-in-touch text-center">
                                                        <p style="color: #009541;font-size:20px" class="mb-45 message" >تم تسجيل الرقم على أنه إنتخب</p>
                                                    </div>
                                                @endif

                                                @if (session('code')==='500')
                                                    <div class="get-in-touch text-center">
                                                        <p style="color: #009541;font-size:20px" class="mb-45 message" >تم إلغاء هذا الرقم</p>
                                                    </div>
                                                @endif

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">الأرقام المنتخبة</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered file-export2 col-l-12" style="width: 100%!important;">
                                            <thead>
                                            <tr>
                                                <th class="all">الرقم</th>
                                                <th class="all">أجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody id="datahere">


                                            </tbody>
                                        </table>
                                        <form id="myfinalform">
                                            <button id="mybtn" onclick="submitcode(event)" class="btn btn-success">
                                                <i class="la la-check-square-o"></i> إرسال
                                            </button>

                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection

@section('customjs')
    <script>

        window.onbeforeunload = function() {
            submitcode(event);

        };



        var myarray = [];

        function submitcode(e){
            $("#mybtn").prop("disabled","true");
            $(".message").remove();
            e.preventDefault();
            var finaldata= [];
            $( ".getcode" ).each(function() {
                finaldata.push( $.trim($(this).text()));
            });
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
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'get',
                data: {"codes":finaldata},
                success: function(data) {
                    myarray=[];
                    $("#datahere").replaceWith(' <tbody id="datahere"></tbody>');
                    $("#mybtn").removeAttr("disabled");
                    block_ele.unblock();

                }
            });

        }





        function savedata(e){
            e.preventDefault();
            var code=$("#code").val();
            if(code!=="" && jQuery.inArray(code, myarray) === -1)
            {
                myarray.push(code);
                $("#datahere").append("<tr class='"+code+"'><td class='getcode' >"+code+" </td><td><a href='javascript:deleteme("+code+")'><i class='la la-close'></i>إلغاء </a></td></tr>")
                var code=$("#code").val("");
            }
        }
        function deleteme(code){
          $("."+code).remove();
        }
    </script>
@endsection
