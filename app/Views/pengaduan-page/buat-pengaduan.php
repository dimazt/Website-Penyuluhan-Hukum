<?= $this->extend('templating/template-' . get_role()) ?>
<?= $this->section(get_role()) ?>
<!-- ======= Hero Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <?= get_breadcumb('Pengaduan', $title) ?>
    </div>
</section>


<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col py-5">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>

            <?php else : ?>
                <p class="mb-3"><strong style="color: red;">*Perhatian!</strong> Pastikan semua kolom terisi dengan benar!</p>
            <?php endif; ?>
            <form action="/users/pengaduan/action/create" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" name="judul" class="form-control" id="name" placeholder="Judul" required>
                            <label for="name">Judul</label>
                        </div>
                            <!-- <div name="isi_aduan" id="summernote"></div> -->
                            <textarea name="isi_aduan" id="summernote"></textarea>
                       
                      
                        <div class="text-center my-3"><input class="btn btn-primary" type="submit" value="Kirim"></div>

                    </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>