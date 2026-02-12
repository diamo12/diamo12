<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tip Calculator</title>
    <!-- Load Styles -->
    <link rel="stylesheet" href="{{ asset('/css/tip-calc.css') }}">

    <!-- Load jQuery -->
    <script
			  src="https://code.jquery.com/jquery-4.0.0.js"
			  integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
			  crossorigin="anonymous"></script>
  </head>
  
  <body>
    <div class="tip-calc-head">Tip Calculator</div>
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

    <!-- Load Scripts -->
    <script type="text/javascript" src="{{ asset('/js/tip-calc.js') }}" charset="utf-8"></script>
  </body>
</html>