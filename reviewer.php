<?php
if (isset($_POST["add"])) {
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    // value ng "name" attribute sa form nyo (input) yung ilalagay nyo dito.
    $sql = "INSERT INTO products (product_name, price) VALUES ('$product_name', '$price')";
    // ^^ si "products" yung name ng table nyo. "product_name" at "price" yung name ng column sa database nyo.
    if ($conn->query($sql) === TRUE) {
        echo "<p>Product added successfully.</p>";
    } else {
        echo "<p>Error adding product: " . $conn->error . "</p>";
    }
}
?>
<!-- since lalagay ko ung process sa same file, lalagay ko din sa action yung same file name. -->
<!-- pwede din kahit different page. -->
<form action="reviewer.php" method="POST" enctype="multipart/form-data">
    <!-- action attribute parang link lang yan -->
    <!-- method attribute alam nyo naman na "POST" private, "GET" public -->
    <!-- enctype attribute kailangan pag my files/img kayong ssubmit -->
    <input type="text" name="product_name" required>
    <input type="number" name="price" required>
    <button type="submit" name="add">Add Product</button>
</form>
