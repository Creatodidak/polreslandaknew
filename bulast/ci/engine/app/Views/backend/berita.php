<?= $this->extend('layout/dashboard'); ?>
<?= $this->section('content') ?>
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"><?= $judul ?></h3>
</div>
<style>

</style>
<div id="accordion-1" class="accordion" role="tablist">
    <div class="accordion-item">
        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false"
                aria-controls="accordion-1 .item-1">Daftar Berita</button></h2>
        <div class="accordion item-1" role="tabpanel" data-bs-parent="#accordion-1">
            <div class="accordion-body">
                <div class="table-responsive">
                    <table id="tberita" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">NO</th=>
                                <th style="text-align: center;">JUDUL</th=>
                                <th style="text-align: center;">ACT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($berita as $b):?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++ ?></td>
                                    <td><a href="<?= base_url('berita/baca/'.$b->link) ?>" target="blank"><?= $b->judul ?></a></td>
                                    <td style="text-align: center;"><span style="cursor:pointer; font-weight:bold" class="text-danger" onclick="delberita(<?= $b->id ?>)">HAPUS</span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false"
                aria-controls="accordion-1 .item-2">Input Berita</button></h2>
        <div class="accordion item-2" role="tabpanel" data-bs-parent="#accordion-1">
            <div class="accordion-body">
                <form id="formberita">
                    <div class="row g-0 row-cols-1">
                        <div class="col d-flex flex-column pt-2"><label class="form-label" style="margin: 0px;">Judul
                                Berita</label><input class="form-control-lg" type="text" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Saran: Minimal 4 Kata" name="judul" required /></div>
                        <div class="col d-flex flex-column pt-2"><label class="form-label" style="margin: 0px;">Nama
                                Penulis</label><input class="form-control-lg" type="text" name="penulis" required /></div>
                        <div class="col d-flex flex-column pt-2"><label class="form-label" style="margin: 0px;">Isi
                                Berita</label><textarea required id="isiberita" name="isiberita"></textarea></div>
                        <div class="col d-flex flex-column pt-2"><label class="form-label" style="margin: 0px;">Kategori
                                Berita</label><select class="form-select-lg" name="kategori" required>
                                <?php
                                    foreach($kategori as $d){
                                        echo '<option value="'.$d->kategori.'">'.$d->kategori.'</option>';
                                    }
                                ?>
                            </select></div>
                        <div class="col d-flex flex-column pt-2"><label class="form-label"
                                style="margin: 0px;">Foto</label>
                                <img class="col-12 col-md-3 m-3" id="ajaxImgUpload" alt="Preview Image" src="<?=base_url('assets/img/preview.png')?>"/><input class="form-control-lg mb-2" type="file"
                                accept="image/*" required id="file" name="file" onchange="onFileUpload(this)"/><input class="form-control-lg" type="text"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Saran: Minimal 4 Kata"
                                placeholder="Caption Foto" name="caption" required /></div>
                        <div class="col d-flex flex-column pt-2"><button class="btn btn-primary" type="submit">PUBLISH <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                    fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M501.6 4.186c-7.594-5.156-17.41-5.594-25.44-1.063L12.12 267.1C4.184 271.7-.5037 280.3 .0431 289.4c.5469 9.125 6.234 17.16 14.66 20.69l153.3 64.38v113.5c0 8.781 4.797 16.84 12.5 21.06C184.1 511 188 512 191.1 512c4.516 0 9.038-1.281 12.99-3.812l111.2-71.46l98.56 41.4c2.984 1.25 6.141 1.875 9.297 1.875c4.078 0 8.141-1.031 11.78-3.094c6.453-3.625 10.88-10.06 11.95-17.38l64-432C513.1 18.44 509.1 9.373 501.6 4.186zM369.3 119.2l-187.1 208.9L78.23 284.7L369.3 119.2zM215.1 444v-49.36l46.45 19.51L215.1 444zM404.8 421.9l-176.6-74.19l224.6-249.5L404.8 421.9z">
                                    </path>
                                </svg></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item <?php if(session()->level > 2){echo'd-none';} ?>">
        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false"
                aria-controls="accordion-1 .item-3">Rekapitulasi Berita</button></h2>
        <div class="accordion item-3" role="tabpanel" data-bs-parent="#accordion-1">
            <div class="accordion-body">
                <p class="mb-0 text-dark">
                    <?php $no=1; foreach($allberita as $a){
                        echo $no++.'. *'.$a->judul.'* '.base_url('berita/baca/'.$a->link).'<br>';
                    }?>
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('ckeditor2')?>/ckeditor.js"></script>
<script src="<?= base_url('ckeditor2')?>/adapters/jquery.js"></script>
<script src="<?= base_url('assets/js/dt.js')?>"></script>

<script>
   $(document).ready(function() {
    $('#tberita').DataTable();
 
} );
    CKEDITOR.replace('isiberita', {
      height: 500,
      customConfig: '<?= base_url('ckeditor2')?>/custom.js'
    });
    function onFileUpload(input, id) {
            id = id || '#ajaxImgUpload';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(id).attr('src', e.target.result).width(300)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    
    $('#formberita').submit(function (e) { 
        e.preventDefault();
        var fd = new FormData(this);
        fd.append('isiberita', CKEDITOR.instances['isiberita'].getData());
        $.ajax({
            type: "POST",
            url: "<?= base_url('landak/updberita') ?>",
            method: "POST",
            data: fd,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function(response) {
                if (response.msg == 'ok') {
                    Swal.fire({
                        title: 'Sukses',
                        text: 'Berita Berhasil Di Publish!',
                        icon: 'success'
                    }).then(() => {
                        location.reload();
                    })
                } else {
                    Swal.fire({
                        title: 'Berita Gagal Di Publish',
                        text: response.msg,
                        icon: 'error'
                    }).then(() => {
                        location.reload();
                    })
                }
            }
        });
    });

    function delberita(id) {
        Swal.fire({
            title: 'Hapus Berita Ini?',
            text: "Berita tidak akan dapat dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "<?= base_url('landak/delberita') ?>/"+id,
                    dataType: "json",
                    success: function (response) {
                        if (response.msg == 'ok') {
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Berita Berhasil Di Hapus!',
                                icon: 'success'
                            }).then(() => {
                                location.reload();
                            })
                        } else {
                            Swal.fire({
                                title: 'Berita Gagal Di Hapus',
                                text: response.msg,
                                icon: 'error'
                            }).then(() => {
                                location.reload();
                            })
                        }
                    }
                });
            }
        })
        
    }
  
</script>
<?= $this->endSection() ?>