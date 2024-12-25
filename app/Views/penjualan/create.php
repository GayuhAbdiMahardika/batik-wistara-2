
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Penjualan</title>
</head>
<body>
    <h1>Create Penjualan</h1>
    <form action="/penjualan/store" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>