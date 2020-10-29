<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>住宿</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap");

    html,
    body {
      height: 100%
    }

    * {
      font-family: 'Noto Sans TC', sans-serif;
      padding: 0;
      margin: 0;
    }

    .main-content {
      background-color: #eeeeee;
    }

    img {
      width: 350px;
      height: 250px;
    }

    ul {
      list-style: none;
    }

    .menu_places {
      background-color: #f4f4f2;
    }

    .card {
      margin-top: 20px;
      margin-left: 50px;
    }

  </style>
</head>

<body>
  @include('includes.menu')
  @include('includes.carousel')
  <!-- start  -->
  <div class="menu_places">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">民宿</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">飯店</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">旅館</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end  -->
    <ul class="d-flex row align-items-stretch position-relative mx-md-1 mx-xl-n1">
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">草地人民宿</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">家人本舖</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">木森林香草民宿</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">高雄左營眷村民宿Naval</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">71cafe 溫度民宿</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/L1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">蔚宿佳塩_民宿</p>
          </div>
        </div>
      </li>
    </ul>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
@include('includes.footer')

</html>