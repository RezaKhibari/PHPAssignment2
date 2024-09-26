<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="add_product_action.php" method="post">
        <label>Product Code:</label>
        <input type="text" name="product_code"><br>

        <label>Product Name:</label>
        <input type="text" name="product_name"><br>

        <label>Version:</label>
        <input type="text" name="version"><br>

        <label>Release Date:</label>
        <input type="date" name="release_date"><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
