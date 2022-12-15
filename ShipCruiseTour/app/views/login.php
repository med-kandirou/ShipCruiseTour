<?php require_once APPROOT.'/views/inc/header.php';?>

<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="<?= URLROOT.'/img/logo.png'?>" style="width: 185px;" alt="logo">
                  <h2 class="mt-1 mb-5 pb-1">Se connecter</h2>
                </div>
                <form>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email :</label>
                    <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password :</label>
                    <input type="password" id="form2Example22" class="form-control" placeholder="Your password"/>
                  </div>
                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn" type="button">Se connecter</button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
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