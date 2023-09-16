@extends('front.layout.app')
@section('content')
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4 mt-10">
                <form class="px-6 py-6" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="relative w-full mb-3">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full border-sand-800 focus:ring-sand-800" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                </div>
                <div class="relative w-full mb-3">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full border-sand-800 focus:ring-sand-800" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>
                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input name="remember" id="customCheckLogin" type="checkbox" class="form-checkbox border-sand-800 focus:ring-sand-800 text-tree-600 ml-1 w-5 h-5 ease-linear transition-all duration-150"/>
                        <span class="ml-2 text-sm font-semibold text-tree-600">Remember me</span>
                    </label>
                </div>
                <div class="text-center mt-6">
                    <x-button class="ml-3" class="block w-full">
                        {{ __('Login') }}
                    </x-button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection