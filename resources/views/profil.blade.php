<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Profil</title>

<body>
    <div class="uk-child-width-1-2 " uk-grid>
        <div class="uk-card uk-card-default uk-width-2-5 uk-margin-auto">
            <div class="uk-card-header">
                <h4 class="uk-text-center uk-text-primary uk-text-bolder"> Profil </h4>
            </div>
            <div class="uk-card-body uk-text-center">
                <p class=""> <span class="uk-text-primary">Nom</span> : {{ Auth::User()->last_name }}</p>
                <p class=""> <span class="uk-text-primary">Prénom</span> : {{ Auth::User()->first_name }}</p>
                <p class=""> <span class="uk-text-primary">Société</span> : {{ Auth::User()->company->name }}</p>
                <p class=""> <span class="uk-text-primary">Date de naissance</span> : {{ Auth::User()->birth_date }}</p>
            </div>
            <div class="uk-card-footer">
                <p class="uk-text-center"><span class="uk-text-primary">rôle</span> : {{ $role->name }}</p>
            </div>
        </div>
        <div class="uk-card uk-card-default uk-width-2-5 uk-margin-auto">
            <div class="uk-card-header">
                <h4 class="uk-text-center uk-text-danger uk-text-bolder"> Achats </h4>
            </div>
            <div class="uk-card-body">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <p class="uk-text-left"> Numéro de commande</p>
                    </div>
                    <div>
                        <p class="uk-text-right"> Voir détail</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>