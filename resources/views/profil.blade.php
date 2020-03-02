<!DOCTYPE html>
<html lang="en">
@include("shared.header")

<!--nom de la page -->
<title>@lang('profil.title')</title>

<body>
    <div class="uk-child-width-1-2 " uk-grid>
        <div class="uk-card uk-card-default uk-width-2-5 uk-margin-auto">
            <div class="uk-card-header">
                <h4 class="uk-text-center uk-text-primary uk-text-bolder"> @lang('profil.title') </h4>
            </div>
            <div class="uk-card-body uk-text-center">
                <p class=""> <span class="uk-text-primary">@lang('profil.name')</span> : {{ Auth::User()->last_name }}
                </p>
                <p class=""> <span class="uk-text-primary">@lang('profil.firstName')</span> :
                    {{ Auth::User()->first_name }}</p>
                <p class=""> <span class="uk-text-primary">@lang('profil.society')</span> :
                    {{ Auth::User()->company->name }}</p>
                <p class=""> <span class="uk-text-primary">@lang('profil.birthDate')</span> :
                    {{ date('d/m/Y', strtotime(Auth::User()->birth_date)) }}</p>
            </div>
            <div class="uk-card-footer">
                <p class="uk-text-center"><span class="uk-text-primary">@lang('profil.role')</span> : {{ $role->name }}
                </p>
            </div>
        </div>
        <div class="uk-card uk-card-default uk-width-2-5 uk-margin-auto">
            <div class="uk-card-header">
                <h4 class="uk-text-center uk-text-danger uk-text-bolder"> @lang('profil.orders') </h4>
            </div>
            <div class="uk-card-body">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <p class="uk-text-left"> @lang('profil.commandNumber')</p>
                    </div>
                    <div>
                        <p class="uk-text-right"> @lang('profil.details')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>