@section('title', 'Contact Form')
@extends('front.layout.app')
@section('content')
    <div class="container mx-auto bg-white">
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4 mt-10">
                    <form class="px-6 py-6" method="POST" action="{{ route('form.contact.store') }}">
                        @csrf
                        <div class="relative w-full mb-3">
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full border-sand-800 focus:ring-sand-800" type="text" name="name" :value="old('name')" required autofocus placeholder="Name" />
                        </div>
                        <div class="relative w-full mb-3">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full border-sand-800 focus:ring-sand-800" type="email" name="email" :value="old('email')" required placeholder="Email" />
                        </div>
                        <div class="relative w-full mb-3">
                            <x-label for="subject" :value="__('Subject')" />
                            <x-input id="subject" class="block mt-1 w-full border-sand-800 focus:ring-sand-800" type="text" name="subject" :value="old('subject')" required placeholder="Subject" />
                        </div>
                        <div class="relative w-full mb-3">
                            <x-label for="message" :value="__('Message')" />
                            <textarea id="message" rows="7" class="px-3 py-3 placeholder-tree-300 text-tree-900 bg-white rounded text-sm shadow focus:ring-2 focus:border-transparent focus:outline-none w-full ease-linear transition-all duration-150 block mt-1 w-full border-sand-800 focus:ring-sand-800"  name="message" required placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        <input type="hidden" name="category" value="contact" />
                        <div class="text-center mt-6">
                            <x-button class="ml-3" class="block w-full">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection