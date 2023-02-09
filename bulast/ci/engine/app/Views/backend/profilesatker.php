<?= $this->extend('layout/dashboard'); ?>
<?= $this->section('content') ?>
<?php foreach($cnf as $c):?>
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"><?= $judul ?></h3>
</div>
<div class="card m-2">
    <div class="card-header">
        User Data
    </div>
    <div class="card-body">
        <form id="formuser">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="mb-3"><label class="form-label" for="nrp"><strong>NRP</strong></label><input
                            class="form-control" type="text" id="nrp" value="<?= session()->nrp ?>" name="nrp" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3"><label class="form-label" for="username"><strong>NAMA</strong></label><input
                            class="form-control" type="text" id="username" value="<?= session()->nama ?>" name="nama">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="pangkat"><strong>PANGKAT</strong></label>
                        <select class="form-select" name="pangkat" id="pangkat">
                            <?php foreach($pangkat as $p){
                                if($p->pangkat == session()->pangkat){
                                    echo '<option value="'.$p->pangkat.'" selected>'.$p->pangkat.'</option>';
                                }else{
                                    echo '<option value="'.$p->pangkat.'">'.$p->pangkat.'</option>';
                                }
                            }?>
                       </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="satker"><strong>SATUAN KERJA</strong></label>
                        <select class="form-select" name="satker" id="satker">
                            <?php foreach($satker as $p){
                                if($p->satker == session()->satker){
                                    echo '<option value="'.$p->satker.'" selected>'.$p->satker.'</option>';
                                }else{
                                    echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';
                                }
                            }?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="satfung"><strong>FUNGSI</strong></label>
                        <select class="form-select" name="satfung" id="satfung">
                            <optgroup label="TINGKAT POLRES">
                            <?php 
                                if(session()->satker == 'POLRES LANDAK'){
                                    foreach($fres as $p){
                                        if($p->satker == session()->satfung){
                                            echo '<option value="'.$p->satker.'" selected>'.$p->satker.'</option>';
                                        }else{
                                            echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';
                                        }
                                    }
                            ?>
                            </optgroup>
                            <optgroup label="TINGKAT POLSEK">
                            <?php
                                    foreach($fsek as $p){
                                        if($p->satker == session()->satfung){
                                            echo '<option value="'.$p->satker.'" selected>'.$p->satker.'</option>';
                                        }else{
                                            echo '<option value="'.$p->satker.'">'.$p->satker.'</option>';
                                        }
                                    }}
                            ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jabatan"><strong>JABATAN</strong></label>
                        <select class="form-select" name="jabatan" id="jabatan">
                            <optgroup label="TINGKAT POLRES">
                            <?php 
                                    foreach($jres as $p){
                                        if($p->jabatan == session()->jabatan){
                                            echo '<option value="'.$p->jabatan.'" selected>'.$p->jabatan.'</option>';
                                        }else{
                                            echo '<option value="'.$p->jabatan.'">'.$p->jabatan.'</option>';
                                        }
                                    }?>
                            </optgroup>
                            <optgroup label="TINGKAT POLSEK">
                            <?php
                                    foreach($jsek as $p){
                                        if($p->jabatan == session()->jabatan){
                                            echo '<option value="'.$p->jabatan.'" selected>'.$p->jabatan.'</option>';
                                        }else{
                                            echo '<option value="'.$p->jabatan.'">'.$p->jabatan.'</option>';
                                        }
                                    }
                            ?></optgroup>
                        </select>
                    </div>
                    <div class="mb-3">
                        JABATAN: <b><span id="sjbt"><?= session()->jabatan ?></span> <?php if(session()->satfung == null){ echo '<span id="sfung"> </span><span id="ssatker">'.session()->satker.'</span>';}else{echo '<span id="sfung">'.session()->satfung.'</span> <span id="ssat">'.session()->satker.'</span>';}?></b>
                    </div>
                </div>
            </div>
            <div class="mb-3"><button class="btn btn-primary btn-sm d-none" type="submit" id="svfrm">Save
                    Settings</button></div>
        </form>
        <button class="btn btn-small btn-primary" id="edituser">EDIT</button>
    </div>
</div>
<div class="card m-2 <?php if(session()->level != 1){echo 'd-none';} ?>">
    <div class="card-header">
        Konfigurasi Website
    </div>
    <div class="card-body">
        <div class="row g-0 row-cols-1">
            <div class="col d-flex flex-column justify-content-center align-items-center"><img
                    src="<?= base_url($c->logo) ?>" width="150px" loading="lazy" />
                <form method="post" class="d-none" enctype="multipart/form-data" id="form"><button
                        class="btn btn-warning" type="button" style="margin: 10px;">GANTI LOGO</button><input id="logo"
                        class="form-control-lg d-none" type="file" style="width: 100%;" /><button
                        class="btn btn-warning d-none" type="button" style="margin: 10px;">UPLOAD LOGO</button>
                </form>
            </div>
            <div class="col">
                <div class="row g-0 row-cols-1">
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">NAMA SITUS <span
                                class="text-info" style="cursor: pointer;"
                                onclick="ubah('#namasitus','namasitus')"><strong>[ GANTI ]</strong></span></label><input
                            id="namasitus" class="border rounded border-1 border-warning shadow" type="text"
                            value="<?= $c->namasitus ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">DESKRIPSI <span
                                class="text-info" style="cursor: pointer;"
                                onclick="ubah('#deskripsi', 'deskripsi')"><strong>[ GANTI
                                    ]</strong></span></label><input id="deskripsi"
                            class="border rounded border-1 border-warning shadow" type="text"
                            value="<?= $c->deskripsi ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                </div>
                <div class="row g-0 row-cols-1 row-cols-md-3 p-md-5">
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">BANNER
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formbanner')"><strong>[
                                    GANTI ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->banner) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formbanner">
                            <input id="banner" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="banner" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">NOMOR PENGADUAN
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formpengaduan')"><strong>[
                                    GANTI ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->nomorpengaduan) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formpengaduan">
                            <input id="pengaduan" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="nomorpengaduan" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">ADS 1
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formads1')"><strong>[ GANTI
                                    ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->ads1) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formads1">
                            <input id="ads1" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="ads1" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">ADS 2
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formads2')"><strong>[ GANTI
                                    ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->ads2) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formads2">
                            <input id="ads2" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="ads2" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">ADS 3
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formads3')"><strong>[ GANTI
                                    ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->ads3) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formads3">
                            <input id="ads3" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="ads3" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                    <div class="col d-flex flex-column" style="padding: 10px;">
                        <label class="form-label">FAVICON
                            <span class="text-info" style="cursor: pointer;" onclick="foto('#formfav')"><strong>[ GANTI
                                    ]</strong></span>
                        </label>
                        <img src="<?= base_url($c->favicon) ?>" loading="lazy" />
                        <form method="post" class="d-none" enctype="multipart/form-data" id="formfav">
                            <input id="favicon" class="border rounded border-1 border-warning shadow form-control-lg"
                                type="file" style="width:100%" name="file" accept="image/*" required />
                            <input type="text" value="favicon" name="kolom" hidden>
                            <button class="btn btn-primary" type="submit" style="margin: 10PX;">UPLOAD</button>
                        </form>
                    </div>
                </div>
                <div class="row g-0 row-cols-1 row-cols-md-3">
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">FACEBOOK <span
                                class="text-info" style="cursor: pointer;" onclick="ubah('#facebook', 'fb')"><strong>[ ]
                                    GANTI ]</strong></span></label><input id="facebook"
                            class="border rounded border-1 border-warning shadow" type="text" value="<?= $c->fb ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">INSTAGRAM <span
                                class="text-info" style="cursor: pointer;" onclick="ubah('#instagram', 'ig')"><strong>[
                                    ]
                                    GANTI ]</strong></span></label><input id="instagram"
                            class="border rounded border-1 border-warning shadow" type="text" value="<?= $c->ig ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">TWITTER <span
                                class="text-info" style="cursor: pointer;" onclick="ubah('#twitter', 'tw')"><strong>[ ]
                                    GANTI ]</strong></span></label><input id="twitter"
                            class="border rounded border-1 border-warning shadow" type="text" value="<?= $c->tw ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">YOUTUBE <span
                                class="text-info" style="cursor: pointer;" onclick="ubah('#youtube', 'yt')"><strong>[ ]
                                    GANTI ]</strong></span></label><input id="youtube"
                            class="border rounded border-1 border-warning shadow" type="text" value="<?= $c->yt ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">TIK TOK <span
                                class="text-info" style="cursor: pointer;" onclick="ubah('#tiktok', 'tiktok')"><strong>[
                                    ]
                                    GANTI ]</strong></span></label><input id="tiktok"
                            class="border rounded border-1 border-warning shadow" type="text" value="<?= $c->tiktok ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                    <div class="col d-flex flex-column" style="padding: 5px;"><label class="form-label">YOUTUBE EMBBED
                            <span class="text-info" style="cursor: pointer;"
                                onclick="ubah('#yte', 'youtube_embbed')"><strong>[ GANTI ]</strong></span></label><input
                            id="yte" class="border rounded border-1 border-warning shadow" type="text"
                            value="<?= $c->youtube_embbed ?>"
                            style="height: 32px;font-size: 18px;padding: 5px;max-width: 400px;" disabled /></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>

$(document).ready(function () {
    $('#formuser :input').prop("disabled", true);
});

$('#formuser').submit(function (e) { 
    e.preventDefault();
    
    $.ajax({
        type: "post",
        url: '<?= base_url('landak/updateuser/'.session()->nrp)?>',
        data: $('#formuser').serialize(),
        dataType: "json",
        success: function (response) {
            if(response.msg == 'ok'){
                Swal.fire({
                    title: 'BERHASIL UPDATE!',
                    icon: 'success'
                }).then(()=>{
                    location.reload();
                })
            }else{
                Swal.fire({
                    title: 'GAGAL UPDATE!',
                    icon: 'error'
                }).then(()=>{
                    location.reload();
                })
            }
        }
    });
});

$('#edituser').click(function (e) { 
    e.preventDefault();
    $('#formuser :input').prop("disabled", false);
    $('#nrp').prop("disabled", true);
    $('#svfrm').removeClass('d-none');
    $('#edituser').hide();
});

$('#satker').change(function (e) { 
    e.preventDefault();
    
});

$('#satfung').change(function (e) { 
    e.preventDefault();
    
});

$('#jabatan').change(function (e) { 
    e.preventDefault();
    
});

function ubah(id, kolom) {
    $(id).prop("disabled", false);
    $(id).keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            $.ajax({
                type: "PUT",
                url: "<?=base_url('konfigurasiapi')?>/1",
                data: {
                    kolom: kolom,
                    isi: $(id).val()
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        $(id).prop("disabled", true);
                    }
                }
            });
        }
    });
}

function foto(forms) {
    $(forms).removeClass('d-none');
    $(forms).submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Mengupload Gambar...',
            icon: 'info',
            didOpen: () => {
                Swal.showLoading();
            },
            allowOutsideClick: false
        })
        $.ajax({
            type: "POST",
            url: "<?= base_url('landak/updconf') ?>",
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
                        text: 'Berhasil Upload Gambar!',
                        icon: 'success'
                    }).then(() => {
                        location.reload();
                    })
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.error,
                        icon: 'error'
                    }).then(() => {
                        location.reload();
                    })
                }
            }
        });
    });
}
</script>
<?= $this->endSection() ?>