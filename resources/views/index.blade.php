@extends('layouts.index')
@section('content')
<div class="w-full h-screen flex flex-col items-center py-52 bg-gradient-to-bl from-indigo-400 to-indigo-500">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="font-medium text-red-500">
        {{ $error }}
    </div>
    @endforeach
    @endif

    @if (session('status'))
        <div onclick="this.style.display = 'none';" class="font-medium text-red-500">
            {{ session('status') }} <i class="las la-times"></i>
        </div>
    @endif
    <h1 class="text-center">Link Shortener 
by 
Bardan</h1>
    <form class="flex flex-col mb-4" action="{{ route('newlink') }}" method="post">
        @csrf
        <input class="w-60 mb-5 px-8 py-4 rounded-3xl border-indigo-200 border-b-4 placeholder-indigo-200 text-indigo-900 bg-indigo-300" value="https://" name="link" type="text" placeholder="Bv: https://google.com">
        <input id="linkname" class="w-60 mb-5 px-8 py-4 rounded-3xl border-indigo-200 border-b-4 placeholder-indigo-200 text-indigo-900 bg-indigo-300 hidden" value="" name="linkname" type="text" placeholder="Bv: google">
        <button class="border-indigo-200 border-b-4 hover:bg-indigo-200 duration-300 hover:text-indigo-900 rounded-3xl py-4 px-8 bg-indigo-900 text-indigo-200" type="submit">Submit</button>
    </form>
    <a onclick="showField()" id="textField" class="underline text-center hover:text-indigo-900 cursor-pointer">Custom link</a>
    <div>
        <a href="{{ route('mylink') }}"><button class="px-4 py-2 mb-5 bg-indigo-200 rounded-xl text-indigo-900 hover:text-indigo-200 hover:bg-indigo-900 shadow-2xl duration-300">Mijn links</button></a>
    </div>
    
</div>
<script src="{{ asset('js/addfield.js') }}"></script>
@endsection
    
