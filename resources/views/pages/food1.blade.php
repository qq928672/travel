@extends('layouts.food_1-1')
<script src="https://kit.fontawesome.com/0b805b3133.js" crossorigin="anonymous"></script>
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

  .menu_food {
    background-image: url(../img/Tr8.jpg);
    background-size: cover;
  }
  h3 {
    color: #f6f5f1;
  }
  button{
    color: red;
  }
</style>
@section("main")
<div class="menu_food">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('food1')}}">平價美食</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('food2')}}">在地小吃</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('food3')}}">人氣推薦</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end  -->

  <ul class="d-flex row align-items-stretch position-relative mx-md-1 mx-xl-n1">
    @foreach ($foods as $title)
    <?php
    $n = "{$title->id}";
    $c = "{$title->type}";
    ?>
    <li class="col-12 col-xl-4 mb-3 mb-md-4 px-xl-2">
      <br>
      @if (Route::has('login'))
      @auth
      <form method="GET">
        <h3>按讚數:<?php echo "<input type=image src=../img/heart.png height=30px;name=$n value={$title->likes}>{$title->likes}";?></h3>
      </form>
      <?php
       if (isset($_GET["$n"."_x"])) {
        DB ::table('food_models')
          ->where('id', $n)
          ->increment('likes', 1);
        header("Location: food$c");
        exit;
      }
      ?>
      @else
      
      @endif
      @endif
      <div class="card" style="width: 18rem;">
        <div class="item">
          <div class="txt">
            <h2>{{$title->name }}</h2>
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