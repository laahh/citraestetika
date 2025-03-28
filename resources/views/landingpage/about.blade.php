@extends('landingpage.app')

@section('content')
<div class="wt-bnr-inr overlay-wraper" style="background-image: url('{{ asset('assets/images/banner/about-banner.jpg') }}');">

        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">About 1</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END --> 
        
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>About 1</li>
            </ul>
        </div>
    </div>
    @include('components.about')
    @include('components.counterAbout')



@endsection