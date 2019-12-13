<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")

<title>Kit | Nom du kit</title>

<body>

    <div class="uk-flex uk-flex-center uk-container-expand uk-margin-large-top">

        <div class="uk-card uk-card-default uk-width-1-2 uk-width-xxlarge uk-border-rounded">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <!--head de l'appli avec note moyenne + titre plus auteur + uploadeur + logo -->
                        <div class="uk-card-badge uk-label">Note Moyenne</div>
                        <img class="uk-border-circle" width="40" height="40" src="/img/pills.jpg">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">Nom du kit</h3>
                        <p class="uk-text-meta uk-margin-remove-top uk-margin-remove-bottom">Nom de la société</p>
                        <label class="uk-text-meta uk-width-auto uk-margin-remove-top uk-alert-warning">Nom + Prenom de
                            la
                            personne qui l'a ajouté</label>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <!--Images de l'appli-->
                <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-medium-bottom" tabindex="-1"
                    uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3 uk-grid uk-border-rounded">
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider1.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>1</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider2.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>2</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider3.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>3</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider4.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>4</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider5.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>5</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider1.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>6</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="https://getuikit.com/docs/uk-panel">
                                <img src="images/slider2.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>7</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider3.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>8</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider4.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>9</h1>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="https://getuikit.com/docs/images/slider5.jpg" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>10</h1>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>
                <!-- compteur de DL + Boutton pour DL -->
                <div class="uk-column-1-2 uk-margin-small-bottom">
                    <div>
                        <div class="uk-column-1-2">
                            <div>
                                <p><span class="uk-icon-button uk-alert-success" uk-icon="cart"></span> 3,5k</p>
                            </div>
                            <div>
                                <p><span class="uk-icon-button uk-alert-success"><i class="fas fa-euro-sign"></i></span>
                                    2,5/unité </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-right">
                        <a class="uk-button uk-button-secondary uk-border-rounded">
                            <i class="fas fa-cart-plus uk-margin-small-right"></i> Ajouter</a>
                    </div>
                </div>
                <!-- Patch Note-->
                <div class="uk-alert-success uk-border-rounded">
                    <div class="uk-margin-medium-left">
                        <p>Composition du produit</p>
                        <p> - description <br /> - description
                    </div>
                    </p>
                </div>
                <!-- Desription rapide de l'app -->
                <div>
                    <p class="uk-text-justify">
                        Ceci est une description du produit
                    </p>
                </div>
            </div>
            <!-- Espace commentaire -->
            <div class="uk-card-footer">
                <!-- Ecrire un commentaire -->
                <div class="uk-column-1-2 uk-margin-auto">
                    <div class="uk-margin-auto">
                        <input class="uk-input uk-border-rounded" type="text" placeholder="Ecrire un commentaire...">

                    </div>
                    <div class="uk-flex uk-flex-center">
                        <input class="uk-input uk-border-rounded uk-margin-small-right" type="text"
                            placeholder="Note sur 5">
                        <a class="uk-button uk-button-primary uk-border-rounded"> Poster</a>
                    </div>
                </div>
                <!-- Tous les commentaires -->
                <div class="uk-card uk-card-default uk-margin-small-top uk-border-rounded uk-container">
                    <div class="uk-card-header">
                        <div class="uk-flex-middle uk-text-center">
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="/img/pills.jpg">
                            </div>
                            <!--Pseudo + date du poste-->
                            <div class="uk-text-primary">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Pseudo</h3>
                                <p class="uk-text-meta uk-margin-remove-top">Date du poste</p>
                                <div>
                                    <a class="uk-text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></a>
                                </div>
                                <div class="uk-text-center">
                                    <a class="uk-text-large" style="text-decoration:none;">150M <i
                                            class="fas fa-thumbs-up uk-margin-small-top"></i></a>
                                </div>
                            </div>
                        </div> <!-- compteur de like -->
                    </div>
                    <div class="uk-card-body">
                        <!--contenu du commentaire-->
                        <p>
                            le text du commentaire
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>