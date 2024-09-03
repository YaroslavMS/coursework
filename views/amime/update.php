<?php

/** @var array $rows */
?>
<style>
    .container {
        padding: 20px;
        background-color: #1a1a1a; 
        color: #f0f0f0; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .form-label {
        color: #f0f0f0; 
    }

    .form-control {
        background-color: #333; 
        color: #f0f0f0; 
        border: 1px solid #444;
    }

    .form-control:focus {
        border-color: #ff6f00; 
        box-shadow: 0 0 0 0.2rem rgba(255, 111, 0, 0.5); 
    }

    .btn-primary {
        background-color: #ff6f00; 
        border: 1px solid #ff6f00; 
        color: #fff;
        padding: 10px 20px; 
        border-radius: 5px; 
        transition: background-color 0.3s, transform 0.2s; 
    }

    .btn-primary:hover {
        background-color: #e65c00; 
        border-color: #e65c00; 
        transform: scale(1.05); 
    }

    .form-control::placeholder {
        color: #b0b0b0; 
    }
</style>

<div class="container mt-5">
    <h1>Оновлення інформації про мангу</h1>
    <form method="post" action="/amime/update">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($rows[0]['id']); ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($rows[0]['name']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Ціна</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($rows[0]['price']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="volume" class="form-label">Об'єм</label>
            <input type="text" class="form-control" id="volume" name="volume" value="<?php echo htmlspecialchars($rows[0]['volume']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="manufacturer" class="form-label">Виробник</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="<?php echo htmlspecialchars($rows[0]['manufacturer']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Опис</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($rows[0]['description']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">URL зображення</label>
            <input type="url" class="form-control" id="image_url" name="image_url" value="<?php echo htmlspecialchars($rows[0]['image_url']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="stock_quantity" class="form-label">Кількість на складі</label>
            <input type="number" min="0" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo htmlspecialchars($rows[0]['stock_quantity']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Оновити інформацію</button>
    </form>
</div>
