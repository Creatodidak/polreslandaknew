<?= $this->extend('layout/dashboard'); ?>
<?= $this->section('content') ?>
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"><?= $judul ?></h3>
</div>

<div class="table-responsive">
    <table id="tberita" class="display nowrap m-1 text-dark" style="width:100%">
        <thead>
            <tr>
                <th style="text-align: center;">NO</th=>
                <th style="text-align: center;">NAMA</th=>
                <th style="text-align: center;">PANGKAT</th>
                <th style="text-align: center;">NRP</th>
                <th style="text-align: center;">JABATAN</th>
                <th style="text-align: center;">SATFUNG</th>
                <th style="text-align: center;">SATKER</th>
                <th style="text-align: center;">TANGGAL LAHIR</th>
                <th style="text-align: center;">FOTO</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($pers as $b):?>
            <tr>
               <td style="text-align: center;"><?= $no++ ?></td>
               <td style=""><?= $b->nama ?></td>
               <td style="text-align: center;"><?= $b->pangkat ?></td>
               <td style="text-align: center;"><?= $b->nrp ?></td>
               <td style="text-align: center;"><?= $b->jabatan ?></td>
               <td style="text-align: center;"><?= $b->satfung ?></td>
               <td style="text-align: center;"><?= $b->satker ?></td>
               <td style="text-align: center;"><?= $b->tanggal_lahir ?></td>
               <td style="text-align: center;"><?= $b->foto ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('ckeditor2')?>/ckeditor.js"></script>
<script src="<?= base_url('ckeditor2')?>/adapters/jquery.js"></script>
<script src="<?= base_url('assets/js/dt.js')?>"></script>

<script>
$(document).ready(function() {
    $('#tberita').DataTable();

});
CKEDITOR.replace('isiberita', {
    height: 500,
    customConfig: '<?= base_url('ckeditor2')?>/custom.js'
});
</script>
<?= $this->endSection() ?>