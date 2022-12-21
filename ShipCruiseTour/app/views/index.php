<?php require_once APPROOT.'/views/inc/header.php'; ?>

<div class="landing" class="container-fluid" style="background-image: url(<?= URLROOT.'/img/home_pic.jpeg' ?>); background-size:cover; ">
    <div class="row">
        <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="txt_lan">Life is short</h1>
            <h1 class="txt_lan">Don't be a tree</h1>
            <h1 class="txt_lan">Take your tickets and yallah</h1><br>
            <button type="button" id="reserve" class="btn btn-outline-warning">Book Now</button>
        </div>
    </div>
</div><br><br><br>

<div class="container">
    <div class="row">
        <h1>TAKE ADVENTURE TO NEW HEIGHTS</h1>
        <p>Everyone deserves a vacation. You’ll find endless opportunities to make the most of every moment — like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun</p>
    </div>
</div><br><br>

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" height="500px" src="<?= URLROOT.'/img/slider1.jpeg'?>" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" height="500px" src="<?= URLROOT.'/img/slider2.jpeg'?>" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" height="500px" src="<?= URLROOT.'/img/slider3.webp'?>" alt="Third slide">
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
</div><br><br><br>

<div class="container-fluid">
    <div class="row">
        <h2 class="center">Discrive our voyage</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img height="400px" width="100%" src="<?= URLROOT.'/img/exemple3.jpg'?>"><br>
            <p class="place">Madrid ,Spain</p>
        </div>
        <div class="col-md-6">
            <img height="300px" width="100%" src="<?= URLROOT.'/img/exemple1.jpg'?>"><br>
            <p class="place">Tokyo ,Japan</p>
        </div>
        <div class="col-md-6">
            <img height="300px" width="100%" src="<?= URLROOT.'/img/exemple2.jpg'?>"><br>
            <p class="place">Moscow ,Russia</p>
        </div>
    </div>
</div><br><br><br>


<div class="container">
    <div class="row">
        <h2 class="center">Partenariat</h2>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img width="100%" src="<?= URLROOT.'/img/part1.png'?>">
        </div>
        <div class="col-md-3">
            <img width="100%" src="<?= URLROOT.'/img/part2.png'?>">
        </div>
        <div class="col-md-3">
            <img width="100%" src="<?= URLROOT.'/img/part3.png'?>">
        </div>
    </div>
    
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>