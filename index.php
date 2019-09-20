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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--Scroll Plugin------------------------------>
    <script src="./vendor/scroll-entrance/src/scroll-entrance.js"></script>
    <style>[data-entrance] { visibility: hidden; }</style>

    <!--External files----------------------------->
    <link href="./images/favicon.ico" rel="shortcut icon">
    <link href="./stylesheets/index.css" rel="stylesheet" type="text/css">
    <script src="./js/index.js" rel="script" type="text/javascript"></script>
  </head>



  <!--Navigation---------------------------------->
  <body>
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a class="page" href="">
            <li>Home</li>
          </a>
          <a class="page" href="./login/lor.php">
            <li>Profile</li>
          </a>
        </ul>
      </div>
    </nav>
    


    <!--Header-------------------------------->
    <header class="container-fluid">
      <div class="parrallax">
        <div class="intro">
        <h1 class="display-6">Lame Games</h1>
        <p>Wasting time since '18</p>
        </div>
      </div>
    </header>



    <!--Information-------------------------->
    <div class="container">
      <div class="row info">
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/development.jpg">
        </section>
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Develop</h4>
            <h1 class="display-6 font-weight-bolder">Cutting Edge Games</h1>    
          </hgroup>
          <article>Here at Lame Games we use leading edge code to bring creative ideas to life. We take our development serious, as each game goes through rigorous development, testing, and deployment.</article>
        </section>
      </div>

      <div class="row info">
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Competition</h4>
            <h1 class="display-6 font-weight-bolder">Messing Around</h1>    
          </hgroup>
          <article>Not all of our games are well developed. The creators at Lame Games hold friendly coding competitions where they develop the best game they can in an alloted period of time. These videos can be seen on our YouTube channel</article>
        </section>
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/competition.png">
        </section>
      </div>
    </div>



    <!--Download-------------------------->
    <div class="row download">
      <section class="col-md-4 offset-md-4">
        <p>Want to play our games? Download our application!
        <a class="btn btn-primary" href="">Download Now</a>
      </section>
    </div>
  </body>
</html>
