<?= $this->extend('templating/template-admin') ?>
<?= $this->section('admin') ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <?= get_breadcumb('Data Pasal', $title) ?>

    </div>
</section>
<!-- ======= Hero Section ======= -->
<div class="container">

    <div class="row">
        <div class="col">
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="/admin/pasal/buat-pasal" class="btn btn-primary"> + Upload Pasal Baru</a>
        </div>
    </div>
    <div class="row pt-3 mb-5">

        <div class="col">


            <table id="pengaduan" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#No</th>
                        <th width="20%">Judul</th>
                        <th style="text-align: center;" width="15%">Description</th>
                        <th style="text-align: center;" width="5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pasal as $row) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->judul ?></td>
                            <td><?= $row->description ?></td>
                            <td style="text-align: center;">
                                <a href="/admin/pasal/edit-pasal/<?= $row->id_pasal ?>" class="btn btn-sm icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <a href="<?= base_url('uploads/berkas-pasal/'. $row->path_files) ?>" class="btn btn-sm icon btn-info"><i class="bi bi-info-circle"></i></a>
                                <a href="/admin/pasal/delete/<?= $row->id_pasal ?>" class="btn btn-sm icon btn-danger"><i class="bi bi-x"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>

            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>