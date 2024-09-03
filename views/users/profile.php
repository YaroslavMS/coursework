<style>
    body {
        background-color: #000; 
        color: #f0f0f0;
        font-family: Arial, sans-serif; 
    }

    .container {
        max-width: 1000px; 
        padding: 20px;
        background-color: #1c1c1c; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        margin: auto;
    }

    h2, h3 {
        color: #FFD700; 
    }

    .form-group label {
        color: #f8f9fa; 
    }

    .form-control {
        background-color: #2c2c2c; 
        color: #f8f9fa; 
        border: 1px solid #444; 
        border-radius: 5px;
        padding: 0.75rem 1.25rem;
    }

    .form-control:focus {
        border-color: #FFD700; 
        box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25); 
    }

    .btn-primary {
        background-color: #FFD700; 
        border-color: #FFD700;
        color: #1c1c1c; 
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e0c200; 
        border-color: #e0c200;
    }

    .table {
        background-color: #2c2c2c; 
        color: #f8f9fa; 
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .table thead th {
        background-color: #333333; 
        color: #FFD700; 
    }

    .table tbody tr:nth-child(odd) {
        background-color: #3a3a3a; 
    }

    .table tbody tr:nth-child(even) {
        background-color: #2c2c2c; 
    }

    .table-bordered th, .table-bordered td {
        border-color: #444; 
    }
</style>

<div class="container mt-4">
    <h2>Профіль користувача</h2>
    <form method="POST" action="/users/updateProfile">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="login">Логін</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?= htmlspecialchars($_SESSION['user']['login']) ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= htmlspecialchars($_SESSION['user']['password']) ?>">
                </div>
                <div class="form-group">
                    <label for="firstName">Ім'я</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?= htmlspecialchars($_SESSION['user']['firstName']) ?>">
                </div>
                <div class="form-group">
                    <label for="lastName">Прізвище</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?= htmlspecialchars($_SESSION['user']['lastName']) ?>">
                </div>
                <button type="submit" class="btn btn-primary">Оновити</button>
            </div>
        </div>
    </form>

    <h3 class="mt-4">Ваші замовлення</h3>
    <?php if (!empty($rows)) : ?>
        <table class="table table-bordered">
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
                <?php for ($i = 0; $i < count($rows[0]); $i++) : ?>
                    <tr>
                        <td><?= htmlspecialchars($rows[0][$i]['id']) ?></td>
                        <td><?= htmlspecialchars($rows[0][$i]['name']) ?></td>
                        <td><?= htmlspecialchars($rows[0][$i]['email']) ?></td>
                        <td><?= htmlspecialchars($rows[0][$i]['address']) ?></td>
                        <td><?= htmlspecialchars($rows[0][$i]['phone']) ?></td>
                        <td><?= htmlspecialchars($rows[0][$i]['created_at']) ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>У вас немає замовлень.</p>
    <?php endif; ?>
</div>
