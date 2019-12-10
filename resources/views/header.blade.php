<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">

  <!-- CSS -->
  <!-- Add Material font (Roboto) and Material icon as needed -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Add Material CSS, replace Bootstrap CSS -->

  <link href="/css/material.min.css" rel="stylesheet">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
  <script src="/js/material.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-primary" href="http://127.0.0.1:8000">GSBMarketPlace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Recherche
          </button>
          <div class="dropdown-menu">
            <span class="dropdown-item-text text-primary">Choisir une catégorie</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Liste des laboratoires</a>
            <a class="dropdown-item" href="#">Liste des kits</a>
          </div>
        </div>
      </li>
    </ul>
    <div>
      <button class="btn btn-float btn-sm text-primary disabled" type="button">0</button>
      <a href="#"><i class="material-icons text-primary mr-5">
          shopping_cart
        </i></a>

    </div>
    <form class="form-inline my-2 my-lg-0">
      <a type="button" class="btn btn-outline-info btn-sm" href="/login">Se connecter</a>
    </form>
  </div>
</nav>