@extends('layouts.parts')

@section('assets', '/Public/Themes/speedyvisualsTheme/Assets/')

@section('nav')
    @component('components.Nav.public-nav')
    @endcomponent
@endsection

@section('content')
    <div id="above-content"></div>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {!! $content !!}
        </div>
    </div>
    <!-- About End -->
@endsection