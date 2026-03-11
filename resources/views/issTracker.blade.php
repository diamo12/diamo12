@extends('layouts.rivet')

@section('content')
    <div class='rvt-flow rvt-prose rvt-m-top-lg rvt-m-bottom-lg rvt-m-left-lg rvt-m-right-lg'>
        <?php
    $result = shell_exec('python3 /var/www/diamo12/python/iss.py 2>&1');
        echo $result;
        ?>
    </div>
@endsection