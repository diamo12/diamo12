@extends('layouts.rivet')

@push('css')
  <link rel="stylesheet" href="{{ asset('/css/tip-calc.css') }}">
@endpush

@push('head-js')
  <script
		src="https://code.jquery.com/jquery-4.0.0.js"
		integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
		crossorigin="anonymous"></script>
@endpush

@section('content')
  <div class="tip-calc-head"><h2 style="font-size: 2vw;">Tip Calculator</h2></div>
    <div class="tip-calc-container">
      <p>How much was your meal?</p>
      <input id="billAmnt" type="text" placeholder="$"></input>
      <br>
      <p>How was your service?</p>
      <select id="serviceQual">
        <option disabled selected value="0">-- Choose an Option --</option>
        <option value="0.3">30&#37; &#45; Outstanding</option>
        <option value="0.2">20&#37; &#45; Good</option>
        <option value="0.15">15&#37; &#45; It was OK</option>
        <option value="0.1">10&#37; &#45; Bad</option>
        <option value="0.05">5&#37; &#45; Terrible</option>
      </select>
      <br>
      <button id="btnCalculate" type="button">Calculate</button>
      <br><br>
      <p>Tip Amount:</p>
      <span id="tipDisplay"></span>
    </div>
@endsection

@push('js')
  <script type="text/javascript" src="{{ asset('/js/tip-calc.js') }}" charset="utf-8"></script>
@endpush