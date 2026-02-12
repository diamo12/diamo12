@extends('layouts.rivet')

@section('content')
    <div class='rvt-flow rvt-prose rvt-m-top-lg rvt-m-bottom-lg rvt-m-left-lg rvt-m-right-lg'>
        <h2>Welcome to diamo12's personal website!</h2>
        <p>Hello world! This website is a self-hosted project, with the goal of hosting all of my various personal web app projects. This project is just for fun, I'm learning new things as I develop this further. I also might put silly things out there for my friends or DougDoug to see.</p>

        <h3>About me:</h3>
        <p>My real name is Brandon Fields, and I'm a web developer for IU (which should explain to you why this site uses the <a href="https://rivet.iu.edu">Rivet Design Framework</a> for styling lol). I'm a total nerd; I love video games, books/comics, anime/manga, movies, and TV. But, I also like to get out into nature and explore or get away from my screens/books to spend time with my cats, the people I care about most, or just go ride my motorcycle. I'm also a member of <a href="https://nightowlcb.com/">Night Owl Country Band</a>, where I play guitar, keyboard, and sing!</p>

        <p>So, you're probably wondering: where the heck did "diamo12" (pronounced "die-ah-mo") come from? Well, it's my gamertag (with some variations on the numbers depending on platform) in any game I play lol. I created it in 2012 when I bought Minecraft Java Edition, by taking the last 2 letters off of the word "diamond" (the strongest material in the game at that time) and adding on the last 2 numbers from that year (2012). Hence, "diamo12", or "diamo" for short, was born.</p>

        <p>Speaking of Minecraft, I'm also planning to host Minecraft servers (one for Java edition and one for Bedrock edition) from this computer. Eventually, you'll be able to use diamo12.net to connect to a Minecraft server! I'll make a dedicated Minecraft page with more information once I get them working.</p>

        <p>Like I stated above, I'm just doing this for fun; it's something to do when I get bored, and now I have a way to access these apps whenever I want to use them thanks to the domain name.</p>

        <p>The code for this site is hosted on <a href="https://github.com/diamo12/diamo12">Github</a>, which includes a Readme with more info on how this website is setup and works on the back end, as well as licensing for the code itself.</p>

        <h3>App List</h3>
        <p>Below is a list of all of the apps on this site and what they do:</p>

        <h4><a href="{{route('fallout.Randomizer')}}">Fallout S.P.E.C.I.A.L. Stat Randomizer</a></h4>
        <p>Will generate a random set of numbers to use for your S.P.E.C.I.A.L. stats in Fallout (works for Fallout 3, 4, and New Vegas).</p>

        <h4><a href="{{route('tip.Calculator')}}">Tip Calculator</a></h4>
        <p>Pretty self explanitory, takes the total of the bill and your opinion on your service (becomes tip percentage) and calculates how much you should tip based on that info.</p>
    </div>
@endsection