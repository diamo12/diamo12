@extends('layouts.rivet')

@section('content')
<div class="rvt-timeline" id="guestbook-logs">
</div>
@endsection

@push('js')
<script type="text/javascript">
    var timeline = document.getElementById('guestbook-logs');
    //get data
    var results = '';

    //set template
    let template = "<div class=\"rvt-timeline__item\"><div class=\"rvt-timeline__marker\" aria-hidden=\"true\"></div><div class=\"rvt-timeline__content\"><h2 class=\"rvt-timeline__heading\">{name}</h2><span class=\"rvt-timeline__date\">{website-url}</span><p>{message}</p></div></div>";

    loadJSON();

    if(results!=null) {
        //for each guestbook log, update template and append to guestbook-logs timeline component in content.
        
        console.log(results);
        
        // results.foreach((result, index) => {
        //     console.log(`Element at index ${index} is ${number}`);

        // });
    } else {
        template = '<p>No guestbook logs to load... something must be wrong.</p>';

        timeline.prepend(template);
    }

    //utility functions
    function loadJSON(){
        //alert(url);
        let request = new XMLHttpRequest();

        request.open('GET', 'https://diamo12.net/guestbook-logs');
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                results = JSON.parse(request.responseText);
            }else{
                results = null;
            }
        };
        request.send();
    }
</script>
@endpush