
@extends('layouts.main')



@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">إنشاء حساب</h3>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-colored-form-control">إنشاء حساب</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        @if(!isset($data))

                                        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                                              action="{{ route('users.store') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userinput1">الاسم</label>
                                                            <input id="name" type="text" class="form-control w-full @error('name')  border-red-500 @enderror"
                                                                   name="name" value="{{ old('name') }}"  placeholder="الاسم"  required autocomplete="name" autofocus>
                                                            @error('name')
                                                            <p class="text-red-500 text-xs italic">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userinput2">البريد الإلكتروني</label>
                                                            <input id="email" type="text"
                                                                   class="form-control w-full @error('email') border-red-500 @enderror" name="email"
                                                                   value="{{ old('email') }}" placeholder="البريد الإلكتروني" required autocomplete="email">

                                                            @error('email')
                                                            <p class="text-red-500 text-xs italic">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userinput2">كلمه السر</label>
                                                            <input id="password" type="password"
                                                                   class="form-control w-full @error('password') border-red-500 @enderror" name="password"
                                                                  placeholder="كلمه السر" required autocomplete="new-password">
                                                            @error('password')
                                                            <p class="text-red-500 text-xs italic">
                                                                {{ $message }}
                                                            </p>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="userinput2">تأكيد كلمة السر</label>
                                                            <input id="password-confirm" type="password" class="form-control w-full"
                                                                placeholder="تأكيد كلمة السر"   name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="is_broker" name="is_broker" value="1">
                                                            <label class="form-check-label" for="if_broker"> وسيط؟</label>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="form-actions right">

                                                <button type="submit"
                                                        class="btn btn-success">
                                                    تسجيل
                                                </button>


                                            </div>
                                        </form>

                                        @else



                                                {!! Form::open(['action'=>['App\Http\Controllers\UsersController@update',$data->id],'method'=>'PUT','class'=>'w-full px-6 space-y-6 sm:px-10 sm:space-y-8']) !!}
                                                @csrf
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="userinput1">الاسم</label>
                                                                <input id="name" type="text" class="form-control w-full @error('name')  border-red-500 @enderror"
                                                                       name="name"  value="{{$data->name}}"  placeholder="الاسم"  required autocomplete="name" autofocus>
                                                                @error('name')
                                                                <p class="text-red-500 text-xs italic">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="userinput2">البريد الإلكتروني</label>
                                                                <input id="email" type="text"
                                                                       class="form-control w-full @error('email') border-red-500 @enderror" name="email"
                                                                      value="{{$data->email}}" disabled placeholder="البريد الإلكتروني" required autocomplete="email">

                                                                @error('email')
                                                                <p class="text-red-500 text-xs italic">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="userinput2">تغيير كلمه السر </label>
                                                                <input id="password" type="password"
                                                                       class="form-control w-full @error('password') border-red-500 @enderror" name="password"
                                                                       placeholder="كلمه السر"  autocomplete="new-password">
                                                                @error('password')
                                                                <p class="text-red-500 text-xs italic">
                                                                    {{ $message }}
                                                                </p>
                                                                @enderror

                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" class="form-check-input" id="is_broker" @if($data->hasRole('ROLE_BROKER')) checked @endif name="is_broker" value="1">
                                                                <label class="form-check-label" for="if_broker"> وسيط؟</label>
                                                            </div>
                                                        </div>




                                                    </div>

                                                </div>
                                                <div class="form-actions right">

                                                    <button type="submit"
                                                            class="btn btn-success">
                                                        تسجيل
                                                    </button>


                                                </div>
                                            </form>

                                            @endif

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
            $("#users").addClass("open");
            $("#adduser").addClass("active");
    </script>

    @endsection
