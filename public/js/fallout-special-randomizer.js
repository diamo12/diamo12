//Script for Brandon's personal project:
var strength = 1, perception = 1, endurance = 1, charisma = 1, intellegence = 1, agility = 1, luck = 1; //Declare each stat as a variable, each initialized to equal 1

var limit = 28; //total number of starting points for S.P.E.C.I.A.L. stats

var max = 21; //max amount of available points to distribute

var min = 1; //min amount of available points to distribute

//Calculate function to randomize each value, then check to make sure all values add to 28.
function calculate() {
  while (strength + perception + endurance + charisma + intellegence + agility + luck !== limit) {
    //get a randomized whole number between 1 (min) and 21 (max)
    strength = Math.floor(Math.random() * (+max - +min) + +min);
    perception = Math.floor(Math.random() * (+max - +min) + +min);
    endurance = Math.floor(Math.random() * (+max - +min) + +min);
    charisma = Math.floor(Math.random() * (+max - +min) + +min);
    intellegence = Math.floor(Math.random() * (+max - +min) + +min);
    agility = Math.floor(Math.random() * (+max - +min) + +min);
    luck = Math.floor(Math.random() * (+max - +min) + +min);
  }
  if (strength + perception + endurance + charisma + intellegence + agility + luck === limit) {
    //clear each span (all say 1 by default, just like the screen):
    document.getElementById('strength-output').innerHTML = "";
    document.getElementById('perception-output').innerHTML = "";
    document.getElementById('endurance-output').innerHTML = "";
    document.getElementById('charisma-output').innerHTML =  "";
    document.getElementById('intellegence-output').innerHTML =  "";
    document.getElementById('agility-output').innerHTML =  "";
    document.getElementById('luck-output').innerHTML =  "";

    //display the results of the while loop:
    document.getElementById('strength-output').innerHTML = strength;
    document.getElementById('perception-output').innerHTML = perception;
    document.getElementById('endurance-output').innerHTML = endurance;
    document.getElementById('charisma-output').innerHTML =  charisma;
    document.getElementById('intellegence-output').innerHTML =  intellegence;
    document.getElementById('agility-output').innerHTML =  agility;
    document.getElementById('luck-output').innerHTML =  luck;
  } else {
    console.log("Error, retrying calculation"); //error message for when this doesn't work
  }
}

function reset() {
  location.reload();
}
