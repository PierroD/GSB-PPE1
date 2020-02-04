<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")
<title>Connexion</title>

<body>
    <div class="uk-container uk-margin-large-top" style="width:50%">
        <div class="uk-card uk-card-default">
            <form class="uk-text-center" method="post">
                {{ csrf_field() }}
                <div class="uk-card-header">
                    <h2 class=""> Connexion</h2>
                    <i class="fas fa-user-circle fa-5x uk-text-center"></i>
                </div>
                <div class="uk-card-body ">
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input" type="text" placeholder="Adresse Mail" value="{{ old('mail') }}"
                                name="mail">
                        </div>
                    </div>
                    <div class=" uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
                            <input class="uk-input" name="password" type="password" placeholder="Mot de passe">
                        </div>
                    </div>
                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Connexion</button>
                    <p> Vous ne possédez pas de compte ?<a href="register"> Inscrivez-vous.</a></p>
            </form>
        </div>
    </div>
    </div>
</body>

</html>