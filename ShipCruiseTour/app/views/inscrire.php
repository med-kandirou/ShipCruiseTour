<?php require_once APPROOT.'/views/inc/header.php';?>
<?php require_once APPROOT.'/views/inc/navbar.php'; ?>

<section class="h-100 gradient-form" style="margin-bottom: 450px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="<?= URLROOT.'/img/logo.png'?>" style="width: 185px;" alt="logo">
                  <h2 class="mt-1 mb-5 pb-1">S'inscrire</h2>
                </div>
                <form>
                 <div class="form-outline mb-4">
                    <label class="form-label">Nom :</label>
                    <input type="text" id="nom" class="form-control" placeholder="Nom" />
                    <p class="err" id="nom_err"></p>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Prenom :</label>
                    <input type="text" id="prenom" class="form-control" placeholder="Prenom" />
                    <p class="err" id="prenom_err"></p>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Email :</label>
                    <input type="email" id="email" class="form-control" placeholder="Phone number or email address" />
                    <p class="err" id="email_err"></p>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Password :</label>
                    <input type="password" id="password" class="form-control" placeholder="Your password"/>
                    <p class="err" id="password_err"></p>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Confirmation Password :</label>
                    <input type="password" id="confirmation" class="form-control" placeholder="Confirmation password"/>
                    <p class="err" id="confirmation_err"></p>
                  </div>
                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn" id="inscrire" type="button">S'inscrire</button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">vous avez déja un compte ?</p>
                    <a href="<?= URLROOT.'/pages/login' ?>" class="btn btn-outline-danger">Connecter</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <img class="pic-login" src="<?= URLROOT.'/img/login.jpg'?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>