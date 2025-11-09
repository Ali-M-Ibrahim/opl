@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg" style="direction: rtl">

                <header class="font-semibold bg-white text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <img class="brand-logo" src="{{ asset('app-assets/images/logo/logo.png') }}">

                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            البريد الإلكتروني:
                        </label>

                        <input id="email" type="text"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            كلمت السر:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>



                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            تسجيل الدخول
                        </button>
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8"> </p>

                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection


@section('custom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const button = form.querySelector('button[type="submit"]');

            form.addEventListener('submit', function() {
                button.disabled = true;
                button.innerText = 'جاري تسجيل الدخول...';
            });
        });
    </script>
@endsection
