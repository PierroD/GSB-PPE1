<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")
<title>Home Page</title>

<body>
    <div class="card card-default container mx-auto card-body mt-5">
        <h5 class="card-title text-primary text-center text-uppercase">Profil</h5>
        <div class="row">
            <div class="col-5 card-text text-right">
                <p class="text-dark font-weight-bold"><u>Nom :</u><span class="text-primary text-uppercase ml-2">
                        Test</span>
                </p>
                <p class="text-dark font-weight-bold"><u>Prenom :</u><span class="text-primary ml-2""> Test</span>
                </p>
            </div>
            <div class=" col-2">
            </div>
            <div class="col-5 text-left">
                <p class="text-dark font-weight-bold"><u>Mail :</u><span class="text-primary ml-2"">
                        Test</span>
                </p>
                <p class=" text-dark font-weight-bold"><u>Nom de la société :</u><span class="text-primary ml-2""> Test</span>
                </p>
            </div>
        </div>
    </div>

    <h4 class=" text-center text-dark ml-5 mt-5">
                            <i class="material-icons text-primary">favorite</i>
                            <b>Vos produits préférés</b>
                            <i class="material-icons text-primary">favorite</i>
                            </h4>
                            <div class="row mx-auto">
                                <div class="col-lg-3 col-md-6 mt-4 text-center">
                                    <div class="card mx-auto" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset("/img/pills.jpg") }}"
                                            alt="Card image cap" style="height:180px">
                                        <div class="card-body">
                                            <h5 class="card-title">Nom du kit</h5>
                                            <p class="card-text" maxlength="10">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Unde quo natus
                                                iste eaque atque
                                                minus praesentium eligendi facilis ipsa et.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class=" text-center text-dark ml-5 mt-5">
                                <i class="material-icons text-primary">description</i>
                                <b>Vos factures</b>
                                <i class="material-icons text-primary">description</i>
                            </h4>
                            <div class="container mt-5 mb-5">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
</body>

</html>