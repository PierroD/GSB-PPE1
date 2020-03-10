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

<div class="uk-grid-collapse uk-child-width-1-2 uk-margin uk-border-rounded uk-text-center uk-margin-remove-bottom"
    uk-grid>
    <div class="uk-card uk-card-default uk-background-muted uk-width-1-6" style="height: 100vh">
        <div class="uk-card-header">
            <p class="uk-card-title uk-text-danger uk-text-uppercase">Admin</p>
        </div>
        <div class="uk-card-body uk-text-left uk-height-medium ">
            <ul class="uk-list uk-list-divider">
                <li>
                    <a class="uk-button uk-button-link uk-text-emphasis uk-margin-small-top uk-margin-small-bottom"
                        href="/admin"><i class="fas fa-users"></i> Gérer les utilisateurs</a>
                </li>
                <li>
                    <a class="uk-button uk-button-link uk-text-emphasis uk-margin-small-top uk-margin-small-bottom"
                        href="/admin/society"><i class="fas fa-building"></i> Gérer les sociétés</a>
                </li>
                <li>
                    <a class="uk-button uk-button-link uk-text-emphasis uk-margin-small-top uk-margin-small-bottom"
                        href="/admin/product"><i class="fas fa-flask"></i> Gérer les produits</a>
                </li>
            </ul>
        </div>
        <div class="uk-height-large uk-flex uk-flex-bottom uk-flex-center">
            <a class="uk-button uk-button-danger uk-border-rounded" href="/disconnect"><i
                    class="fas fa-power-off uk-margin-small-right"></i> Déconnexion</a>
        </div>
    </div>