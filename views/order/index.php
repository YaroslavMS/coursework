<?php

/** @var array $rows */

use models\Users;
use models\Order;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $orderId = htmlspecialchars($_POST['order_id']);
}

$rows = Order::getAllOrders();

function renderOrderTable($rows)
{
    $values = array_values($rows);
    ob_start();
?>
<style>
    body {
        background-color: #111; 
        color: #f0f0f0; 
    }

    .container {
        padding: 20px;
        background-color: #222; 
        border-radius: 15px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    h2 {
        color: #ff6600; 
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #444; 
    }

    .table th {
        background-color: #333; 
        color: #ff6600; 
        font-weight: 600;
    }

    .table tr:nth-child(even) {
        background-color: #222; 
    }

    .table tr:hover {
        background-color: #333;
    }

    .btn-primary {
        background-color: #ff6600; 
        border-color: #ff6600;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e65c00; 
        border-color: #e65c00;
    }

    label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
        color: #f0f0f0;
    }

    #order_id {
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #555; 
        background-color: #333; 
        color: #f0f0f0; 
        width: 100%;
        max-width: 300px;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>

    <div class="container mt-4">
        <h2>Список замовлень</h2>
        <table class="table table-bordered" id="orders-table">
            <thead>
                <tr>
                    <th>ID Замовлення</th>
                    <th>Ім'я</th>
                    <th>Email</th>
                    <th>Адреса</th>
                    <th>Телефон</th>
                    <th>Дата створення</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($values as $order) : ?>
                    <tr>
                        <td><?= htmlspecialchars($order['id']) ?></td>
                        <td><?= htmlspecialchars($order['name']) ?></td>
                        <td><?= htmlspecialchars($order['email']) ?></td>
                        <td><?= htmlspecialchars($order['address']) ?></td>
                        <td><?= htmlspecialchars($order['phone']) ?></td>
                        <td><?= htmlspecialchars($order['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="mt-4">
            <form method="POST" action="/order/showorder">
                <label for="order_id">Введіть ID замовлення:</label>
                <input type="text" id="order_id" name="order_id">
                <button type="submit" class="btn btn-primary">Переглянути</button>
            </form>
        </div>
    </div>
<?php
    return ob_get_clean();
}
?>
<div id="orders-container">
    <?= renderOrderTable($rows) ?>
</div>
