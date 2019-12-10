<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
    @include("header")
    <title>Login Page</title>
  <body>
      <div class="container mt-5 mx-auto px-auto card card-body">
          <h4 class="text-center text-uppercase font-weight-light text-primary card-title"> Connection </h4>
    <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de Passe">
            </div>
            <p>Vous ne possèdez pas de compte ? <a href="/register" class="my-1 text-primary font-weight-bold" style="text-decoration: none">Créez vous un compte</a></p>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Se Connecter</button>
            </div>
    </form>
</div>
  </body>
</html>