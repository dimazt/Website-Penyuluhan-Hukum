<?= $this->extend('templating/template-' . get_role()) ?>
<?= $this->section(get_role()) ?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <?= get_breadcumb('Pengaduan', $title) ?>
    </div>
</section>
<!-- ======= Hero Section ======= -->
<div class="container">
    <?php if (session('role') == 'admin') {
        echo '' ?>

    <?php } else { ?>
        <div class="row">
            <div class="col">
                <a href="/users/pengaduan/buat-pengaduan" class="btn btn-primary"> + Buat Aduan Baru</a>
            </div>
        </div>
    <?php } ?>
    <div class="row pt-3 mb-5">

        <div class="col">


            <table id="pengaduan" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#No</th>
                        <?php if (session('role') == 'admin') { ?>
                            <th width="30%">Nama Pengadu</th>
                        <?php } ?>
                        <th width="30%">Perkara</th>
                        <th style="text-align: center;" width="15%">Tanggal Masuk</th>
                        <th style="text-align: center;" width="15%">Status</th>
                        <th style="text-align: center;" width="5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($listAduan as $row) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <?php if (session('role') == 'admin') { ?>
                                <td><?= $row->nama ?></td>
                            <?php } ?>
                            <td><?= $row->judul ?></td>
                            <td style="text-align: center;"><?= $row->createdAt ?></td>
                            <td style="text-align: center;"><span class="badge bg-<?= $row->status == 'Menunggu Ditanggapi' ? "primary" : "success"?>"><?= $row->status ?></span></td>
                            <td style="text-align: center;"><a href="/<?= session('role')?>/pengaduan/detail/<?= $row->id_pengaduan ?>" class="btn btn-sm btn-secondary">Detail</a></td>
                        </tr>
                    <?php endforeach ?>

            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>