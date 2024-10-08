<?php   
    require("db_connect.php");
    $queryProducts = 'SELECT * FROM products';
    $statement1 = $db->prepare($queryProducts);
    $statement1->execute();
    $products = $statement1->fetchAll();
    $statement1->closeCursor();
?>

<?php include 'view/header.php'; ?>

<main>
    <nav>
        
    <h2>Administrators</h2>
    <ul>
        <li><a href="product_manager.php">Manage Products</a></li>
        <li><a href="under_construction.php">Manage Technicians</a></li>
        <li><a href="under_construction.php">Manage Customers</a></li>
        <li><a href="under_construction.php">Create Incident</a></li>
        <li><a href="under_construction.php">Assign Incident</a></li>
        <li><a href="under_construction.php">Display Incidents</a></li>
    </ul>

    <h2>Technicians</h2>    
    <ul>
        <li><a href="under_construction.php">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul>
        <li><a href="under_construction.php">Register Product</a></li>
    </ul>
    
    </nav>
</main>
<?php include 'view/footer.php'; ?>