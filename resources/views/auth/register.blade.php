<!DOCTYPE html>
<html lang="en">
@include("shared.header")


<title>@lang('register.title')</title>

<body>

  <div class="uk-container uk-margin-large-top" style="width:50%">
    <div class="uk-card uk-card-default">
      <form class="uk-text-center" method="post">
        @csrf
        <div class="uk-card-header">
          <h2 class=""> @lang('register.title')</h2>
          <i class="fas fa-user-circle fa-5x uk-text-center"></i>
        </div>
        <div class="uk-card-body">
          <label>@lang('register.gender')</label>
          <div
            class="uk-margin-auto uk-grid-medium uk-margin-small-top uk-margin-small-bottom uk-child-width-auto uk-grid uk-flex-center"
            uk-grid>
            <label><input class="uk-radio" type="radio" name="gender" value="M" checked>
              @lang('register.genderMan')</label>
            <label><input class="uk-radio" type="radio" name="gender" value="W"> @lang('register.genderWoman')</label>
            <label><input class="uk-radio" type="radio" name="gender" value="O"> @lang('register.genderOther')</label>
          </div>
          <label class="uk-margin-large-top">@lang('register.birthdate')</label>
          <div class="uk-margin">
            <input type="date" class="uk-input uk-form-width-medium" required name="birth_date" id="datearr" width="50"
              value="2019-01-01" />
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="@lang('register.name')" type="text"
                value="{{ old('last_name') }}" name="last_name">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: user"></span>
              <input class="uk-input" required="" placeholder="@lang('register.firstName')" type="text"
                value="{{ old('first_name') }}" name="first_name">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              @lang('register.society')
              <select class="uk-select uk-width-auto uk-border-rounded" name="company_id">
                @foreach($companies as $company)
                <option required="" value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-icon" uk-icon="icon: mail"></span>
              <input class="uk-input" required="" placeholder="@lang('register.email')" type="email"
                value="{{ old('mail') }}" name="mail">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
              <input class="uk-input" required="" placeholder="@lang('register.password')" type="password"
                name="password">
            </div>
          </div>
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-form-icon-flip uk-icon" uk-icon="icon: lock"></span>
              <input class="uk-input" required="" placeholder="@lang('register.repeatPassword')" type="password"
                name="password_confirmation">
            </div>
          </div>
          <a class="uk-button uk-button-danger uk-border-rounded">@lang('register.cancel')</a>
          <button type="submit"
            class="uk-button uk-button-primary uk-border-rounded">@lang('register.subscribe')</button>
          <p>@lang('register.account')<a href="/login">@lang('register.login')</a></p>
      </form>
    </div>
  </div>
  </div>
</body>

</html>