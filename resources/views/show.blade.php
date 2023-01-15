@extends('layout.app')

@section('page-title', "DC-Comic")

@section('main-content')
<div class="current-series-cont2">
    <div class="currentSeries2"></div>
</div>

<div class="main-cont2">
    <img src="{{$single_comic['thumb']}}" alt="">
</div>





@endsection