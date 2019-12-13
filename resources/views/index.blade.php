<link rel="stylesheet" href="/css/material.css">
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
      <button class="uk-button uk-button-danger uk-border-rounded">Plus</button>
    </div>
  </div>

  <!-- bandeau avec les applis -->
  <div class="uk-margin-medium-top">
    <div class="uk-grid-collapse uk-child-width-1-6 uk-grid uk-margin-medium-left uk-margin-medium-right" uk-gird="">
      <!-- TODO mettre une boucle foreach -->

      <div>
        <div class="uk-card uk-card-large uk-box-shadow-hover-large uk-card-default">
          <div class="uk-card-media-top">
            <img src="/img/pills.jpg" alt="">
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title uk-text-center">Dolipranne</h3>
          </div>
          <div class="uk-card-footer">
            <div class="uk-column-1-2">
              <div class="uk-text-left">
                <p>
                  Note sur 5
                </p>
              </div>
              <div class="uk-text-right">
                <p>
                  Prix : €
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

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
      <button class="uk-button uk-button-danger uk-border-rounded">Plus</button>
    </div>
  </div>

</body>

</html>