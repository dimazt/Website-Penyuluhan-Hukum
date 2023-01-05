<?= $this->extend('templating/template-home') ?>
<?= $this->section('home') ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <li>Authentication</li>
    </ol>
    <h2>Registration</h2>

  </div>
</section>
<section id="contact" class="contact">
  <div class="container d-flex justify-content-center">


    <div class="row">

      <div class="col-lg py-5">
        <div class="info-box">
          <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <h4>Periksa Entrian Form</h4>
              </hr />
              <?php echo session()->getFlashdata('error'); ?>
            </div>

          <?php else : ?>
            <p class="mb-3"><strong style="color: red;">*Perhatian!</strong> Pastikan semua kolom terisi dengan benar!</p> 
            <?php endif; ?>
          <form action="/auth/process/register" method="post">
            <div class="row">
              <div class="col">
                <div class="form-floating">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" required>
                  <label for="name">Nama Lengkap</label>
                </div>
                <div class="form-floating mt-3">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                  <label for="email">Email</label>
                </div>

                <div class="form-floating mt-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>

                <div class="text-center my-3"><input class="btn btn-primary" type="submit" value="Register"></div>
                <div class="text-center my-2">
                  <p>Have an account ? <a href="/auth/login">Login here!</a></p>
                </div>
              </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<?= $this->endSection() ?>