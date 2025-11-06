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
                            <p> إنتخب:

                                @if($result->gethaselected)
                                    @if($result->gethaselected->state =="1")
                                        نعم
                                    @else
                                        ملغى
                                        @endif

                                @else
                                    كلا
                                    @endif



                            </p>
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


