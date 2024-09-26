<?php
$error = filter_input(INPUT_GET, 'error', FILTER_SANITIZE_STRING);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <?php if ($error == 'missing_fields') : ?>
        <p>All fields are required. Please go back and fill in all fields.</p>
    <?php else : ?>
        <p>An unknown error occurred.</p>
    <?php endif; ?>
    <a href="add_product.php">Go Back to Add Product</a>
</body>
</html>
