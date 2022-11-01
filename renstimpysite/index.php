<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .bg-light {
        background-color:pink!important;
      }
    </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Yet another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Blearch" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <title>Hello, world!</title>
  </head>
  <body>

  <?php
    $helloWorld = "Hello, world";
      echo '<h1>' . $helloWorld . '</h1>';
    $a = 'You\'re my wonderwall.';
    var_dump($a); // string(21) "You're my wonderwall." -- prints data type + length
  ?>
  
  <div class="container">
    <div class="row">
      <!-- Column one -->
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/ren.jpg" class="card-img-top" alt="Ren" height="300px">
          <div class="card-body">
            <h5 class="card-title">Ren Höek</h5>
            <p class="card-text">This silly little fella comes from a Cartoon Network programme.</p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <!-- Column two -->
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/stimpy.png" class="card-img-top" alt="Stimpy" height="300px">
          <div class="card-body">
            <h5 class="card-title">Stimpson J. Cat</h5>
            <p class="card-text">Stimpson, also known as Stimpy, is the ugliest cat I've ever seen.</p>
            <a href="#" class="btn btn-primary">Learn more...</a>
          </div>
        </div>
      </div>
      <!-- Column three -->
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/toastman.jpg" class="card-img-top" alt="Powdered Toast Man" height="300px">
          <div class="card-body">
            <h5 class="card-title">Powdered Toast Man</h5>
            <p class="card-text">Brave superhero and spokesperson for Powdered Toast, the breakfast treat that "tastes just like sawdust"!</p>
            <a href="#" class="btn btn-primary">Learn more!!!</a>
          </div>
        </div>
      </div>
      <!-- -->
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
