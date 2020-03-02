<!DOCTYPE html>
<html lang="en">
@include("shared.header")
<title>@lang('login.title')</title>

<body>
    <div class="uk-container uk-margin-large-top" style="width:50%">
        <div class="uk-card uk-card-default">
            <form class="uk-text-center" method="post">
                {{ csrf_field() }}
                <div class="uk-card-header">
                    <h2 class="">@lang('login.title')</h2>
                    <i class="fas fa-user-circle fa-5x uk-text-center"></i>
                </div>
                <div class="uk-card-body ">
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input" type="text" placeholder="@lang('login.email')"
                                value="{{ old('mail') }}" name="mail">
                        </div>
                    </div>
                    <div class=" uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
                            <input class="uk-input" name="password" type="password"
                                placeholder="@lang('login.password')">
                        </div>
                    </div>
                    <button type="submit"
                        class="uk-button uk-button-primary uk-border-rounded">@lang('login.title')</button>
                    <p>@lang('login.account') <a href="register">@lang('login.subscribe')</a></p>
            </form>
        </div>
    </div>
    </div>
</body>

</html>