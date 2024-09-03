<?php

/** @var string $error_message Повідомлення про помилку*/

use core\Core;
?>
<style>
    .container {
        max-width: 700px;
        padding: 20px;
        margin: 50px auto;
        background-color: #1e1e1e;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        color: #f0f0f0;
    }

    .form-label {
        color: #ff4d4d;
        font-size: 1.1rem;
    }

    .form-control {
        background-color: #2b2b2b;
        color: #f0f0f0;
        border: 1px solid #3e3e3e;
        border-radius: 5px;
        padding: 10px;
    }

    .form-control:focus {
        background-color: #2b2b2b;
        border-color: #ff4d4d;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #ff4d4d;
        border-color: #ff4d4d;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e33d3d;
        border-color: #e33d3d;
    }

    .alert-danger {
        background-color: #ff6b6b;
        border-color: #ff4d4d;
        color: #1e1e1e;
    }
</style>

<div class="container mt-5">
    <?php if (!empty($error_message)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message ?>
        </div>
    <?php endif ?>
    <h1>Додати нову мангу</h1>
    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Ціна</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="volume" class="form-label">Об'єм</label>
            <input type="text" class="form-control" id="volume" name="volume" required>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Виробник</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">ID категорії</label>
            <input type="text" class="form-control" id="category_id" name="category_id" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Опис</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">URL зображення</label>
            <input type="url" class="form-control" id="image_url" name="image_url" required>
        </div>
        <div class="mb-3">
            <label for="stock_quantity" class="form-label">Кількість на складі</label>
            <input type="number" min="0" class="form-control" id="stock_quantity" name="stock_quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Додати</button>
    </form>
</div>
