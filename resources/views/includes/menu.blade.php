<style>
    @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap");
  .nav-link{
    font-size: 25px;
   
  }
  .nav-item{
    display: flex;
    justify-content: center;
  }
  .nav-item a{
    color:#92817a;
  }
  .navbar-toggler-icon{
  background-image: url("https://img.icons8.com/android/24/000000/menu.png");
  }
  nav li:hover {
    background-color: #e8e8e8;
    color: white;
}

</style>
<nav class="navbar navbar-expand-lg    bg-light">
  <a class="navbar-brand" href="#">{{$username}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>  
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/pages/places1') }}">景點</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/pages/food1') }}">美食</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/pages/lodging1') }}">住宿</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/pages/traffic1') }}">交通</a>
      </li>
      @if (Route::has('login'))
        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}">登出</a>
            </li>
        @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">註冊</a>
                </li>
            @endif
        @endif
      @endif
    </nav>
    