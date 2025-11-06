
@extends('layouts.main')



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

                                                <button onclick="submitcode(event)" class="btn btn-success">
                                                    <i class="la la-check-square-o"></i> بحث
                                                </button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card namecard">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-colored-form-control">البحث عن طريق الإسم</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse ">
                                    <div class="card-body">
                                        <form class="form" id="namecode">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userinput1">الاسم</label>
                                                            <input type="text" id="name" required class="form-control"  placeholder="الاسم"    name="name">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions right">

                                                <button type="button" onclick="cleardataname()" class="btn btn-info mr-1">
                                                    <i class="ft-x"></i> بحث جديد
                                                </button>

                                                <button onclick="submitname(event)" class="btn btn-success">
                                                    <i class="la la-check-square-o"></i> بحث
                                                </button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @include('components/singleresults')


                @include('components/multipleresults')

                    <!-- Table header styling end -->


                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection

@section('customjs')
    <script>

        function submitcode(e){
            var regex = '^[a-zA-Z]+(?://[0-9]+)*$';
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
            $.ajax({
                type: 'get',
                data: form.serialize(),
                success: function(data) {
                    block_ele.unblock();
                    $("#data").replaceWith(data);
                }
            });

        }

        function cleardata(){
            $("#code").val("");
        }

        function cleardataname(){
            $("#name").val("");
            $("#fname").val("");
            $("#lname").val("");
        }

        function submitname(e){
            if( $("#name").val()===''  || $("#lname").val()==='' ){
                return($('#codeform').jqxValidator('validate'));

            }
            e.preventDefault();
            var block_ele = $(".namecard");
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
            var form = $("#namecode");
            $.ajax({
                type: 'get',
                data: form.serialize(),
                success: function(data) {
                    block_ele.unblock();
                    $("#data").replaceWith(data);
                }
            });
        }

        $("#searchcode").addClass("active");
    </script>
@endsection
