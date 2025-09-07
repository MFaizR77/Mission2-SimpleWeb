<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; }
        .header { background:#007bff; color:#fff; padding:15px; text-align:center; }
        .menu { background:#f4f4f4; padding:10px; text-align:center; }
        .menu a { margin:0 10px; text-decoration:none; color:#007bff; }
        .content { padding:20px; min-height:300px; }
        .footer { background:#333; color:#fff; text-align:center; padding:10px; }
        .detail-box { background: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .label { font-weight: bold; }
    </style>
</head>
<body>
    

    <div class="header">
        <h2>My Website</h2>
    </div>

    <div class="menu">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/mahasiswa') ?>">Daftar Mahasiswa</a>
    </div>

    <div class="content">
        <div class="detail-box">
            <h2>Detail Mahasiswa</h2>
            <p><span class="label">NIM:</span> <?= esc($mahasiswa['nim']) ?></p>
            <p><span class="label">Nama:</span> <?= esc($mahasiswa['nama']) ?></p>
            <p><span class="label">Umur:</span> <?= esc($mahasiswa['umur']) ?></p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>

</body>
</html>