<div class="container mt-5">
    <style>
        .container {
            padding: 30px;
            background-color: #1a1a1a;
            color: #f0f0f0;
        }

        .card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #333;
            color: #f0f0f0;
        }

        .card-img-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
            border-bottom: 1px solid #444;
        }

        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card-img-container:hover img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 15px;
            background-color: #1a1a1a;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-end;
            position: absolute;
            top: 10px;
            right: 10px;
            gap: 10px; 
            z-index: 10; 
        }

        .btn-container form {
            margin-bottom: 10px;
        }

        .btn-add-to-cart,
        .btn-remove-from-cart,
        .btn-update-cart {
            width: 120px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            color: #fff;
            border: 2px solid #ff6f00;
            background-color: #1a1a1a;
        }

        .btn-add-to-cart:hover {
            background-color: #ff6f00;
        }

        .btn-remove-from-cart:hover {
            background-color: #dc3545;
        }

        .btn-update-cart:hover {
            background-color: #007bff;
        }

        .btn-add-to-cart:hover,
        .btn-remove-from-cart:hover,
        .btn-update-cart:hover {
            transform: scale(1.05); 
            opacity: 0.9;
        }

        .out-of-stock {
            opacity: 0.5;
            position: relative;
            background-color: #333;
            border: 2px solid #ff6f00;
        }

        .out-of-stock::after {
            content: "Немає в наявності";
            color: #ff6f00;
            font-size: 1.4em;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #ff6f00;
            border: 2px solid #ff6f00;
            color: white;
        }

        .btn-primary:hover {
            background-color: #e65c00;
            border-color: #e65c00;
        }

        .btn-secondary {
            background-color: #333;
            border: 2px solid #444;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #444;
            border-color: #555;
        }

        .filter-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-control,
        .form-select {
            background-color: #333;
            color: #f0f0f0;
            border: 1px solid #444;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ff6f00;
            box-shadow: 0 0 0 0.2rem rgba(255, 111, 0, 0.5);
        }

        .form-check-input {
            background-color: #1a1a1a;
            border-color: #444;
        }

        .form-check-input:checked {
            background-color: #ff6f00;
            border-color: #ff6f00;
        }

        .form-check-label {
            color: #f0f0f0;
        }
    </style>
    <h1 class="mb-4">Пропозиції</h1>

    <form method="post" action="/amime/filter">
        <div class="filter-container">
            <div class="mb-4" style="flex-grow: 1;">
                <input type="text" name="search_name" class="form-control" placeholder="Пошук за назвою" value="<?php

use models\Users;

 echo htmlspecialchars($search_name ?? ''); ?>">
            </div>
            <div class="mb-4">
                <h5>Фільтрувати за категорією:</h5>
                <?php
                $categories = [
                    ['id' => 1, 'name' => 'Бойовик'],
                    ['id' => 2, 'name' => 'Детектив'],
                    ['id' => 3, 'name' => 'Драма'],
                    ['id' => 4, 'name' => 'Жахи'],
                    ['id' => 5, 'name' => 'Комедія']
                ];

                foreach ($categories as $category) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category_id" id="category<?php echo $category['id']; ?>" value="<?php echo $category['id']; ?>" <?php if (isset($category_id) && $category_id == $category['id']) echo 'checked'; ?>>
                        <label class="form-check-label" for="category<?php echo $category['id']; ?>">
                            <?php echo $category['name']; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mb-4">
                <h5>Сортувати за ціною:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sort_price" id="priceAsc" value="asc" <?php if (isset($sort_price) && $sort_price == 'asc') echo 'checked'; ?>>
                    <label class="form-check-label" for="priceAsc">
                        Від найнижчої до найвищої
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sort_price" id="priceDesc" value="desc" <?php if (isset($sort_price) && $sort_price == 'desc') echo 'checked'; ?>>
                    <label class="form-check-label" for="priceDesc">
                        Від найвищої до найнижчої
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <h5>Фільтрувати за об'ємом:</h5>
                <select class="form-select" name="volume">
                    <option value="">Всі</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Фільтрувати</button>
        <a href="/goods" class="btn btn-secondary mt-3">Очистити фільтр</a>
    </form>

    <div class="row mt-4">
        <?php
        $inStock = [];
        $outOfStock = [];
        if (!empty($rows)) {
            foreach ($rows as $row) {
                if (!empty($row)) {
                    foreach ($row as $key => $value) {
                        if (is_array($value)) {
                            if ($value['stock_quantity'] > 0) {
                                $inStock[] = $value;
                            } else {
                                $outOfStock[] = $value;
                            }
                        }
                    }
                }
            }
        }
        foreach ($inStock as $value) : ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="btn-container">
                        <?php if (Users::IsUserAdmin()) : ?>
                            <form method="post" action="/amime/update">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn btn-primary btn-update-cart">Оновити</button>
                            </form>
                            <form method="post" action="/amime/delete">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-remove-from-cart">Видалити</button>
                            </form>
                        <?php endif ?>
                        <form method="post" action="/amime/addToCart">
                            <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                            <button type="submit" class="btn btn-primary btn-add-to-cart">Купити</button>
                        </form>
                    </div>
                    <div class="card-img-container">
                        <img src="<?php echo $value['image_url']; ?>" class="card-img-top" alt="<?php echo $value['name']; ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <p class="card-text">
                            <strong>Ціна:</strong> <?php echo $value['price']; ?> грн.<br>
                            <strong>Об'єм:</strong> <?php echo $value['volume']; ?><br>
                            <strong>Виробник:</strong> <?php echo $value['manufacturer']; ?><br>
                            <strong>Опис манги:</strong> <?php echo $value['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php foreach ($outOfStock as $value) : ?>
            <div class="col-md-4 mb-4">
                <div class="card out-of-stock">
                    <?php if (Users::IsUserAdmin()) : ?>
                        <div class="btn-container">
                            <form method="post" action="/amime/delete">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-remove-from-cart">Видалити</button>
                            </form>
                            <form method="post" action="/amime/update">
                                <input type="hidden" name="product_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn btn-primary btn-update-cart">Оновити</button>
                            </form>
                        </div>
                    <?php endif ?>
                    <div class="card-img-container">
                        <img src="<?php echo $value['image_url']; ?>" class="card-img-top" alt="<?php echo $value['name']; ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <p class="card-text">
                            <strong>Ціна:</strong> <?php echo $value['price']; ?> грн.<br>
                            <strong>Об'єм:</strong> <?php echo $value['volume']; ?><br>
                            <strong>Виробник:</strong> <?php echo $value['manufacturer']; ?><br>
                            <strong>Опис товару:</strong> <?php echo $value['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($inStock) && empty($outOfStock)) : ?>
            <p>Немає доступних напоїв.</p>
        <?php endif; ?>
    </div>
</div>
