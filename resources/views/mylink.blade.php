@extends('layouts.index')

@section('content')
<div class="w-full gap-4 h-screen flex flex-col items-center pt-20 bg-gradient-to-bl px-11 from-indigo-400 to-indigo-500">
    <a href="{{ route('home') }}"><button class="px-4 py-2 mb-5 bg-indigo-200 rounded-xl   hover:text-indigo-200 hover:bg-indigo-900 shadow-2xl duration-300">Terug</button></a>
    @if ($req->link)
        <div onclick="this.style.display = 'none';" class="px-10 py-4 mb-5 text-center bg-green-500 rounded-2xl">
            Url met de code {{ $req->link }} succesvol toegevoegd!
        </div>
    @endif
        
    <div class="text-center text-2xl sm:text-4xl font-semibold">Deze links zijn gemaakt op dit ip:</div>
    <a href="https://whatismyipaddress.com/ip/{{ $req->ip() }}"><div class="text-4xl sm:text-6xl font-black">{{ $req->ip() }}</div></a>
    <div class="bg-indigo-300 px-4 py-6 flex flex-col bg-opacity-50 rounded-3xl shadow-2xl">
        <table class="flex flex-col">
            @foreach ($links as $link)
            <tr class="">
                <th><a href="https://bardan.nl/{{ $link->link }}"><span class="font-light">https://bardan.nl/</span>{{ $link->link }}</a></th> 
                <th><a class="font-light" href="{{ $link->dest }}">{{ $link->dest }}</a></th>  
            </tr>
                
            @endforeach  
        </table>
        <div class="mt-5 flex flex-col">
            {{ $links->links() }}    
        </div>
        
    </div>
    
</div>
  
@endsection


 
 