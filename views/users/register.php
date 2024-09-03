<?php

/** @var string $error_message Повідомлення про помилку*/

use core\Core;

$this->Title = 'Реєстрація нового користувача';
?>
<style>
    .container {
        max-width: 800px; 
        padding: 20px;
        background-color: #1e1e1e; 
        color: #f8f9fa; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .alert {
        background-color: #dc3545; 
        color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin-bottom: 1rem;
    }

    .form-label {
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

    .form-text {
        color: #6c757d; 
    }

    .btn-primary {
        background-color: #FFD700; 
        border-color: #FFD700; 
        color: #1c1c1c; 
        border-radius: 5px; 
        padding: 0.75rem 1.25rem;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #e0c200;
        border-color: #e0c200;
    }
</style>
<div class="container mt-5">
    <h1 class="text-center mb-4">Реєстрація нового користувача</h1>
    <form method="post" action="">
        <?php if (!empty($error_message)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message ?>
            </div>
        <?php endif ?>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Логін/email</label>
            <input name="login" value="<?= $this->controller->post->get('login') ?>" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ваш email не буде передано третім особам.</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="inputPassword">
        </div>
        <div class="mb-3">
            <label for="inputPassword2" class="form-label">Пароль (ще раз)</label>
            <input name="password2" type="password" class="form-control" id="inputPassword2">
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Прізвище</label>
            <input name="lastname" value="<?= $this->controller->post->get('lastname') ?>" type="text" class="form-control" id="inputLastName">
        </div>
        <div class="mb-3">
            <label for="inputFirstName" class="form-label">Ім'я</label>
            <input name="firstname" value="<?= $this->controller->post->get('firstname') ?>" type="text" class="form-control" id="inputFirstName">
        </div>
        <button type="submit" class="btn btn-primary">Зареєструватись</button>
    </form>
</div>
