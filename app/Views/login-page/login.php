<?= $this->extend('templating/template-home') ?>
<?= $this->section('home') ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Login</li>
    </ol>
    <h2>Login</h2>

  </div>
</section>
<section id="contact" class="contact">
  <div class="container d-flex justify-content-center">


    <div class="row">

      <div class="col-lg py-5">
        <div class="info-box">
          <p class="mb-3"><strong style="color: red;">*Please Login!</strong> Sistem kami mendeteksi bahwa anda belum login!</p>
          <form action="/auth/process" method="post">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" name="email" class="form-control" id="name" placeholder="Email" required>
                </div>

                <div class="form-group mt-3">
                  <input type="password" class="form-control" name="password" id="subject" placeholder="Password" required>
                </div>

                <div class="text-center my-3"><input class="btn btn-primary" type="submit" value="Login"></div>
              </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<?= $this->endSection() ?>