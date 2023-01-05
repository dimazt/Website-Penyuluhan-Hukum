<?= $this->extend('templating/template-'. get_role()) ?>
<?= $this->section(get_role()) ?>
<section id="breadcrumbs" class="breadcrumbs">
<div class="container">
        <?= get_breadcumb('Pengaduan',$title) ?>
    </div>
</section>
<!-- ======= Hero Section ======= -->
<div class="container">
    <div class="row pt-3 mb-5">
        <div class="col">
            <table id="pengaduan" class="table table-bordered" style="width:100%">
            <thead>
                    <tr>
                        <th width="5%">#No</th>
                        <th width="20%">Nama</th>
                        <th width="30%">Perkara</th>
                        <th style="text-align: center;" width="15%">Tanggal Masuk</th>
                        <th style="text-align: center;" width="15%">Status</th>
                        <th style="text-align: center;" width="5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    for ($i = 0; $i < 10; $i++) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>Nama Pengadu</td>
                            <td>Subject Pengaduan</td>
                            <td style="text-align: center;">2011-04-25</td>
                            <td style="text-align: center;"><span class="badge bg-danger">Ditolak</span></td>
                            <td style="text-align: center;"><a href="#" class="btn btn-sm btn-secondary">Detail</a></td>
                        </tr>
                    <?php } ?>

                   
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>