<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Accueil</title>

<body>
  <!-- bandeau temporaire pour mettre des pubs ou un petit msg-->
  <div class="uk-container">
    <div class="uk-margin-auto uk-text-center uk-margin-medium-top">
      <img class="uk-text-center" data-src="/img/welcome.png" width="" height="200" alt="" uk-img
        style="max-height:200px">
    </div>
  </div>




  <!--titre des type d'applis -->
  <div class="uk-text-left uk-margin-medium-left uk-margin-large-top uk-column-1-2">
    <div>
      <h3 class="uk-text-left"><i class="far fa-star uk-text-danger"></i> Meilleurs produits <i
          class="far fa-star uk-text-danger"></i></h3>
    </div>
    <div class="uk-text-right uk-margin-medium-right">
      <a class="uk-button uk-button-danger uk-border-rounded" href="list/kits/orderBy/grade">Plus</a>
    </div>
  </div>

  <!-- bandeau avec les applis -->
  <div class="uk-margin-medium-top">
    <div
      class="uk-grid-collapse uk-child-width-1-3@xl uk-child-width-1-1@s uk-child-width-1-3@m uk-grid uk-margin-small-left uk-margin-small-right uk-container uk-margin-auto uk-margin-medium-bottom"
      uk-gird="">
      @foreach($popularKits as $popKit)
      <div>
        <div
          class="uk-card uk-card-large uk-box-shadow-hover-large uk-border-rounded uk-card-default uk-margin-small-left uk-margin-small-right uk-margin-small-bottom ">
          <div class="uk-card-media-top uk-text-center">
            @if(isset($popKit->images[0]))
            <img src="{{ $popKit->images[0]->name }}" style="width:300; height:176" class="uk-margin-medium-bottom"
              alt="">
            @else
            <div class="uk-container uk-margin-medium-bottom ">
              <div
                class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-medium uk-margin-auto">
                <h4 class="uk-text-italic uk-text-muted">Pas d'image disponible</h4>
                <i class="fas fa-box-open fa-3x"></i>
              </div>
            </div>
            @endif
          </div>
          <div class="uk-card-body">
            <div class="uk-card-title uk-text-center"><a class="uk-button uk-button-text uk-button-large"
                href="society/kit/{{ $popKit->id }}">{{ $popKit->title }}</a>
            </div>
          </div>
          <div class="uk-card-footer">
            <div class="uk-column-1-2">
              <div class="uk-text-left">
                <p>
                  {{ str_replace(".",",",$popKit->grade) }}<i
                    class="fas fa-star uk-text-primary uk-margin-small-left"></i>
                </p>
              </div>
              <div class="uk-text-right">
                <p>
                  {{ str_replace(".",",",$popKit->price) }} €
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- fin de la boucle foreach pour applis-->

    </div>
  </div>

  <div class="uk-text-left uk-margin-medium-left uk-margin-large-top uk-column-1-2">
    <div>
      <h3 class="uk-text-left"><i class="fas fa-plus uk-text-danger"></i> Les nouveautés <i
          class="fas fa-plus uk-text-danger"></i>
      </h3>
    </div>
    <div class="uk-text-right uk-margin-medium-right">
      <a class="uk-button uk-button-danger uk-border-rounded" href="list/kits/orderBy/lastest">Plus</a>
    </div>
  </div>
  <!-- bandeau avec les applis -->
  <div class="uk-margin-medium-top">
    <div
      class="uk-grid-collapse uk-child-width-1-3@xl uk-child-width-1-1@s uk-child-width-1-3@m uk-grid uk-margin-small-left uk-margin-small-right uk-container uk-margin-auto uk-margin-medium-bottom"
      uk-gird="">
      @foreach($newKits as $newKit)
      <div>
        <div
          class="uk-card uk-card-large uk-box-shadow-hover-large uk-border-rounded uk-card-default uk-margin-small-left uk-margin-small-right uk-margin-small-bottom ">
          <div class="uk-card-media-top uk-text-center">
            @if(isset($newKit->images[0]))
            <img src="{{ $newKit->images[0]->name }}" style="width:300; height:176" class="uk-margin-medium-bottom"
              alt="">
            @else
            <div class="uk-container uk-margin-medium-bottom ">
              <div
                class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-medium uk-margin-auto">
                <h4 class="uk-text-italic uk-text-muted">Pas d'image disponible</h4>
                <i class="fas fa-box-open fa-3x"></i>
              </div>
            </div>
            @endif
          </div>
          <div class="uk-card-body">
            <div class="uk-card-title uk-text-center"><a class="uk-button uk-button-text uk-button-large"
                href="society/kit/{{ $newKit->id }}">{{ $newKit->title }}</a>
            </div>
          </div>
          <div class="uk-card-footer">
            <div class="uk-column-1-2">
              <div class="uk-text-left">
                <p>
                  {{ str_replace(".",",",$newKit->grade) }}<i
                    class="fas fa-star uk-text-primary uk-margin-small-left"></i>
                </p>
              </div>
              <div class="uk-text-right">
                <p>
                  {{ str_replace(".",",",$newKit->price) }} €
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- fin de la boucle foreach pour applis-->

    </div>
  </div>

</body>

</html>