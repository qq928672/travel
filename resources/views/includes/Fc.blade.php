<style>
    .carousel-item {
        height: 80vh;
        min-height: 80%;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .display-4 {
        color: #ffff;
    }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/img/Fc1.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">好吃的都在這裡<h2>
                        <p class="lead">提供您最佳的美食資訊
                        </p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/img/Fc2.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">多樣化的食物種類</h2>
                <p class="lead">讓您不用在為了吃什麼而煩惱</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/img/Fc3.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">讓您吃到各式的美食</h2>
                <p class="lead">成為您心中美好的回憶</p>
            </div>
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
</header>