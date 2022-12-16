<?php require_once APPROOT.'/views/inc/header.php'; ?>
<?php require_once APPROOT.'/views/inc/navbar.php'; ?>


<div class="container-fluid">
    <div class="row" style="background-image: url(<?= URLROOT.'/img/home_pic2.jpeg' ?>); height: 200px;">
        <h1 id="title_about">About Us</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6"><br><br><br>
            <h2>Who are we ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto beatae, possimus ipsum quae culpa voluptatem molestiae delectus blanditiis accusantium vel? Quas in saepe dolores dolor. Possimus voluptatum autem ducimus 
                aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto beatae,
                possimus ipsum quae culpa voluptatem molestiae delectus blanditiis accusantium vel? Quas in saepe dolores dolor. Possimus voluptatum autem ducimus aspernatur.</p>
        </div>
        <div class="col-md-6">
            <img id="pic_about" src="<?= URLROOT.'/img/home_pic.jpeg' ?>" >
        </div>
    </div>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>