@extends('layout.app')

@section('page-title', "Home")

@section('main-content')
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