<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Créer un kit</title>

<body>
    <div class="uk-container uk-margin-vertical-auto uk-card uk-card-default uk-border-rounded uk-margin-medium-top">
        <div class="uk-card-header">
            <h3 class="uk-text-center"><u>Poster un produit</u></h3>
        </div>
        <div class="uk-card-body">
            <!-- Nom d'un produit -->
            <div class="uk-column-1-2 uk-margin-auto">
                <div class="uk-text-center">
                    <p> Nom du produit</p>
                </div>
                <div class="uk-margin-auto">
                    <input class="uk-input uk-border-rounded" type="text" placeholder="Saisir le nom du produit...">
                </div>
            </div>
            <hr class="uk-divider-icon">
            <!-- Composition d'un produit -->
            <div class="uk-column-1-2 uk-margin-auto">
                <div class="uk-text-center">
                    <p> Composition du produit</p>
                </div>
                <div class="uk-margin-auto">
                    <textarea class="uk-textarea" rows="5" placeholder="Composition"></textarea>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <!-- Description d'un produit -->
            <div class="uk-column-1-2 uk-margin-auto">
                <div class="uk-text-center">
                    <p> Description du produit</p>
                </div>
                <div class="uk-margin-auto">
                    <textarea class="uk-textarea" rows="5" placeholder="Description"></textarea>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <!-- Choisir le prix d'un produit -->
            <div class="uk-column-1-2 uk-margin-auto">
                <div class="uk-text-center">
                    <p> Prix du produit</p>
                </div>
                <div class="uk-margin-auto">
                    <input class="uk-input uk-border-rounded" type="text" placeholder="Prix du produit en euro...">
                </div>
            </div>
            <!--upload images-->
            <div>
                <h5 class="uk-heading-line uk-text-center uk-margin-medium-top uk-margin-medium-bottom"><span>Choisir
                        des images </span></h5>
                <div class="js-upload uk-placeholder uk-text-center">
                    <span uk-icon="icon: cloud-upload"></span>
                    <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                    <div uk-form-custom>
                        <input type="file" multiple>
                        <span class="uk-link">selecting one</span>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                <script>
                    var bar = document.getElementById('js-progressbar');
                
                    UIkit.upload('.js-upload', {
                
                        url: '',
                        multiple: true,
                
                        beforeSend: function () {
                            console.log('beforeSend', arguments);
                        },
                        beforeAll: function () {
                            console.log('beforeAll', arguments);
                        },
                        load: function () {
                            console.log('load', arguments);
                        },
                        error: function () {
                            console.log('error', arguments);
                        },
                        complete: function () {
                            console.log('complete', arguments);
                        },
                
                        loadStart: function (e) {
                            console.log('loadStart', arguments);
                
                            bar.removeAttribute('hidden');
                            bar.max = e.total;
                            bar.value = e.loaded;
                        },
                
                        progress: function (e) {
                            console.log('progress', arguments);
                
                            bar.max = e.total;
                            bar.value = e.loaded;
                        },
                
                        loadEnd: function (e) {
                            console.log('loadEnd', arguments);
                
                            bar.max = e.total;
                            bar.value = e.loaded;
                        },
                
                        completeAll: function () {
                            console.log('completeAll', arguments);
                
                            setTimeout(function () {
                                bar.setAttribute('hidden', 'hidden');
                            }, 1000);
                
                            alert('Upload Completed');
                        }
                
                    });
                
                </script>

            </div>
            <hr class="uk-margin-medium-top uk-margin-medium-bottom">
            <button
                class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-border-rounded">Poster</button>

        </div>
    </div>
</body>

</html>