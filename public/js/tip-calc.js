$(document).ready(function() {
  $('#btnCalculate').click(function() {
    //get values for amount and quality
    var billAmnt = $('#billAmnt').val();
    var quality = $('#serviceQual').val();

    //validate inputs
    if (billAmnt === "" || quality == 0) {
      alert("Please fill out the form");
      return;
    }

    //calculate tip amount
    var total = (billAmnt * quality);
    //round to 2 decimal places
    total = Math.round(total * 100) / 100
    //always have 2 digits after decimal
    total = total.toFixed(2);

    $('#tipDisplay').html("$" + total);
  });
});
