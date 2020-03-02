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
  <nav class="uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">
      <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav-primary"><span uk-navbar-toggle-icon></span> <span
          class="uk-margin-small-left">@lang('header.menu')</span>
      </a>
    </div>
    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        @if(!Auth::check())
        <a class="uk-button uk-button-danger uk-margin-medium-right uk-border-rounded" href="/login">
          @lang('header.notConnected')
        </a>
        @else
        <div class="uk-inline uk-margin-medium-right">
          <button class="uk-button uk-button-default uk-text-success" type="button">@lang('header.connected')<i
              class="fas fa-angle-down uk-margin-small-left"></i></button>
          <div uk-dropdown>
            <ul class="uk-nav uk-dropdown-nav uk-text-center">
              <li><a href="/profil"> <i class="far fa-user uk-text-danger"></i> @lang('header.myProfil')</a></li>
              <li><a href="/buys"><i class="fas fa-shopping-cart uk-text-danger"></i> @lang('header.myOrders')</a></li>
            </ul>
          </div>
        </div>
        @endif
        <a href="/shoppingcart" class="uk-margin-small-right"><span class="uk-badge uk-text-small uk-text-top"
            disabled>@if(Auth::check()==true){{ Cart::session(Auth::User()->id)->getTotalQuantity() }}@else 0
            @endif</span><span class="uk-icon-button uk-alert-primary" uk-icon="cart" offset="100"></span></a>
      </ul>
    </div>
  </nav>

  <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; mode: reveal">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column ">

      <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
        <li class="uk-active"><a href="/" class="uk-text-danger">Logo</a></li>
        <li>
          <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize uk-text-danger"
            type="button">@lang('header.search') <i class="fas fa-sort-down uk-margin-small-left"></i></a>
          <div uk-dropdown="pos: bottom-justify; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
              <li class="uk-active"><a class="uk-text-danger" href="#">@lang('header.elementList')</a></li>
              <li class="uk-nav-divider"></li>
              <li><a href="/list/kits">@lang('header.kitsList')</a></li>
              <li><a href="/list/societies">@lang('header.laboratoriesList')</a></li>
              <li class="uk-nav-divider"></li>
              <li><a href="/list/">@lang('header.laboratoriesAndkitsList')</a></li>
            </ul>
          </div>
        </li>
        <li class="uk-nav-header uk-text-danger">@lang('header.shoppingCart')</li>
        <a href="/shoppingcart" class="uk-margin-small-right"><span
            class="uk-badge uk-text-small uk-text-top uk-text-danger"
            disabled>@if(Auth::check()==true){{ Cart::session(Auth::User()->id)->getTotalQuantity() }}@else 0
            @endif</span><span class="uk-icon-button uk-alert-primary uk-text-danger" uk-icon="cart"
            offset="100"></span></a>
        <li class="uk-nav-divider"></li>
        @if(Auth::check()==true)
        <li class="uk-margin-medium-bottom uk-margin-medium-top">
          <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize uk-text-danger" type="button"><i
              class="far fa-user"></i> @lang('header.hello') {{Auth::User()->last_name}} <i
              class="fas fa-sort-down uk-margin-small-left"></i></a>
          <div uk-dropdown="pos: bottom-justify; mode: click">
            <ul class="uk-nav uk-dropdown-nav">
              <li class="uk-active"><a class="uk-text-danger" href="#">@lang('header.optionsList')</a></li>
              <li><a href="/profil"> <i class="far fa-user uk-text-danger"></i> @lang('header.myProfil')</a></li>
              <li><a href="/buys"><i class="fas fa-shopping-cart uk-text-danger"></i> @lang('header.myOrders')</a></li>
              <li class="uk-nav-divider"></li>
              <li class="uk-margin-small-top"><a href="/disconnect"
                  class="uk-button uk-button-danger uk-button-small uk-border-rounded uk-margin-small-right uk-text-light">@lang('header.disconnected')</a>
              </li>
            </ul>
          </div>
        </li>

        @else
        <li class="uk-margin-small-top"><a href="/register"
            class="uk-button uk-button-danger uk-button-small uk-border-rounded uk-margin-small-right">@lang('header.register')</a>
        </li>
        <li class="uk-margin-small-top"> <a href="/login"
            class="uk-button uk-button-default uk-button-small uk-border-rounded uk-margin-small-right uk-text-danger">@lang('header.login')</a>
        </li>
        @endif
      </ul>

    </div>
  </div>
</header>