@extends('layouts.mainbroker')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="card">
                    <div class="card-header"><h4>تعديل بيانات </h4></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brokers.update', $broker->id) }}">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label>رقم النقابة</label>
                                <input type="text" name="code" class="form-control" value="{{ $broker->code }}" required>
                            </div>
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" name="name" class="form-control" value="{{ $broker->name }}" required>
                            </div>
                            <div class="form-group">
                                <label>رقم الهاتف</label>
                                <input type="text" name="telephone" class="form-control" value="{{ $broker->telephone }}">
                            </div>
                            <button type="submit" class="btn btn-success">تحديث</button>
                            <a href="{{ route('brokers.index') }}" class="btn btn-secondary">إلغاء</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
