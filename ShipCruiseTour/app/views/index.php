<?php require_once APPROOT.'/views/inc/header.php'; ?>

<div class="landing" class="container-fluid" style="background-image: url(<?= URLROOT.'/img/home_pic.jpeg' ?>);">
    <div class="row">
        <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Life is short </h1>
            <h1>Don't be a tree</h1>
            <h1>Lets have fun in canari</h1>
            <h1>Take your tickets and yallah</h1><br>
            <button type="button" id="reserve" class="btn btn-primary">Reserve Now</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>TAKE ADVENTURE TO NEW HEIGHTS</h1>
        <p>Everyone deserves a vacation. You’ll find endless opportunities to make the most of every moment — like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img id="pic_about" src="<?= URLROOT.'/img/home_pic.jpeg' ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto beatae, possimus ipsum quae culpa voluptatem molestiae delectus blanditiis accusantium vel? Quas in saepe dolores dolor. Possimus voluptatum autem ducimus aspernatur.</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <h2>Discrive our voyage</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img height="400px" width="100%" src="<?= URLROOT.'/img/exemple3.jpg'?>"><br>
            <p>title</p>
            <button type="button" class="btn btn-primary">Explore more</button>
        </div>
        <div class="col-md-6">
            <img height="300px" width="100%" src="<?= URLROOT.'/img/exemple1.jpg'?>"><br>
            <p>title</p>
            <button type="button" class="btn btn-primary">Explore more</button>
        </div>
        <div class="col-md-6">
            <img height="300px" width="100%" src="<?= URLROOT.'/img/exemple2.jpg'?>"><br>
            <p>title</p>
            <button type="button" class="btn btn-primary">Explore more</button>
        </div>
        
    </div>
</div>


<div class="container">
    <div class="row">
        <h2>Partenariat</h2>
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