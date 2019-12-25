<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")

<title>Kit | {{ $kit->title }} par {{ $kit->society->company }}</title>

<body>

    <div class="uk-flex uk-flex-center uk-container-expand uk-margin-large-top">

        <div class="uk-card uk-card-default uk-width-1-2 uk-width-xxlarge uk-border-rounded">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <!--head de l'appli avec note moyenne + titre plus auteur + uploadeur + logo -->
                        <div class="uk-card-badge uk-label">{{ str_replace(".",",",$kit->grade) }} <i
                                class="fas fa-star"></i></div>
                        <img class="uk-border-circle" width="40" height="40" src="/img/pills.jpg">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{ $kit->title }}</h3>
                        <p class="uk-text-meta uk-margin-remove-top uk-margin-remove-bottom">
                            {{ $kit->society->company }}</p>
                        <label
                            class="uk-text-meta uk-width-auto uk-margin-remove-top uk-alert-warning">{{ $kit->society->last_name }}
                            {{ $kit->society->first_name }}</label>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <!--Images de l'appli-->
                <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-medium-bottom" tabindex="-1"
                    uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3 uk-grid uk-border-rounded">
                        @foreach($kit->images as $image)
                        <li>
                            <div class="uk-panel">
                                <img src="{{ $image->name }}" alt="">
                                <div class="uk-position-center uk-panel">
                                    <h1>{{ $image->id }}</h1>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @if(count($kit->images) < 1) <div uk-alert class="uk-text-center">
                        <h5 class="uk-text-italic uk-text-danger">Pas d'images disponible</h5>
                        <i class="fas fa-box-open fa-3x"></i>
                </div>
                @endif

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
                                {{ str_replace(".",",",$kit->price) }}€/unité </p>
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
                    <p>Composition du kit : </br> {{ $kit->composition }} </p>

                </div>

            </div>
            <!-- Desription rapide de l'app -->
            <div class="uk-margin-medium-left">
                <p class="uk-text-justify">
                    <p>Description : <br /> {{ $kit->description }} </p>
                </p>
            </div>
        </div>
        <!-- Espace commentaire -->
        <div class="uk-card-footer">
            <!-- Ecrire un commentaire -->
            <div class="uk-column-1-3 uk-margin-auto">
                <div class="uk-margin-auto">
                    <input class="uk-input uk-border-rounded" type="text" placeholder="Ecrire un commentaire...">

                </div>
                <div class="uk-margin-auto">
                    <input class="uk-input uk-border-rounded uk-margin-small-right" type="text"
                        placeholder="Note sur 5">
                </div>
                <div class="uk-text-center">
                    <a class="uk-button uk-button-primary uk-border-rounded">Poster</a>
                </div>
            </div>
            @foreach ($kit->comments as $comment)
            <!-- Tous les commentaires -->
            <div class="uk-card uk-card-default uk-margin-small-top uk-border-rounded uk-container">
                <div class="uk-card-header">
                    <div class="uk-flex-middle uk-text-center">
                        <div class="uk-width-auto">
                            <img class="uk-border-circle" width="40" height="40" src="/img/pills.jpg">
                        </div>
                        <!--Pseudo + date du poste-->
                        <div class="uk-text-primary">
                            <h3 class="uk-card-title uk-margin-remove-bottom">
                                {{ $comment->poster->last_name }}</h3>
                            <p class="uk-text-meta uk-margin-remove-top">{{ $comment->build_date }}</p>
                            <div>
                                <p class="uk-text-success">
                                    @php $note = $comment->note; @endphp
                                    @for($i=0;$i<6;$i++) @if($note> 0.5)
                                        @php
                                        $resultat[$i]="fas fa-star";
                                        $note--;
                                        @endphp
                                        @elseif ($note==0.5)
                                        @php
                                        $resultat[$i]="fas fa-star-half-alt";
                                        $note = $note - 0.5;
                                        @endphp
                                        @else
                                        @php
                                        $resultat[$i]="far fa-star";
                                        @endphp
                                        @endif
                                        @endfor
                                        @for($j=0;$j<4;$j++) <i class="{{ $resultat[$j] }}"></i>
                                            @endfor
                                </p>
                            </div>
                            <div class="uk-text-center">

                            </div>
                        </div>
                    </div> <!-- compteur de like -->
                </div>
                <div class="uk-card-body">
                    <!--contenu du commentaire-->
                    <p>
                        {{ $comment->text }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>

</body>

</html>