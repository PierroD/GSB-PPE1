<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Panier</title>

<body>
    <div
        class="uk-container-small uk-margin-auto uk-margin-medium-top uk-card uk-card-default uk-card-small uk-border-rounded">
        <div class="uk-card-header uk-grid-collapse uk-child-width-1-5 uk-margin" uk-grid>
            <div>
                <p class="uk-text-center"> Image </p>
            </div>
            <div>
                <p class="uk-text-center"> Produit </p>
            </div>
            <div>
                <p class="uk-text-center"> Laboratoire </p>
            </div>
            <div>
                <p class="uk-text-center"> Prix </p>
            </div>
            <div>
                <p class="uk-text-center"> Quantité </p>
            </div>
        </div>
        <div class="uk-card-body uk-text-center">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-5 uk-margin uk-border-rounded"
                uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img src="/img/pills.jpg" alt="" uk-cover>
                </div>
                <div class="uk-card-body">
                    <div>
                        <p> Dolipranne </p>
                    </div>
                </div>
                <div class="uk-card-body">
                    <div>
                        <p> Pierro </p>
                    </div>
                </div>
                <div class="uk-card-body">
                    <div>
                        <p> 2.5 € </p>
                    </div>
                </div>
                <div class="uk-card-body">
                    <div>
                        <p> 5 </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-card-footer uk-text-center uk-column-1-2">
            <p class="uk-text-bold uk-text-bottom">Total : 12.5€</p>
            <button class="uk-button uk-button-primary uk-border-rounded">Payer</button>
        </div>
    </div>
</body>

</html>