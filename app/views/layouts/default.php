<!DOCTYPE HTML >
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php if (isset($_SESSION['account']['id'])): ?>


    <li class="nav-item">
        <a class="nav-link" href="/account/logout">Выход</a>
    </li>
    <?php echo $content; ?>
<?php else: ?>
    <li class="nav-item">
        <a class="nav-link" href="/account/register">Регистрация</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/account/login">Вход</a>
    </li>
<?php endif; ?>

</body>
</html>

