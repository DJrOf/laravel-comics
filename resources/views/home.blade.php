@extends('layouts.layout')

@section('content')

<section class="jumbotron"></section>

<div class="series">
    <div class="currseries">
        <h2 class="h2series">Current series</h2>
        


        <div class="cardcont">
            {{-- 7
            
            @foreach($comics as $key => $val)
            
                <div class="card"> 
                    {{ $comic['title'] }} 
                </div>
                
              @endforeach --}}
            </div>
        

            {{-- <div class="card">
                <h1>title</h1>
            </div> --}}
           
        </div>

    </div>
</div>

<div class="mainav">
    <nav>
        <ul class="mainlinks">
            <li class="mainli" >DIGITAL COMICS</li>
            <li class="mainli">DC MERCHANDISE</li>
            <li class="mainli">SUBSCRIPTION</li>
            <li class="mainli">COMIC SHOP LOCATOR</li>
            <li class="mainli">DC POWER VISA</li>
        </ul>
</div>

@endsection