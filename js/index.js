var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 300);
      }   
      function showPage() {
        document.getElementById("loader").style.display = "none";
      }

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

      function display3() {
        document.getElementById('global').innerHTML = "Game 3";
        document.getElementById('ccc').style.display = "none";
        document.getElementById('dof').style.display = "none";
        document.getElementById('game3').style.display = "block";
      }