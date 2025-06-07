@extends('layouts.parts')

@section('assets', '/Public/Themes/speedyvisualsTheme/Assets/')

@section('nav')
    @component('components.Nav.nav')
    @endcomponent
@endsection

@section('content')
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown evo-title"></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{\EvoPhp\Api\Operations::getIndex()}}">Dashboard</a></li>
                    <li class="breadcrumb-item text-primary active evo-title" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {!! $content !!}
        </div>
    </div>
    <!-- About End -->
@endsection