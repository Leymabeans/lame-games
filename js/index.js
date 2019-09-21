/*Opening LOS modal===============================*/
function los() {
  var span = document.getElementsByClassName("close")[0];
  var modal = document.getElementById("los");
  modal.style.display = "block";
  span.onclick = function() {
    modal.style.display = "none";
  }
}


/*Display game statistics========================*/
function display1() {
  document.getElementById('global').innerHTML = "Cross Country Collin";
  document.getElementById('ccc').style.display = "block";
  document.getElementById('dof').style.display = "none";
  document.getElementById('game3').style.display = "none";
}
      
function display2() {
  document.getElementById('global').innerHTML = "Duel of the Fates";
  document.getElementById('ccc').style.display = "none";
  document.getElementById('dof').style.display = "block";
  document.getElementById('game3').style.display = "none";
}