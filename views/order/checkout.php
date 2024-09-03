<style>
    .container {
        padding: 20px;
        background-color: #222; 
        color: #f0f0f0; 
        border-radius: 15px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        color: #ff6600; 
        margin-bottom: 2rem;
    }

    .form-label {
        color: #f8f9fa; 
    }

    .form-control {
        background-color: #333; 
        color: #f0f0f0; 
        border: 1px solid #444;
        border-radius: 5px;
        padding: 0.75rem 1.25rem;
    }

    .form-control:focus {
        border-color: #ff6600; 
        box-shadow: 0 0 0 0.2rem rgba(255, 102, 0, 0.25); 
    }

    .btn-primary {
        background-color: #ff6600; 
        border: none;
        color: #fff; 
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e65c00; 
    }
</style>

<div class="container mt-5">
    <h1>Оформлення замовлення</h1>
    <form action="/order/checkout" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Ім'я</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Адреса</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Оформити замовлення</button>
    </form>
</div>
