@extends('layouts.rivet')

@section('content')
    <div class='rvt-flow rvt-prose rvt-m-top-lg rvt-m-bottom-lg rvt-m-left-lg rvt-m-right-lg'>
        <h2>Welcome to diamo12's personal website!</h2>
        <p>Hello world! This website is a self-hosted project, with the goal of hosting all of my various personal web app projects for the fun of it.</p>

        <p>Below is a list of all of the apps on this site and what they do:</p>

        <h3><a href="{{route('fallout.Randomizer')}}">Fallout S.P.E.C.I.A.L. Stat Randomizer</a></h3>
        <p>Will generate a random set of numbers to use for your S.P.E.C.I.A.L. stats in Fallout (works for Fallout 3, 4, and New Vegas).</p>

        <h3><a href="{{route('tip.Calculator')}}">Tip Calculator</a></h3>
        <p>Pretty self explanitory, takes the total of the bill and your opinion on your service (becomes tip percentage) and calculates how much you should tip based on that info.</p>
    </div>
@endsection