@extends('layouts.rivet')

@section('content')
<div class="rvt-prose">
    <p>Welcome to the Guestbook! Read the entries by other visitors, or create your own entry! (create page coming soon, for now send requests to me and I will add them as I'm able.)</p> <!--<a href='{{route('guestbook.create')}}'>-->
</div>
<div class="rvt-timeline rvt-m-all-md" id="guestbook-logs">
</div>
@endsection

@push('js')
<script type="text/javascript" defer>
    //set template
    let template = "<div class=\"rvt-timeline__item\"><div class=\"rvt-timeline__marker\" aria-hidden=\"true\"></div><div class=\"rvt-timeline__content\"><h2 class=\"rvt-timeline__heading\">Entry #{id}, written by {name}</h2><span class=\"rvt-timeline__date\">{created_at}</span><p><strong>User's Website:</strong> {website}<br/><strong>Message:</strong> {message}</p></div></div>";
    
    let results = '';
    
    //get data
    fetchGuestbookData().then(value => {
        let data = value.data;
        let dataLength = data.length;
        console.log(data);
        console.log(dataLength);
        //for each guestbook log, update template and append to guestbook-logs timeline component in content.
        for (let i = 0; i < dataLength; i++) {
            //console.log(data[i]);
            let id = data[i].id;
            let name = data[i].name;
            let website_url = data[i].website_url;
            let website_anchor = '<a href="'+website_url+'">' + website_url + '</a>';
            let message = data[i].message;
            let created_at = data[i].created_at;

            
            results += template.replace('{id}', id)
                .replace('{name}', name)
                .replace('{created_at}', created_at)
                .replace('{website}', website_anchor)
                .replace('{message}', message);

        }
        console.log(results);
        document.getElementById('guestbook-logs').innerHTML = results;
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