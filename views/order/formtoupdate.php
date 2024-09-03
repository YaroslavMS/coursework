<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'created_at' => $_POST['created_at']
    ];
}
?>
<style>
    .container {
        padding: 20px;
        background-color: #222; 
        color: #f0f0f0; 
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        border: 1px solid #333; 
        background-color: #333; 
        color: #f0f0f0; 
    }

    .form-control:focus {
        border-color: #ff6600;
        box-shadow: 0 0 0 0.2rem rgba(255, 102, 0, 0.25);
    }

    .form-group label {
        color: #f8f9fa; 
    }

    .btn-primary {
        background-color: #ff6600;
        color: #fff; 
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e65c00; 
    }

    .bg-light {
        background-color: #333; 
        color: #f0f0f0;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .shadow-sm {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-4">
    <h2>Оновити замовлення #<?= htmlspecialchars($order['id']) ?></h2>
    <form method="POST" action="/order/update" class="bg-light p-4 rounded shadow-sm">
        <input type="hidden" name="id" value="<?= htmlspecialchars($order['id']) ?>">
        <div class="form-group">
            <label for="name">Ім'я</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($order['name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($order['email']) ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Адреса</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= htmlspecialchars($order['address']) ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($order['phone']) ?>" required pattern="\+?\d{10,15}">
        </div>
        <div class="form-group">
            <label for="created_at">Дата створення</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="<?= htmlspecialchars($order['created_at']) ?>" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Оновити</button>
    </form>
</div>
