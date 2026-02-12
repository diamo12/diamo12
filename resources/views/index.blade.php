@extends('layouts.rivet')

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
@endpush

@section('content')
    <div class='rvt-flow rvt-prose rvt-m-top-lg rvt-m-left-lg'>
        <h2>Welcome to diamo12's personal website!</h2>
        <p>Hello world! This website is a self-hosted project, with the goal of hosting all of my various personal web app projects for the fun of it. You can find more information about me, or any of the apps on this site on the <a href="{{route('about')}}">about</a> page.</p>
    </div>
@endsection