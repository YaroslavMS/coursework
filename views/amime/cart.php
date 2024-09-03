<?php

/** @var array $cart Товари у кошику */
/** @var float $total Загальна вартість */
$this->Title = '';
?>
<style>
    body {
        background-color: #1a1a1a;
        color: #f0f0f0;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        padding: 20px;
        background-color: #333;
        border-radius: 8px;
        margin: 20px auto;
        max-width: 1200px;
    }

    h1, h2, h3, h4, h5, h6 {
        color: #ff6f00;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: #444;
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        color: #f0f0f0;
    }

    th {
        background-color: #555;
    }

    td {
        background-color: #666;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        display: inline-block;
        margin: 10px 0;
    }

    .btn-primary {
        background-color: #ff6f00;
        color: #fff;
    }

    .btn-danger {
        background-color: #f44336;
        color: #fff;
    }

    .btn-warning {
        background-color: #ff6f00;
        color: #fff;
    }

    .btn-success {
        background-color: #4caf50;
        color: #fff;
    }

    .navbar {
        background-color: #222;
        padding: 10px 0;
        border-bottom: 2px solid #444;
    }

    .navbar a {
        color: #f0f0f0;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
    }

    .navbar a:hover {
        color: #ff6f00;
    }

    .footer {
        background-color: #222;
        padding: 20px;
        text-align: center;
        color: #f0f0f0;
        border-top: 2px solid #444;
    }

    .footer a {
        color: #ff6f00;
        text-decoration: none;
    }

    .footer a:hover {
        color: #fff;
    }

    .btn-clear {
        background-color: #ff6f00;
        border-color: #ff6f00;
        color: #fff;
    }

    .btn-clear:hover {
        background-color: #cc7a00;
        border-color: #cc7a00;
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4">Кошик</h1>
    <?php if (!empty($cart)) : ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Назва</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Об'єм</th>
                    <th scope="col">Виробник</th>
                    <th scope="col">Дії</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $index => $product) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo htmlspecialchars($product['price']); ?> грн.</td>
                        <td><?php echo htmlspecialchars($product['volume']); ?></td>
                        <td><?php echo htmlspecialchars($product['manufacturer']); ?></td>
                        <td>
                            <form method="post" action="/goods/removeFromCart">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Видалити</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h3>Загальна вартість: <?php echo $total; ?> грн.</h3>
        <form method="post" action="/goods/clearCart">
            <button type="submit" class="btn btn-warning btn-clear">Очистити кошик</button>
        </form>
        <a href="/order/checkout" class="btn btn-success mt-3">Оформити замовлення</a>
    <?php else : ?>
        <p>Ваш кошик порожній.</p>
    <?php endif; ?>
</div>
