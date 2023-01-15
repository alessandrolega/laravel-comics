@extends('layout.app')

@section('page-title', "Comics")

@section('main-content')
<div class="current-series-cont">
    <div class="currentSeries">
        <p>CURRENT SERIES</p>
    </div>
</div> 
<div class="main-cont">
    <div class="containerComic">
        @foreach ($comic as $elem)
            <div class="comicCard">
                <div>
                    <img src="{{ $elem['thumb'] }}" alt="">
                </div>
                <div>
                    <h5>{{ $elem['title'] }}</h5>
                </div>
            </div>
        @endforeach
        <div class="btn-cont">
            <button class="btn-load">LOAD MORE</button>
        </div>
    </div>
</div>   
@endsection

@section('socials-section')
<div class="section-cont">
    <div>
        <img src="../img/buy-comics-digital-comics.png" alt="dgt">
        <span class="span-socials">DIGITAL COMICS</span>  
    </div>
    <div>
        <img src="../img/buy-comics-merchandise.png" alt="merch">
        <span class="span-socials">DC MERCHANDISE</span>  
    </div>
    <div>
        <img src="../img/buy-comics-subscriptions.png" alt="sub">
        <span class="span-socials">SUBSCRIPTION</span>
    </div>
    <div>
        <img src="../img/buy-comics-shop-locator.png" alt="shop">
        <span class="span-socials">COMIC SHOP LOCATOR</span>  
    </div>
    <div>
        <img src="../img/buy-dc-power-visa.svg" alt="visa">
        <span class="span-socials">DC POWER VISA</span>
    </div>
</div>
    
@endsection