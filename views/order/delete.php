<style>
    .container {
        padding: 20px;
        background-color: #222; 
        color: #f0f0f0; 
        border-radius: 15px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .alert-success {
        background-color: #333; 
        color: #d4edda; 
        border-color: #28a745; 
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .alert-success::before {
        content: "✔ "; 
        color: #28a745; 
    }

    .btn-primary {
        background-color: #ff6600;
        color: #fff; 
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        text-decoration: none; 
        display: inline-block;
        text-align: center;
    }

    .btn-primary:hover {
        background-color: #e65c00; 
    }
</style>

<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        Запис успішно видалено!
    </div>
    <a href="/" class="btn btn-primary">Повернутися на головну</a>
</div>
