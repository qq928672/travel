<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b805b3133.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/Reset.css') }}">
    <title>景點</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap");
*{
	margin: 0;
	padding: 0;
	list-style: none;
}
body{
    background-size: cover;
  	background: #eeeeee;
}
img{
    width:650px;
    height:350px;
    padding-top: 25px;
}
.wrap{
	width: 100%;
	margin: auto;
}
.item_t1{
	display: flex;
	align-items: center;
	margin-bottom: 70px;
	font-family: 'Noto Sans TC', sans-serif;
}
.item_t1 h2{ 
	font-weight: 900;
	margin-bottom: 1em;
}
.item_t1 p{ 
	font-weight: 300;
    line-height: 1.7;
    color: black;
}
.item_t1 p a{
    color: black;
}
.item_t1 .pic{
	width: 55%;
	flex-shrink: 0;
}
.item_t1 .pic img{
	width: 100%;
	vertical-align: middle;
}
.item_t1 .txt{
	width: 55%;
	flex-shrink: 0;
	padding: 30px 30px;
	box-sizing: border-box;
	position: relative;
	z-index: 1;
}
.item_t1 > :first-child{
	margin-right: -10%;
}
.item_t1:nth-child(1) .txt{
	background-color: rgba(254, 121, 121, .8);
}
.item_t1:nth-child(2) .txt{
	background-color: rgba(100, 132, 199, .8);
}
  </style>
  </head>
  <body>
  @include('includes.menu')
  @section('traffic')  
  <div class="wrap">
	<!-- item 1  -->
	<div class="item_t1">
        <div class="pic">
        <img src="../img/T1.jpg" alt="">
		</div>
        <div class="txt">
        <h2>高雄火車站</h2>
                <p>是高雄重要的交通樞紐<br>便利性的設施，最完善的服務<br>高雄市三民區建國二路318號</p>
                <p><i class="fas fa-phone-alt"></i>07-2352376</p>
                <p><a href="https://www.railway.gov.tw/tra-tip-web/tip/tip00H/tipH41/viewStaInfo/440">官方網站</a></p>
		</div>
	</div>
	<!-- item 2  -->
	<div class="item_t1">
		<div class="txt">
        <h2>左營高鐵站</h2>
                <p>是三鐵構共的交通大站<br>除了有美食街以外，去其他地方也是相當便利<br>高雄市左營區高鐵路105號</p>
                <p><i class="fas fa-phone-alt"></i>4066-3000</p>
                <p><a href="https://www.thsrc.com.tw/ArticleContent/f2519629-5973-4d08-913b-479cce78a356">官方網站</a></p>
		</div>
		<div class="pic">
        <img src="../img/T2.jpg" alt="">
		</div>
    </div>
</div>
  @include('includes.footer')
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

</html>
