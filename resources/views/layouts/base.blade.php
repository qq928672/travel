<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Reset.css') }}">
    <title>高雄玩透透</title>
  </head>
  <style>
     @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap");
*{
	margin: 0;
	padding: 0;
	list-style: none;
}
body{
	background: #eeeeee;
}
.wrap_1{
	padding-top:50px;
  width: 100%;
	margin: auto;
}
.item_1{
	display: flex;
	align-items:  start;
	margin-bottom: 70px;
	font-family: 'Noto Sans TC', sans-serif;
}
.item_1 h2{ 
	font-weight: 900;
	margin-bottom: 1em;
}
.item_1 p{ 
	font-weight: 300;
	line-height: 1.6;
}
.item_1 .pic{
	width: 55%;

}
.item_1 .pic_1 img{
	width: 100%;
	vertical-align: middle;
}
.item_1 .text{
	width: 55%;
	flex-shrink: 0;
  padding: 30px 30px;
  color: #92817a;
}
table{
  background-color: #fbf7f0;
}
.wrap{
	width: 100%;
	margin: auto;
	overflow: hidden;
  padding-bottom: 30px;
}
.item{
	float: left;
	position: relative;
}
.item img{
	width: 100%;
	vertical-align: middle;
}
.item:first-child{
	width: 50%;
}
.item:first-child ~ .item{
	width: 25%;
}
.item .txt{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 15px;
	box-sizing: border-box;
	text-align: center;
	color: #fff;
	background-color: rgba(0,0,0,.6);
	display: flex;
	opacity: 0;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	transform: scale(0);
	transition: .5s;
}
.item:hover .txt{
	transform: scale(1);
	opacity: 1;
}
.item h3{
	margin-bottom: .4em;
}
.item p{
	font-weight: 100;
	line-height: 1.7;
}
  </style>
  <body>
    <!-- item 1  -->
    @include('includes.menu')
    @include('includes.carousel')
    <!-- item 2  -->
     @include('includes.main')
    <!-- item 3  -->
    @include('includes.item')
   <!-- item 4  -->
    @include('includes.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
   
  </body>
</html>