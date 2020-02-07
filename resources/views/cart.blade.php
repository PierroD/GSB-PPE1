
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
    <div class="uk-container-small uk-margin-auto uk-margin-medium-top uk-card uk-card-default uk-card-small uk-border-rounded uk-child-width-1-1@s uk-child-width-1-2@m"
        uk-grid>
        <div>
            <div class="uk-card-header uk-grid-collapse uk-child-width-1-4 uk-margin" uk-grid>
                <div>
                    <p class="uk-text-center"> Produit </p>
                </div>

                <div>
                    <p class="uk-text-center"> Prix </p>
                </div>
                <div>
                    <p class="uk-text-center"> Quantité </p>
                </div>
                <div class="uk-text-center">
                    <a class=" uk-text-warning" href="/shoppingcart/empty"> Supprimer </a>
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
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4 uk-margin uk-border-rounded"
                    uk-grid>
                    <div class="uk-card-body">
                        <div>
                        <a class="uk-text-small uk-text-emphasis" href="/society/kit/{{ $Item->id }}"> {{ $Item->name }} </a>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ str_replace(".",",",$Item->price) }}</p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ $Item->quantity }} </p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                        <a class="uk-text-warning" href="/shoppingcart/delete/{{ $Item->id }}" uk-icon="trash"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="uk-card-body uk-text-center">
            @foreach($ItemsCollection as $Item)
            <p class="uk-small-text">{{ $Item->name}} : {{ str_replace(".",",",$Item->price) }} x {{ $Item->quantity }} = {{ str_replace(".",",",$Item->price * $Item->quantity) }}€</p>
            @endforeach
            <hr>
            <p class="uk-text-bold uk-text-bottom">Total : {{ str_replace(".",",", $CartTotalPrice) }}€</p>
            <button class="uk-button uk-button-primary uk-border-rounded">Payer</button>
        </div>
        @endif
        @endif

    </div>
</body>

</html>