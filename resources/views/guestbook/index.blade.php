@extends('layouts.rivet')

@section('content')
<div class="rvt-timeline" id="guestbook-logs">
</div>
@endsection

@push('js')
<script type="text/javascript">
    var timeline = document.getElementById('guestbook-logs');
    //set template
    let template = "<div class=\"rvt-timeline__item\"><div class=\"rvt-timeline__marker\" aria-hidden=\"true\"></div><div class=\"rvt-timeline__content\"><h2 class=\"rvt-timeline__heading\">{name}</h2><span class=\"rvt-timeline__date\">{website-url}</span><p>{message}</p></div></div>";
    //get data
    fetchGuestbookData().then(value => {
        let data = value.data;
        let dataLength = data.length;
        console.log(data);
        console.log(dataLength);
        //for each guestbook log, update template and append to guestbook-logs timeline component in content.
        // for (let i = 0, i < dataLength, i++) {
        //     console.log(data[i]);
        // }
    });

    //utility functions
    async function fetchGuestbookData() {
        const url = '{{route('guestbook-logs')}}'; // The URL defined in your Laravel routes

        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            const jsonData = await response.json(); // Parse the JSON data into a JS object
            return jsonData;
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }
</script>
@endpush