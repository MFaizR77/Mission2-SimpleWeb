<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?= esc(session()->get('username')) ?></h1>
    <p><a href="<?= base_url('/logout') ?>">Logout</a></p>
</body>
</html>
