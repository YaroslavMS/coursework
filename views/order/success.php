<?php

/** @var string $Title */
/** @var string $Content */

$Title = "Успішне оформлення замовлення";
$Content = "<p>Ваше замовлення успішно оформлене. Дякуємо за покупку!</p>";
?>
<style>
    body {
        background-color: #111; 
        color: #f0f0f0; 
        font-family: Arial, sans-serif; 
    }

    .container {
        padding: 20px;
        background-color: #222; 
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        color: #f0f0f0; 
        max-width: 600px;
        margin: auto;
        text-align: center;
    }

    h1 {
        color: #ff6600; 
        font-size: 2rem;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #ff6600; 
        border-color: #ff6600;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #e65c00; 
        border-color: #e65c00;
    }
</style>
<div class="container mt-5">
    <h1 class="mb-4"><?= htmlspecialchars($Title) ?></h1>
    <p><?= $Content ?></p>
    <a href="/" class="btn btn-primary">Повернутися на головну</a>
</div>
