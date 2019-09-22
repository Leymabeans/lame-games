<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Data--------------------------------->
    <title>Lame Games | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap--------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Scroll Plugin------------------------------>
    <script src="./js/vendor/scroll-entrance.js"></script>
    <style>[data-entrance] { visibility: hidden; }</style>

    <!--External files----------------------------->
    <link href="./images/favicon.ico" rel="shortcut icon">
    <link href="./stylesheets/index.css" rel="stylesheet" type="text/css">
  </head>
    


  <!--Header-------------------------------->
  <body>
    <header class="container-fluid">
      <div class="full-parrallax">
        <div class="intro">
        <h1 class="display-6">Lame Games</h1>
        <p>Wasting time since '18</p>
        </div>
      </div>
    </header>

    

    <!--Information-------------------------->
    <div class="container">
      <div class="row buffer" data-entrance="from-left">
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/development.jpg" width="80%" height="300px">
        </section>
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Develop</h4>
            <h1 class="display-6 font-weight-bolder">Cutting Edge Games</h1>    
          </hgroup>
          <article>Here at Lame Games we use leading edge code to bring creative ideas to life. We take our development serious, as each game goes through rigorous development, testing, and deployment.</article>
          <button type="button" class="btn btn-primary button">Download</button>
        </section>
      </div>
      
      <div class="row buffer" data-entrance="from-right">
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Competition</h4>
            <h1 class="display-6 font-weight-bolder">Messing Around</h1>    
          </hgroup>
          <article>Not all of our games are well developed. The creators at Lame Games hold friendly coding competitions where they develop the best game they can in an alloted period of time. These videos can be seen on our YouTube channel</article>
          <button type="button" class="btn btn-primary button">Watch</button>
        </section>
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/competition.png" width="80%" height="250px">
        </section>
      </div>

      <div class="row buffer" data-entrance="from-left">
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/search.png" width="80%" height="300px">
        </section>
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Search</h4>
            <h1 class="display-6 font-weight-bolder">Player Statistics</h1>    
          </hgroup>
          <article>Users can search other players statistics to see how they compare. Checking your favorite player's stats is just one search away!</article>
          <button type="button" class="btn btn-primary button" onclick="search()">Search</button>
        </section>
      </div>
    </div>



    <!--Search Modal-------------------------->
    <script src="./js/index.js" type="text/javascript"></script>
    <div id="search" class="modal">
      <div class="modal-content">
        <header class="modal-header">
          <span class="close">&times;</span>
        </header>
        <main class="modal-body">
          <div class="row">
            <form class="col-md-12" method="post" action="./profile.php" enctype="multipart/fprm-data" autocomplete="false">
              <h3 class="display-6">Search</h3>
              <input type="text" class="form-control mb-2" name="player" placeholder="Search Players" onfocus="this.placeholder = ''" required>
              <button type="submit" class="btn btn-primary btn-lg button">Search</button>
            </form>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>