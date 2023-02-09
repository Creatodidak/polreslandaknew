<?= $this->extend($layout); ?>
<?php foreach($data as $d):?>
<?= $this->section('content') ?>
<section class="pb-1 pt-2">
    <div class="row g-0 row-cols-1">
        <div class="col-12 col-md-10 offset-md-1 d-flex d-lg-flex flex-column justify-content-center align-items-center justify-content-lg-center"><img src="<?= base_url('assets/img/tik.png')?>" width="100px" />
            <h1 class="text-center d-flex justify-content-center">Formulir Pendataan Personil Polres Landak</h1>
        </div>
        <div class="col-12 col-md-8 offset-md-2 p-2">
            <form id="forms">
                <div class="row row-cols-1 g-0">
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">NAMA (BESERTA GELAR JIKA ADA)</label><input class="form-control form-control-lg" type="text" name="nama" required style="border-radius: 8px;" /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">PANGKAT</label><select class="form-select form-select-lg" name="pangkat" required style="border-radius: 8px;">
                            <?php foreach($pangkat as $p){echo '<option value="'.$p->pangkat.'">'.$p->pangkat.'</option>';} ?>
                        </select></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">NRP</label><input class="form-control form-control-lg" type="text" name="nrp" required style="border-radius: 8px;" /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">TANGGAL LAHIR</label><input class="form-control form-control-lg" type="date" name="tanggallahir" required style="border-radius: 8px;" /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">SATKER</label><select class="form-select form-select-lg" name="satker" required style="border-radius: 8px;">
                            <?php foreach($satker as $p){echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';} ?>
                        </select></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">FUNGSI</label><select class="form-select form-select-lg" name="fungsi" required style="border-radius: 8px;">
                            <optgroup label="TINGKAT POLRES">
                                <option value="">PIMPINAN</option>
                                <?php foreach($fres as $p){echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';} ?>
                            </optgroup>
                            <optgroup label="TINGKAT POLSEK">
                                <option value="">PIMPINAN</option>
                                <?php foreach($fsek as $p){echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';} ?>
                            </optgroup>
                        </select></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">JABATAN</label><select class="form-select form-select-lg" name="jabatan" required style="border-radius: 8px;">
                            <optgroup label="TINGKAT POLRES">
                                <?php foreach($jres as $p){echo '<option value="'.$p->jabatan.'">'.$p->jabatan.'</option>';} ?>
                            </optgroup>
                            <optgroup label="TINGKAT POLSEK">
                                <?php foreach($jsek as $p){echo '<option value="'.$p->jabatan.'">'.$p->jabatan.'</option>';} ?>
                            </optgroup>
                        </select></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">FOTO</label><input class="form-control form-control-lg" type="file" name="file" required style="border-radius: 8px;" accept="image/*" /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label" style="margin-bottom: 2px;">NOMOR WHATSAPP <strong><span style="color: rgb(255, 0, 0); background-color: rgba(255, 0, 0, 0);">(WAJIB AKTIF)</span></strong></label><input class="form-control form-control-lg" type="text" value="08" name="wa" required style="border-radius: 8px;" /></div>
                    <div class="col" style="padding: 5px;"><button class="btn btn-primary btn-lg" type="submit">REGISTER!</button></div>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?php endforeach; ?>
<?= $this->section('script') ?>
    <script>
        $('#forms').submit(function (e) { 
        e.preventDefault();
        Swal.fire({
                    title: 'Mengirim Data',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()}
                })
        $.ajax({
            type: "POST",
            url: "<?= base_url('register/action') ?>",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            success: function(response) {                
                if (response.msg == 'ok') {
                    Swal.fire({
                        title: 'Sukses',
                        text: 'BERHASIL MENDAFTAR!',
                        icon: 'success'
                    }).then(() => {
                        window.location.replace('<?= base_url() ?>')
                    })
                } else {
                    Swal.fire({
                        title: 'GAGAL MENDAFTAR!',
                        text: response.msg,
                        icon: 'error'
                    }).then(() => {
                        Swal.close();
                    })
                }
            }
        });
    });
    </script>
<?= $this->endSection() ?>
