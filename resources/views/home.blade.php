@extends('layouts.layout')

@section('content')

<section class="jumbotron"></section>

<div class="series">
    <div class="currseries">
        <h2 class="h2series">Current series</h2>
    </div>    


        <div class="cardcont">
           
            
            @foreach($comics as $comic)
            
                <div class="card"> 
                    <div class="coverimg">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                   <h2>{{ $comic['title'] }}</h2>  
                </div>
                
              @endforeach 
            </div>
        

            {{-- <div class="card">
                <h1>title</h1>
            </div> --}}
           
        

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