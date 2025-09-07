<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <p style="color:green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if(isset($validation)): ?>
        <div style="color:red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('validasi/simpan') ?>" method="post">
        <p>NIP: <input type="text" name="nip" value="<?= set_value('nip') ?>"></p>
        <p>Nama: <input type="text" name="nama" value="<?= set_value('nama') ?>"></p>
        <p>Gender: 
            <input type="radio" name="gender" value="Pria" <?= set_radio('gender', 'Pria') ?>> Pria
            <input type="radio" name="gender" value="Wanita" <?= set_radio('gender', 'Wanita') ?>> Wanita
        </p>
        <p>Telp: <input type="text" name="telp" value="<?= set_value('telp') ?>"></p>
        <p>Email: <input type="text" name="email" value="<?= set_value('email') ?>"></p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
