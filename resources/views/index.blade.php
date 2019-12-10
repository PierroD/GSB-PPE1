<link rel="stylesheet" href="/css/material.css">
<!DOCTYPE html>
<html lang="en">
@include("header")
<title>Home Page</title>

<body>
  <!-- carousel -->
  <div class="row container mx-auto mt-5">
    <div class="col-lg-6 col-md-12">
      <div class=" mx-auto px-auto card card-body ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-auto mx-auto" src="{{ asset("img/pills.jpg") }}" alt="First slide"
                style="max-height:250px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-auto mx-auto" src="{{ asset("img/plants.jpg") }}" alt="Second slide"
                style="max-height:250px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-auto mx-auto" src="{{ asset("img/bandage.jpg") }}" alt="Third slide"
                style="max-height:250px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <h4 class="text-primary text-center"> GSBMarketPlace</h4>
      <p class="text-center"> Le meilleur market place pour trouver tous les kits dont vous avez besoins, la meilleure
        référence francaise pour les laboratoires</p>
    </div>
  </div>
  <!-- fn du carousel -->

  <h4 class="text-left text-primary ml-5 mt-5"><u>Nos meilleurs ventes : </u></h4>

  <div class="row mx-auto">
    <div class="col-lg-3 col-md-6 mt-4 text-center">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset("/img/pills.jpg") }}" alt="Card image cap" style="height:180px">
        <div class="card-body">
          <h5 class="card-title">Nom du kit</h5>
          <p class="card-text" maxlength="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quo natus
            iste eaque atque
            minus praesentium eligendi facilis ipsa et.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>

</body>

</html>