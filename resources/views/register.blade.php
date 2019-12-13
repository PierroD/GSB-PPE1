<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")
<title>Login Page</title>

<body>

  <title>Inscription</title>
  <div class="uk-container uk-margin-large-top" style="width:50%">
    <div class="uk-card uk-card-default">
      <form class="uk-text-center" method="post">
        <div class="uk-card-header">
          <h2 class=""> Inscription</h2>
          <i class="fas fa-user-circle fa-5x uk-text-center"></i>
        </div>
        <div class="uk-card-body">
          <label>Civilité</label>
          <div
            class="uk-margin-auto uk-grid-medium uk-margin-small-top uk-margin-small-bottom uk-child-width-auto uk-grid uk-flex-center"
            uk-grid>
            <label><input class="uk-radio" type="radio" name="radio2" checked> M</label>
            <label><input class="uk-radio" type="radio" name="radio2"> F</label>
            <label><input class="uk-radio" type="radio" name="radio2"> Autre</label>
          </div>
          <label class="uk-margin-large-top">Date de naissance</label>
          <div class="uk-margin">
            <input type="date" class="uk-input uk-form-width-medium" required name="datearr" id="datearr" width="50" />
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Nom" type="text" name="nom">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Prenom" type="text" name="prenom">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Pseudo" type="text" name="pseudo">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: mail"></span>
              <input class="uk-input" required="" placeholder="E-mail" type="email" name="mail">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
              <input class="uk-input" required="" placeholder="Mot de passe" type="password" name="password">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
              <input class="uk-input" required="" placeholder="Répéter le mot de passe" type="password"
                name="password2">
            </div>
          </div>
          <a href="index.php" class="uk-button uk-button-danger uk-border-rounded">Annuler</a>
          <button type="submit" class="uk-button uk-button-primary uk-border-rounded">S'inscrire</button>
          <p> Vous possédez déjà un compte ?<a href="login"> Connectez-vous.</a></p>
      </form>
    </div>
  </div>
  </div>
</body>

</html>