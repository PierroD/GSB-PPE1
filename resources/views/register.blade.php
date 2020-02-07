
<!DOCTYPE html>
<html lang="en">
@include("header")


<title>Login Page</title>

<body>

  <title>Inscription</title>
  <div class="uk-container uk-margin-large-top" style="width:50%">
    <div class="uk-card uk-card-default">
      <form class="uk-text-center" method="post">
        @csrf
        <div class="uk-card-header">
          <h2 class=""> Inscription</h2>
          <i class="fas fa-user-circle fa-5x uk-text-center"></i>
        </div>
        <div class="uk-card-body">
          <label>Civilité</label>
          <div
            class="uk-margin-auto uk-grid-medium uk-margin-small-top uk-margin-small-bottom uk-child-width-auto uk-grid uk-flex-center"
            uk-grid>
            <label><input class="uk-radio" type="radio" name="gender" value="M" checked> Homme</label>
            <label><input class="uk-radio" type="radio" name="gender" value="W"> Femme</label>
            <label><input class="uk-radio" type="radio" name="gender" value="O"> Autre</label>
          </div>
          <label class="uk-margin-large-top">Date de naissance</label>
          <div class="uk-margin">
            <input type="date" class="uk-input uk-form-width-medium" required name="birth_date" id="datearr" width="50"
              value="2019-01-01" />
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Nom" type="text" value="{{ old('last_name') }}"
                name="last_name">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Prenom" type="text" value="{{ old('first_name') }}"
                name="first_name">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="Entreprise" type="text" value="{{ old('company') }}"
                name="company">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: mail"></span>
              <input class="uk-input" required="" placeholder="E-mail" type="email" value="{{ old('mail') }}"
                name="mail">
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
                name="password_confirmation">
            </div>
          </div>
          <a class="uk-button uk-button-danger uk-border-rounded">Annuler</a>
          <button type="submit" class="uk-button uk-button-primary uk-border-rounded">S'inscrire</button>
          <p> Vous possédez déjà un compte ?<a href="/login"> Connectez-vous.</a></p>
      </form>
    </div>
  </div>
  </div>
</body>

</html>