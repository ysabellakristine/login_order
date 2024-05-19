<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit(); // Always exit after header redirection
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bella's Burger Store - Place Order</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>How may I take your order?</p>

    <h2>Place Order</h2>
    <form action="place_order.php" method="post">
        <?php include('menu.php'); ?>
        <label for="product">Select Product:</label>
        <select id="product" name="product">
            <?php foreach ($menu_item as $product_name => $data) { ?>
                <option value="<?= htmlspecialchars($product_name) ?>"><?= htmlspecialchars($product_name) ?></option>
            <?php } ?>
        </select><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="0" value="1"><br>
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" step="0.01" min="0"><br>
        <input type="submit" value="Place Order">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>
