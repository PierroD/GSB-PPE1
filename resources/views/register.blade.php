<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
    @include("header")
    <title>Login Page</title>
  <body>
      <div class="container mt-5 mx-auto px-auto card card-body">
          <h4 class="text-center text-uppercase font-weight-light text-primary card-title"> Enregistrement </h4>
    <form>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                             <label for="inputPrenom4">Prenom</label>
                            <input type="text" class="form-control" id="inputPrenom4" placeholder="Prenom">
                        </div>
                            <div class="form-group col-md-6">
                            <label for="inputNom4">Nom</label>
                            <input type="text" class="form-control" id="inputNom4" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Mail</label>
                        <input type="email" class="form-control" id="inputMail4" placeholder="Mail">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
                      </div>
                    </div>
                    <div class="form-group">
                            <label for="inputAddress">Nom de la société</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Les SLAMeux">
                          </div>
                    <div class="form-group">
                      <label for="inputAddress">Adresse</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="38, rue Pierre Dupont">
                    </div>
                    <p>Vous possèdez déjà un compte ? <a href="/login" class="my-1 text-primary font-weight-bold" style="text-decoration: none">Connectez-vous</a></p>
                    <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enregistrement</button>
                    </div>
                  </form>
    </form>
</div>
  </body>
</html>