<?= $this->extend('templating/template-home') ?>
<?= $this->section('home') ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/foto1.png)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Web Penyuluhan Hukum</span></h2>
              <p class="animate__animated animate__fadeInUp">Deskripsi.</p>

            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated fanimate__adeInDown">Welcome to <span>Web Penyuluhan Hukum 2</span></h2>
              <p class="animate__animated animate__fadeInUp">Deskripsi.</p>

            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Web Penyuluhan Hukum 3</span></h2>
              <p class="animate__animated animate__fadeInUp">Deskripsi.</p>

            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->


<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col entries">

        <div class="row">
          <?php foreach($pasal as $row) { ?>
            <!-- Atur jumlah kolom pasal -->
            <div class="col-lg-3 col-md-4 col-sm-6">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url('uploads/thumbnail/'. $row->thumbnail)?>" alt="" class="img-fluid">
              </div>

              <h5 class="entry-title">
                <a target="blank" href="<?= base_url('uploads/berkas-pasal/'. $row->path_files) ?>"><?= $row->judul?></a>
              </h5>
              <p><?= $row->description?></p>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>Posted</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01"><?= $row->updatedAt?></time></li>
                </ul>
              </div>

             
            </article><!-- End blog entry -->

          </div>
         <?php } ?>
        </div>
        <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->

      </div><!-- End blog entries list -->

      
    </div>

  </div>
</section>
<?= $this->endSection() ?>