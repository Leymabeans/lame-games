var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 300);
      }   
      function showPage() {
        document.getElementById("loader").style.display = "none";
      }

      function display1() {
        document.getElementById('global').innerHTML = "Game 1";
        document.getElementById('game1').style.display = "block";
        document.getElementById('game2').style.display = "none";
        document.getElementById('game2').style.display = "none";
      }
      
      function display2() {
        document.getElementById('global').innerHTML = "Game 2";
        document.getElementById('game1').style.display = "none";
        document.getElementById('game2').style.display = "block";
        document.getElementById('game3').style.display = "none";
      }

      function display3() {
        document.getElementById('global').innerHTML = "Game 3";
        document.getElementById('game1').style.display = "none";
        document.getElementById('game2').style.display = "none";
        document.getElementById('game3').style.display = "block";
      }