<?= $this->extend('templating/template-home') ?>
<?= $this->section('home') ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <li>Authentication</li>
    </ol>
    <h2>Login</h2>

  </div>
</section>
<section id="contact" class="contact">
  <div class="container d-flex justify-content-center">


    <div class="row">

      <div class="col-lg py-5">
        <div class="info-box">
         
          <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo session()->getFlashdata('success'); ?>
            </div>
            <?php elseif (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo session()->getFlashdata('error'); ?>
            </div>
            
          <?php else : ?>
            <p class="mb-3"><strong style="color: red;">*Please Login!</strong> Sistem kami mendeteksi bahwa anda belum login!</p>
          <?php  endif; ?>
          <form action="/auth/process/login" method="post">
            <div class="row">
              <div class="col">
                <div class="form-floating">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                  <label for="name">Email</label>
                </div>

                <div class="form-floating mt-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <label for="subject">Password</label>
                </div>

                <div class="text-center my-3"><input class="btn btn-primary" type="submit" value="Login"></div>
                <div class="text-center my-2">
                  <p>Don't have account ? <a href="/auth/register">Register here!</a></p>
                </div>
              </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<?= $this->endSection() ?>