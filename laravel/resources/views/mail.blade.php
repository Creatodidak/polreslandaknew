<div style="text-align:center; background:#072756; color:white; padding:35px">
    <p>HALO {{ $details['nama'] }} !</p>
    <H3>KODE OTP ANDA ADALAH</H3>
    <H1 style="color:#ffd200; padding:10px; vertival-align:middle; text-align:center"><b><span style="background:#1f1f1f; padding:20px; letter-spacing: 3px;">{{ $details['otp'] }}</span></b></H1>
    <p>Kode Ini Hanya Berlaku 1 (Satu Kali)</p>
    
    <small>Generated On <?= date('d-m-Y H:is'); ?></small><br>
    <small>&copy; TIK POLRES LANDAK <?= date('Y'); ?></small>
</div>