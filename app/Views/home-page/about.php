<?= $this->extend('templating/template-home') ?>
<?= $this->section('home') ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <li>About</li>
    </ol>
    <h2><?= $title?></h2>

  </div>
</section>
<!-- ======= Hero Section ======= -->
<div class="container">
    <div class="row pt-5 mb-5">
        <div class="col">
            <h1>Halaman About</h1>
        </div>
    </div>
</div>
<?= $this->endSection() ?>