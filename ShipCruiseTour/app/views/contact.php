<?php require_once APPROOT.'/views/inc/header.php';?>
<?php require_once APPROOT.'/views/inc/navbar.php'; ?>

<section class="h-100 gradient-form" style="margin-bottom: 400px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="<?= URLROOT.'/img/logo.png'?>" style="width: 185px;" alt="logo">
                  <h2 class="mt-1 mb-5 pb-1">Contact Us</h2>
                </div>
                <form>
                 <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nom :</label>
                    <input type="email" id="form2Example11" class="form-control" placeholder="Nom" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email :</label>
                    <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Message :</label>
                    <textarea  id="form2Example11" class="form-control" rows="7" placeholder="Message"></textarea>
                  </div>
                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn" type="button">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <img class="pic-login" src="<?= URLROOT.'/img/contact.webp'?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>