
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
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم النقابة </label>
                                                            <input id="code" type="text"  style="direction: rtl" required  class="form-control" placeholder="رقم النقابة"  name="code">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions right">

                                                <button type="button" onclick="cleardata()" class="btn btn-info mr-1">
                                                    <i class="ft-x"></i> بحث جديد
                                                </button>

                                                <button id="mybtn" onclick="submitcode(event)" class="btn btn-success">
                                                    <i class="la la-check-square-o"></i> بحث
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

                    </div>

                @include('components/useresults')

                <!-- Table header styling end -->


                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection

@section('customjs')
    <script>


      $(document).on('submit','.myform',function(){
          $(".btnsubmit").attr("disabled","true");
      });

        function submitcode(e){
            $("#mybtn").prop("disabled","true");
            $(".message").remove();
            if($("#code").val()===''){
                return($('#codeform').jqxValidator('validate'));
            }
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
            var form = $("#codeform");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'get',
                data: form.serialize(),
                success: function(data) {
                    $("#mybtn").removeAttr("disabled");
                    block_ele.unblock();
                    $("#data").replaceWith(data);
                }
            });

        }

        function cleardata(){
            $(".message").remove();
            $("#code").val("");
        }

    </script>
@endsection
