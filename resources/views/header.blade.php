<html>

<head>
  <!-- UiKit -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/uikit.min.css" />
  <script src="/js/uikit.min.js"></script>
  <script src="/js/uikit-icons.min.js"></script>

  <!-- Font Awesome cdn-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<header>
  <nav class="uk-navbar-container" uk-navbar>
    <!-- Barre de navigation éléments de gauche-->
    <div class="uk-navbar-left">

      <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="/">Logo</a></li>
        <li>
          <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize" type="button">Recherche <i
              class="fas fa-sort-down uk-margin-small-left"></i></a>
          <div uk-dropdown="pos: bottom-justify; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
              <li class="uk-active"><a class="uk-text-primary" href="#">Liste des éléments</a></li>
              <li class="uk-nav-divider"></li>
              <li><a href="#">Liste des kits</a></li>
              <li><a href="#">Liste des laboratoires</a></li>
            </ul>
          </div>
        </li>
      </ul>

    </div>

    <!-- Barre de navigation éléements de droite-->
    <div class="uk-navbar-right">

      <ul class="uk-navbar-nav">
        <a href="cart" class="uk-margin-small-right"><span class="uk-badge uk-text-small uk-text-top"
            disabled>2</span><span class="uk-icon-button uk-alert-primary" uk-icon="cart"></span></a>
        <a href="register" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-right">Inscription</a>
        <a href="login" class="uk-button uk-button-default uk-border-rounded uk-margin-small-right">Connexion</a>
      </ul>

    </div>
    

  </nav>
</header>