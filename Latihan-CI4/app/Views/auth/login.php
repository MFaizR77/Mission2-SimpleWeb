<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; }
        .login-container { width:300px; margin:100px auto; padding:20px; background:#fff; border:1px solid #ddd; border-radius:5px; }
        input { width:100%; padding:10px; margin:8px 0; border:1px solid #ccc; border-radius:4px; }
        button { width:100%; padding:10px; background:#007bff; color:#fff; border:none; border-radius:4px; }
        .error { color:red; margin-bottom:10px; }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <p class="error"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>


    <form method="post" action="<?= base_url('/login') ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
