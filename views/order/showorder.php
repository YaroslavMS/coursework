<?php

/** @var array $rows */
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
    }

    h2 {
        color: #ff6600; 
        font-size: 2rem;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    strong {
        color: #ff6600; 
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
        text-decoration: none;
        text-align: center;
        color: #fff;
        transition: background-color 0.3s ease;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: #ff6600; 
    }

    .btn-primary:hover {
        background-color: #e65c00; 
    }

    .btn-danger {
        background-color: #dc3545; 
    }

    .btn-danger:hover {
        background-color: #c82333; 
    }

    .row {
        margin-top: 20px;
    }

    .col {
        display: flex;
        justify-content: center;
    }

    .alert {
        padding: 15px;
        border-radius: 5px;
        color: #fff;
        background-color: #dc3545; 
        margin-top: 20px;
    }
</style>

<?php if (!empty($rows) && isset($rows[0]['id'], $rows[0]['name'], $rows[0]['email'], $rows[0]['address'], $rows[0]['phone'], $rows[0]['created_at'])) : ?>
    <div class="container mt-4">
        <h2>Інформація про замовлення #<?= htmlspecialchars($rows[0]['id']) ?></h2>
        <p><strong>Ім'я:</strong> <?= htmlspecialchars($rows[0]['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($rows[0]['email']) ?></p>
        <p><strong>Адреса:</strong> <?= htmlspecialchars($rows[0]['address']) ?></p>
        <p><strong>Телефон:</strong> <?= htmlspecialchars($rows[0]['phone']) ?></p>
        <p><strong>Дата створення:</strong> <?= htmlspecialchars($rows[0]['created_at']) ?></p>

        <form method="POST" action="/order/formtoupdate">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rows[0]['id']) ?>">
            <input type="hidden" name="name" value="<?= htmlspecialchars($rows[0]['name']) ?>">
            <input type="hidden" name="email" value="<?= htmlspecialchars($rows[0]['email']) ?>">
            <input type="hidden" name="address" value="<?= htmlspecialchars($rows[0]['address']) ?>">
            <input type="hidden" name="phone" value="<?= htmlspecialchars($rows[0]['phone']) ?>">
            <input type="hidden" name="created_at" value="<?= htmlspecialchars($rows[0]['created_at']) ?>">
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Оновити</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/order/delete">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rows[0]['id']) ?>">
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-danger">Видалити</button>
                </div>
            </div>
        </form>
    </div>
<?php else : ?>
    <?php if (isset($_POST['order_id'])) : ?>
        <div class="alert" role="alert">
            Замовлення з ID <?= htmlspecialchars($_POST['order_id']) ?> не знайдено.
        </div>
    <?php endif; ?>
<?php endif; ?>
