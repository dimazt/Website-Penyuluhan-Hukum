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

                    <p class="mb-3"><strong style="color: red;">*Perhatian!</strong> Pastikan semua kolom terisi dengan benar!</p>

                    <form action="/admin/pasal/process/edit/<?= $pasal->id_pasal?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" value="<?= $pasal->judul?>" class="form-control" id="name" placeholder="Judul" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description..." required><?= $pasal->description?></textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Upload Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Upload Pasal</label>
                                    <input type="file" class="form-control" name="pasal">
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