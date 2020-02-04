<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Panier</title>

<body>
    @if(isset($notConnected))
    <div class="uk-text-center uk-margin-auto">
        <div class="uk-alert-danger uk-margin-auto" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p class="uk-text-center">Vous devez être connecté pour avoir un panier</p>
        </div>
        <a class="uk-button uk-button-primary uk-border-rounded" href="/login">Se connecter</a>
    </div>
    @else
    <div class="uk-container-small uk-margin-auto uk-margin-medium-top uk-card uk-card-default uk-card-small uk-border-rounded uk-child-width-2-1"
        uk-grid>
        <div>
            <div class="uk-card-header uk-grid-collapse uk-child-width-1-3 uk-margin" uk-grid>
                <div>
                    <p class="uk-text-center"> Produit </p>
                </div>

                <div>
                    <p class="uk-text-center"> Prix </p>
                </div>
                <div>
                    <p class="uk-text-center"> Quantité </p>
                </div>
            </div>
            @if(isset($empty))
            <div class="uk-container uk-margin-medium-bottom">
                <div
                    class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-medium uk-margin-auto uk-margin-medium-bottom">
                    <h4 class="uk-text-italic uk-text-muted">Pas de produits</h4>
                    <i class="fas fa-box-open fa-3x"></i>
                </div>
            </div>
            @else
            @foreach($ItemsCollection as $Item)
            <div class="uk-card-body uk-text-center">
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3 uk-margin uk-border-rounded"
                    uk-grid>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ $Item->name }} </p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ $Item->price }}</p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ $Item->quantity }} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="uk-card-body uk-text-center uk-column-1-2">
            <p class="uk-text-bold uk-text-bottom">Total : {{ \Cart::getSubTotal() }}€</p>
            <button class="uk-button uk-button-primary uk-border-rounded">Payer</button>
        </div>
        @endif
        @endif

    </div>
</body>

</html>