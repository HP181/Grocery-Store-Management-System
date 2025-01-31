<!DOCTYPE html>

<html lang="en">

<head>
    <title>Add New Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-3">

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">Product added successfully!</div>
    <?php endif; ?>

    <div class=" p-1">
        <h2 class="text-center mb-4">Add New Product</h2>
        <form action="./process/process_product.php" method="POST" onsubmit="return validateProductForm()">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="productName" class="form-label">Product Name:</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Initial Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="0" required>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary w-50">Add Product</button>
            </div>
        </form>
    </div>

    <script>
        function validateProductForm() {
            const price = document.getElementById('price').value;
            const quantity = document.getElementById('quantity').value;

            if (price < 0) {
                alert('Price cannot be negative');
                return false;
            }

            if (quantity < 0) {
                alert('Quantity cannot be negative');
                return false;
            }

            return true;
        }
    </script>
</body>

</html>