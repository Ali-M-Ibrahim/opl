@extends('layouts.mainbroker')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="card">
                    <div class="card-header"><h4>إضافة </h4></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brokers.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>رقم النقابة</label>
                                <input type="text" name="code" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>رقم الهاتف</label>
                                <input type="text" name="telephone" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">حفظ</button>
                            <a href="{{ route('brokers.index') }}" class="btn btn-secondary">إلغاء</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
