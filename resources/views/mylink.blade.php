@extends('layouts.index')

@section('content')
<div class="w-full gap-4 h-screen flex flex-col items-center py-52 bg-gradient-to-bl from-indigo-400 to-indigo-500">
    @if ($req->link)
        <div onclick="this.classlist.add('hidden')" class="px-10 py-4 bg-green-500 rounded-2xl">
            Url met de code {{ $req->link }} succesvol toegevoegd!
        </div>
    @endif
        
    <div class="text-4xl font-semibold">Deze links zijn gemaakt op dit ip:</div>
    <a href="https://whatismyipaddress.com/ip/{{ $req->ip() }}"><div class="text-6xl font-black">{{ $req->ip() }}</div></a>
    <div class="bg-indigo-300 px-4 py-6 flex flex-col bg-opacity-50 rounded-3xl shadow-2xl">
        @foreach ($links as $link)
            <a href="{{ $link->dest }}">{{ $link->link }}</a>   
        @endforeach  
    </div>
    
</div>
  
@endsection


 
 