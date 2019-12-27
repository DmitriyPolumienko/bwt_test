<!DOCTYPE HTML >
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $title; ?></title>

    <link rel = "stylesheet" type="text/css" href="../../../public/bootstrap/css/main.css">
    <link rel = "stylesheet" type="text/css" href="../../../public/bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php if (isset($_SESSION['account']['id'])): ?>
<nav class="navbar navbar-expand-lg fixed-top ">
    <a  class = "logo" href="/"><img src="../../../public/bootstrap/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
    <li class="nav-item">
        <a class="nav-link" data-value="leave" href="/feedback/send">Оставить отзыв</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-value="check" href="/feedback/show">Все отзывы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-value="logout" href="/account/logout">Выйти</a>
    </li>
        </ul>
    </div>
</nav>
    <header class="header">
        <div class="overlay"></div>
        <div class="container">
            <div class="description">
                <?php echo $content; ?>
            </div>
        </div>
    </header>

<?php else: ?>
    <?php echo $content; ?>

<?php endif; ?>

</body>
</html>

