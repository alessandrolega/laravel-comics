@extends('layout.app')

@section('page-title', "DC-Comic")

@section('main-content')
<!--CURRENT SERIES DIV 2-->
<div class="current-series-cont2">
    <div class="currentSeries2"></div>
</div>
<!--MAIN2 WHITE-->
<div class="main2">
    <div class="main-cont2">
        <img class="single-comic-img" src="{{$single_comic['thumb']}}" alt="">
        <!--FLEX DIVS COMIC INFO-->
    <div class="title-cont mt-5">
        <h2>{{$single_comic['title']}}</h2>
        <!--TAB PRICE-->
        <div class="d-flex justify-content-between align-items-center">
            <div class="price-cont d-flex justify-content-between align-items-center mt-4 py-3 px-3">
                <div class="text-secondary">U.S PRICE: <span class="text-white">{{$single_comic['price']}}</span></div>
                <div class="text-end text-secondary">AVAILABLE</div>
            </div>
            <div class="check-available mt-4 py-3 px-3 border-start text-white">
                Check Availability <span>&#8711;</span>
            </div>
        </div>
        <!--DESCRIPTION-->
        <div>
            <p>{{$single_comic['description']}}</p>
        </div>
    </div>
    <div class="pic-cont">
        <img class="pic-img" src="{{asset('img/picadd.jpg')}}" alt="">
    </div>
    </div> 
</div>
<!--SECT TALENT-->
<section class="sect-talent">
    <div class="sect-talent-cont">
        <!--TALENT-->
        <div class="talent-title py-4 pb-4">
            <h4>Talent</h4>
            <div class="d-flex py-3">
                <div class="art pt-4">
                    <span>Art By:</span>
                </div>
                <div class="artists">
                    @foreach ($single_comic['artists'] as $elem )
                        <span>{{$elem}}</span>    
                    @endforeach
                </div>
            </div>
            <div class="d-flex py-3">
                <div class="art">
                    <span>Written By:</span>
                </div>
                <div class="artists">
                    @foreach ($single_comic['writers']  as $writers )
                        <span>{{$writers}}</span>
                        
                    @endforeach

                </div>
            </div>
        </div>
        <!--SPECS-->
        <div class="specs-title py-4 pb-4">
            <h4>Specs</h4>
            <div class="d-flex py-3">
                <div class="art">
                    <span>Series:</span>
                </div>
                <div class="artists">
                    <span class="text-uppercase">{{$single_comic['series']}}</span>
                </div>
            </div>
            <div class="d-flex py-3">
                <div class="art">
                    <span>U.S Price:</span>
                </div>
                <div class="artists">
                    <span class="text-uppercase">{{$single_comic['price']}}</span>
                </div>
            </div>
            <div class="d-flex py-3">
                <div class="art">
                    <span>On Sale Date:</span>
                </div>
                <div class="artists">
                    <span class="text-uppercase">{{$single_comic['sale_date']}}</span>
                </div>
            </div>
        </div>

    </div>

</section>









@endsection