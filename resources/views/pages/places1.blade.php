@extends('layouts.places_1-1')

@section("main")
<!-- start  -->
<div class="menu_places">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">古蹟</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">特色地標</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">藝文特區</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end  -->
    <ul class="d-flex row align-items-stretch position-relative mx-md-1 mx-xl-n1">
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">左營廍後薛家古厝</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">美濃水橋</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_3.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">旗山國小</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_4.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">旗山天后宮</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_5.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">竹寮取水站</p>
          </div>
        </div>
      </li>
      <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/P_6.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">金瓜寮聖蹟亭</p>
          </div>
        </div>
      </li>
    </ul>
@endsection