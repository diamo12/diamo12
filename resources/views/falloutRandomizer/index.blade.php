@extends('layouts.rivet')

@push('css')
  <link rel="stylesheet" href="{{ asset('/css/fallout-special-randomizer.css') }}">
@endpush

@section('content')
  <!-- Brandon's personal project, a Randomizer for your S.P.E.C.I.A.L. stats in Fallout 4 (I got bored and wanted to practice writing javascript)-->
  <div class="special-calc-header-container" id="Container-Head">
  	<div class="special-calc-header-wrapper" id="Wrapper-Head">
      <p class="header-text">Fallout S.P.E.C.I.A.L. Stat Randomizer</p>
  	</div>
  </div>

  <div class="special-calc-container" id="Container-1">
  	<div class="special-calc-wrapper" id="Wrapper-1">
      <p>Strength:</p><span id="strength-output">5</span><br>
      <p>Perception:</p><span id="perception-output">5</span><br>
      <p>Endurance:</p><span id="endurance-output">5</span><br>
      <p>Charisma:</p><span id="charisma-output">5</span><br>
      <p>Intellegence:</p><span id="intellegence-output">5</span><br>
      <p>Agility:</p><span id="agility-output">5</span><br>
      <p>Luck:</p><span id="luck-output">5</span><br>
      <br>
      <button class="calc-button" id="btnCalculate" type="button" onclick="calculate();">Calculate</button>
  	  <button class="calc-button" id="btnReset" type="button" onclick="reset();">Reset</button>
    </div>
  </div>
@endsection

@push('js')
  <script type="text/javascript" src="{{ asset('/js/fallout-special-randomizer.js') }}">
	</script>
@endpush