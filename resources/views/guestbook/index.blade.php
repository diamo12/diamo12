@extends('layouts.rivet')

@section('content')
<div class="rvt-timeline" id="guestbook-logs">
</div>
@endsection

@push(js)
<script type="text/javascript">
    //get data
    let results = 

    //set template
    let template = "<div class=\"rvt-timeline__item\"><div class=\"rvt-timeline__marker\" aria-hidden=\"true\"></div><div class=\"rvt-timeline__content\"><h2 class=\"rvt-timeline__heading\">{name}</h2><span class=\"rvt-timeline__date\">{website-url}</span><p>{message}</p></div></div>";

    //for each guestbook log, update template and append to guestbook-logs timeline component in content.
</script>
@endpush