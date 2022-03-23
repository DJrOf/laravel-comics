@extends('layouts.layout')

@section('content')

<section class="jumbotron"></section>

<div class="series">
    <div class="currseries">
        <h2 class="h2series">Current series</h2>
    </div>    
   
    
    <ul>
        <li>{{  $comic['title'] }}</li>
        <li>{{  $comic['description'] }}</li>
        <li>{{  $comic['thumb'] }}</li>
        <li>{{  $comic['price'] }}</li>
        <li>{{  $comic['series'] }}</li>
        <li>{{  $comic['sale_date'] }}</li>
        <li>{{  $comic['type'] }}</li>
       
    </ul>
    
    
    
    

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