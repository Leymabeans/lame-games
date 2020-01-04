/*Opening search modal===============================*/
function search() {
  var span = document.getElementsByClassName("close")[0];
  var modal = document.getElementById("search");
  modal.style.display = "block";
  span.onclick = function() {
    modal.style.display = "none";
  }
}