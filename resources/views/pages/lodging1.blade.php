@extends('layouts.lodging_1-1')
<style>
  .item img {
    width: 100%;
    vertical-align: middle;
  }

  .item .txt {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 15px;
    box-sizing: border-box;
    text-align: center;
    color: #fff;
    background-color: rgba(0, 0, 0, .6);
    display: flex;
    opacity: 0;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transform: scale(0);
    transition: .5s;
  }

  .item:hover .txt {
    transform: scale(1);
    opacity: 1;
  }
</style>
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
    @foreach ($lodging as $title)
    <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
    <br>
    <h3>按讚數:</h3>
      <div class="card" style="width: 18rem;">
      <div class="item">
            <div class="txt">
              <h3>{{$title->name }}</h3>
              <br>
              <p>{{$title->phone}}</p>
              <br>
              <p>{{$title->location}}</p>
              <br>
              <p>{{$title->info}}</p>
            </div>
        <img class="card-img-top" src="../img/{{ $title->imagefile }}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{$title->name}}</p>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
  @endsection