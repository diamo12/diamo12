@extends('layouts.rivet')

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
@endpush

@section('content')
    <div class='rvt-flow rvt-prose rvt-m-top-lg rvt-m-left-lg rvt-m-right-lg'>
        <h2>Welcome to diamo12's personal website!</h2>
        <p>Hello world! This website is a self-hosted project, with the goal of hosting all of my various personal web app projects for the fun of it. You can find more information about me, or any of the apps on this site on the <a href="{{route('about')}}">about</a> page.</p>
    
        <h3>Apps:</h3>
    </div>

    <div class='rvt-flow'>
        <h3>Quick Links:</h3>
        <ul class="rvt-link-hub">
            <li class="rvt-link-hub__item">
                <a class="rvt-link-hub__link" href="#">
                <span class="rvt-link-hub__text">About</span>
                <span class="rvt-link-hub__description">Learn more about me, this site, and the various apps that this site contains.</span>
                </a>
            </li>
            <li class="rvt-link-hub__item">
                <a class="rvt-link-hub__link" href="#">
                <span class="rvt-link-hub__text">Fallout S.P.E.C.I.A.L. Stat Randomizer</span>
                <span class="rvt-link-hub__description">Be given random S.P.E.C.I.A.L. stats to use in your various Fallout playthroughs!</span>
                </a>
            </li>
            <li class="rvt-link-hub__item">
                <a class="rvt-link-hub__link" href="#">
                <span class="rvt-link-hub__text">Tip Calculator</span>
                <span class="rvt-link-hub__description">Quickly calculate how much you should tip at the restaurant!</span>
                </a>
            </li>
        </ul>
    </div>
@endsection