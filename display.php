<div class="container">
    <h1>Data Fetching</h1>
    <?php
    include "db.php";
    $sql = "SELECT * FROM products";
    // Table name (table name ng gusto nyo display)
    $result = $conn->query($sql);
    // execute the query (wag kalimutan gais)
    ?>
</div>

<h1>Displaying Dat</h1>
<div class="container">
    <!-- Dapat my container nakayo bago nyo lagay yung data -->
    <?php
    if ($result->num_rows > 0) {
        // meaning nung 0 is wala laman ung table ny
        // num_rows kinukuha nya yung laman ng isang buong row sa database ny
        while ($row = $result->fetch_assoc()) {
            // malay ko ano to. basta si "$row" variable name na nagsstore ng multiple data(array).
    ?>
        <div class="card">
            <!-- kaya each echo merong "$row" kasi naka array na yung buong row, need nalang macall -->
            <!-- si "product_name" yung name ng column sa database nyo -->
            <!-- sample array value pag 4 yung naka echo ["apple", "100", "50", "apple.jpg"] -->
            <h2><?php echo $row["product_name"]; ?></h2>
        </div>
    <?php
        }
    } else {
        echo "<p>No products found.</p>";
    }
    ?>
</div>
