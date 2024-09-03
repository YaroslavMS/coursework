<?php

/** @var string $Title */
/** @var string $Content */

use models\Users;
use core\Cart;

if (empty($Title)) {
    $Title = "";
}
if (empty($Content)) {
    $Content = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AmimeHUB</title>
    <link rel="icon" type="image/png" href="https://drawing.biz.ua/wp-content/uploads/2022/07/%D0%B0%D1%85%D1%8D%D0%B3%D0%B0%D0%BE-2-min.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
        background-color: #000; 
        color: #fff; 
    }

    .navbar, .container {
        background-color: #1c1c1c; 
    }

    .navbar .navbar-brand {
        color: #FFA500 !important; 
    }
    
    .navbar .navbar-brand:hover {
        color: #ffcc00 !important; 
    }

    .navbar-nav .nav-link {
        color: #fff !important; 
    }
    
    h1, h2, h3, h4, h5, h6, .lead, p, a {
        color: #fff !important; 
    }

    footer, footer a, footer .text-body-secondary {
        color: #fff !important; 
    }

    .badge {
        background-color: #f90; 
        color: #000; 
    }

    .dropdown-menu {
        background-color: #333;
        border-color: #f90;
    }

    .dropdown-menu .dropdown-item {
        color: #f90; 
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f90; 
        color: #000; 
    }

    .card {
        background-color: #1c1c1c; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        border-radius: 8px; 
    }

    .card-body {
        padding: 1.5rem;
    }

    .btn {
        margin-top: 1rem;
        background-color: #f90; 
        border-color: #f90;
        color: #000;
    }

    .btn-primary {
        background-color: #f90; 
        color: black;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #ff9900;
        border-color: #cc7a00; 
    }
</style>

</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark navbar-fixed">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">AmimeHub</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="/" class="nav-link">Головна</a></li>
                <li class="nav-item"><a href="/amime/index" class="nav-link">Манга</a></li>
                <?php if (Users::IsUserLogged()) : ?>
                    <?php if (Users::IsUserAdmin()) : ?>
                        <li class="nav-item"><a href="/order/index" class="nav-link">Замовлення</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a href="/users/logout" class="nav-link">Вийти</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="/users/login" class="nav-link">Увійти</a></li>
                    <li class="nav-item"><a href="/users/register" class="nav-link">Зареєструватись</a></li>
                <?php endif; ?>
            </ul>

            <?php if (Users::IsUserLogged()) : ?>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://media.discordapp.net/attachments/643884521808330753/1280100493787529318/image.png?ex=66d6d9fc&is=66d5887c&hm=db675b74341970b4f9868eebd89f35d97e8c9b01674326fb7cbe5383f4bb5aec&=&format=webp&quality=lossless&width=321&height=242" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="/users/profile">Профіль</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <?php if (Users::isUserAdmin()) : ?>
                            <li><a class="dropdown-item" href="/amime/add">Додати мангу</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="/users/logout">Вийти</a></li>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="dropdown text-end ms-3 position-relative">
                <a href="/amime/cart" class="d-block link-light text-decoration-none position-relative">
                    <i class="bi bi-cart-fill" style="font-size: 1.5rem;"></i>
                    <?php
                    $cartItemsCount = count(Cart::getProducts());
                    if ($cartItemsCount > 0) : ?>
                        <span class="badge bg-danger rounded-pill cart-badge"><?= $cartItemsCount ?></span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <h1><?= $Title ?></h1>
        </div>
        <?= $Content ?>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
                 <span class="mb-3 mb-md-0 text-body-secondary">© 2024 AmimeHUB, Yaroslave Mozharowskyi</span>
            </div>
        </footer>
    </div>
</body>

</html>
