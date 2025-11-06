<div id="data">
    @if (!(empty($ajax)))
        @if (!(empty($result->code)))
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">نتيجة البحث </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>الرقم:  {{$result->code}}</p>
                            <p> الإسم: {{$result->name}}</p>
                            <p> رقم الهاتف: {{$result->telephone}}</p>
                            <div class="form-actions right">
                                    @if($result->gethaselected)

                                    @if($result->gethaselected->state==='1')
                                    <div class="get-in-touch text-center">
                                        <p style="color: #009541;font-size:20px" class="mb-45" >هذا الرقم مسجل أنه إنتخب من قبل </p>
                                    </div>

                                        <div style="display: inline-block">
                                            {!! Form::open(['action'=>['App\Http\Controllers\UserController@removeelected',0],'method'=>'put','class'=> 'myform']) !!}
                                            @csrf
                                            <input type="hidden" value="{{$result->code}}" name="cifs_code"/>
                                            {{ Form::button('إلغاء', ['type' => 'submit','class'=>'btn btn-danger mr-1 btnsubmit'])}}
                                            {!! Form::close() !!}
                                        </div>

                                    @else
                                        <p style="color: #009541;font-size:20px" class="mb-45" >هذا الرقم مسجل انه ملغى</p>
                                        <div style="display: inline-block">
                                            {!! Form::open(['action'=>['App\Http\Controllers\UserController@activateelection',0],'method'=>'put','class'=> 'myform']) !!}
                                            @csrf
                                            <input type="hidden" value="{{$result->code}}" name="cifs_code"/>
                                            {{ Form::button(' إعادة إنتخاب', ['type' => 'submit','class'=>'btn btn-success mr-1 btnsubmit'])}}
                                            {!! Form::close() !!}
                                        </div>
                                        @endif
                                @else
                                    <div style="display: inline-block">
                                        {!! Form::open(['action'=>['App\Http\Controllers\UserController@haselected',0],'method'=>'put','class'=> 'myform']) !!}
                                        @csrf
                                        <input type="hidden" value="{{$result->code}}" name="cifs_code"/>
                                        {{ Form::button(' إنتخب', ['type' => 'submit','class'=>'btn btn-success mr-1 btnsubmit'])}}
                                        {!! Form::close() !!}
                                    </div>

                                @endif
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
                            <p>هذا الرقم خاطئ أو لا يحق له الانتخاب</p>
                        </div>
                    </div>
                </div>
            </div>

        @endif
        @endif



</div>


