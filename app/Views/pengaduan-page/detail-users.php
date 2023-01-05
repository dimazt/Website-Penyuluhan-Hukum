<?= $this->extend('templating/template-' . get_role()) ?>
<?= $this->section(get_role()) ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <?= get_breadcumb('Pengaduan', $title) ?>
    </div>
</section>
<!-- ======= Hero Section ======= -->
<div class="container">



    <div class="row ">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Informasi Pengadu
                </div>
                <div class="card-body">
                    <!-- <div class="table-responsive"> -->
                    <table class="table">

                        <tbody>
                            <tr>
                                <td><b>Nama Pengadu :</b></td>
                            </tr>
                            <tr>
                                <td><?= $detailAduan->nama ?></td>
                            </tr>
                            <tr>
                                <td><b>Perkara :</b></td>

                            </tr>
                            <tr>
                                <td><?= $detailAduan->judul ?></td>
                            </tr>

                            <tr>
                                <td><b>Dibuat Pada : </b> <?= $detailAduan->createdAt ?></td>
                            </tr>
                        </tbody>

                    </table>
                    <!-- </div> -->
                    <button id="show_balasan" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#balasan" aria-controls="offcanvasBottom">Lihat Balasan</button>
                    <a href="" class="btn btn-danger" type="submit">Hapus Aduan</a>

                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-6 col-sm-12 mb-5">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Detail Perkara
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $detailAduan->judul ?></h5>
                    <p class="card-text"><?= $detailAduan->aduan ?></p>
                </div>
            </div>
        </div>

    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="balasan" aria-labelledby="balasanLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="balasanLabel">Balasan dari pengaduan ini</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-container">
                <div class="chat">
                    <div class="chat-header clearfix">

                        <div class="chat-about">
                            <div class="chat-with">Admin</div>

                        </div>
                        <i class="fa fa-star"></i>
                    </div> <!-- end chat-header -->

                    <div class="chat-history">
                        <!-- <ul id="show">
                        </ul> -->
                        <table>
                            <tbody id="show" ></tbody>
                        </table>

                    </div> <!-- end chat-history -->

                    <div class="chat-message clearfix">
                        <form>
                            <input type="hidden" id="id_pengaduan" value="<?= $detailAduan->id_pengaduan ?>">
                            <textarea id="reply" placeholder="Type your message" rows="3"></textarea>

                            <!-- <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-file-image-o"></i> -->

                            <button type="submit" id="save">Send</button>
                        </form>
                    </div> <!-- end chat-message -->

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>