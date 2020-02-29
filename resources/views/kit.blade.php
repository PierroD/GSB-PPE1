<!DOCTYPE html>
<html lang="en">
@include("header")

<title>Kit | {{ $kit->title }} by {{ $kit->society->name }}</title>

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
                            {{ $kit->society->name }}</p>

                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <!--Images de l'appli-->
                @if(count($kit->images) > 1) <div
                    class="uk-position-relative uk-visible-toggle uk-light uk-margin-medium-bottom" tabindex="-1"
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
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>
                @else
                <div class="uk-container uk-margin-medium-bottom ">
                    <div
                        class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-medium uk-margin-auto">
                        <h4 class="uk-text-italic uk-text-muted">@lang('kit.noImage')</h4>
                        <i class="fas fa-box-open fa-3x"></i>
                    </div>
                </div>
                @endif
                <!-- compteur de DL + Boutton pour DL -->
                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-margin-small-bottom">
                    <div>
                        <div class="uk-column-1-2">
                            <div>
                                <p><span class="uk-icon-button uk-alert-success" uk-icon="cart"></span> 3,5k</p>
                            </div>
                            <div>
                                <p><span class="uk-icon-button uk-alert-success"><i class="fas fa-euro-sign"></i></span>
                                    {{ str_replace(".",",",$kit->price) }} @lang('kit.priceUnit')</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-child-width-1-2@m uk-child-width-1-1@s">

                        <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-right" id="add-cart"
                            href="/shoppingcart/add/{{ $kit->id }}/">

                            <i class="fas fa-cart-plus uk-margin-small-right"></i> @lang('kit.add')
                        </a>

                        <select id="quantity" class="uk-select uk-width-auto uk-border-rounded"
                            uk-tooltip="title: Quantity; pos: top-center">
                            <option value="1">1</option>
                            <option value="10">10</option>
                            <option value="100">100</option>
                            <option value="1000">1000</option>
                        </select>
                    </div>
                </div>
                <!-- Patch Note-->
                <div class="uk-alert-success uk-border-rounded">
                    <div class="uk-margin-medium-left">
                        <p> @lang('kit.kitComposition') : </br> {{ $kit->composition }} </p>

                    </div>

                </div>
                <!-- Desription rapide de l'app -->
                <div class="uk-margin-medium-left">
                    <p class="uk-text-justify">
                        <p>@lang('kit.kitDescription') : <br /> {{ $kit->description }} </p>
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
                        <a class="uk-button uk-button-primary uk-border-rounded">@lang('kit.post')</a>
                    </div>
                </div>
                @if(count($kit->comments) > 1)
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
                @else
                <div class="uk-container uk-margin-medium-top ">
                    <div
                        class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-large uk-margin-auto">
                        <h4 class="uk-text-italic uk-text-muted">@lang('kit.noComment')</h4>
                        <i class="fas fa-comment-slash fa-3x"></i>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</body>

</html>

<script>
    const link = document.getElementById("add-cart");
    link.addEventListener('click', event => {
       var quantityElt = document.getElementById("quantity");
       var quantityValue = quantityElt.options[quantityElt.selectedIndex].value; 
       var UrlElt = link.href;
        link.href += quantityValue;
    });
</script>