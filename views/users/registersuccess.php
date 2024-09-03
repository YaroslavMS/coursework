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

    .alert-success {
        background-color: #28a745; 
        color: #f8f9fa;
        border-radius: 8px;
        border: 1px solid #1e7e34;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .alert-success .alert-link {
        color: #f8f9fa; 
    }

    .alert-success .alert-heading {
        color: #f8f9fa; 
    }
</style>

<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        Ви успішно зареєструвались!
    </div>
</div>
