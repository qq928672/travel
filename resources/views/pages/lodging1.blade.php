@extends('layouts.lodging_1-1')

@section('main')
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
@endsection