<style>
    body {
        background-color: #000; 
        color: #f0f0f0; 
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 800px;
        padding: 20px;
        background-color: #1c1c1c; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        margin: auto;
    }

    .alert {
        background-color: #dc3545; 
        color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin-bottom: 1rem;
    }

    .form-label {
        color: #f0f0f0; 
    }

    .form-control {
        background-color: #333; 
        color: #f0f0f0; 
        border: 1px solid #555; 
        border-radius: 5px;
        padding: 0.75rem 1.25rem;
    }

    .form-control:focus {
        border-color: #FFD700; 
        box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25); 
    }

    .form-text {
        color: #6c757d; 
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

    h1 {
        color: #FFD700; 
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<div class="container my-5">
    <h1 class="text-center">Вхід на сайт</h1>
    <form method="post" action="">
        <?php if (!empty($error_message)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error_message) ?>
            </div>
        <?php endif ?>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Логін/email</label>
            <input name="login" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ми ніколи не будемо ділитися вашим email з іншими.</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="inputPassword">
        </div>
        <button type="submit" class="btn btn-primary">Увійти</button>
    </form>
</div>
