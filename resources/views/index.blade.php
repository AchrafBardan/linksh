@extends('layouts.index')
@section('content')
<div class="w-full h-screen flex flex-col items-center py-52 bg-gradient-to-bl from-indigo-400 to-indigo-500">
    @error('link')
                        <div class="font-medium text-red-500">
                            Error
                        </div>
                    @enderror
    <form class="flex flex-col gap-4" action="{{ route('newlink') }}" method="post">
        @csrf
        <input class="w-60  px-8 py-4 rounded-3xl border-indigo-200 border-b-4 placeholder-indigo-200 text-indigo-900 bg-indigo-300" value="https://" name="link" type="text" placeholder="Bv: https://google.com">
        <button class="border-indigo-200 border-b-4 hover:bg-indigo-200 duration-300 hover:text-indigo-900 rounded-3xl py-4 px-8 bg-indigo-900 text-indigo-200" type="submit">Submit</button>
    </form>
</div>
    
@endsection
    
