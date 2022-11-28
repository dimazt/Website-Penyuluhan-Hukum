<?= $this->extend('templating/template-admin') ?>
<?= $this->section('admin') ?>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

  <?= get_breadcumb('Dashboard',$title) ?>

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