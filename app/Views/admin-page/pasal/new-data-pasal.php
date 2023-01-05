<?= $this->extend('templating/template-admin') ?>
<?= $this->section('admin') ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="/">Admin</a></li>
            <li>Data Pasal</li>
        </ol>
        <h2>Buat Pasal Baru</h2>

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
                    <form action="/admin/pasal/process/create" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="name" placeholder="Judul" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description..."></textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Upload Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Upload Pasal</label>
                                    <input type="file" class="form-control" name="path_files" required>
                                </div>

                                <div class="text-center my-3"><input class="btn btn-primary" type="submit" value="Simpan"></div>

                            </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<?= $this->endSection() ?>