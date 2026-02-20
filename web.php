<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

/* .flex{
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  align-items: center;
} */

.grid{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  width: 90%;
  margin: auto;
  padding: 20px;
}

.productCard{
  width: 100%;
  margin: auto;
  padding: 20px;
  background: white;
  border: solid black 2px;
}

.prodImg{
  width: 100%;
  height: 250px;
  border: solid 2px black;
  overflow: hidden;
}
  </style>
</head>
<body>
  
<div class="grid">

<?php
include "db.php";

$sql = "SELECT * FROM products";
$sql_result = mysqli_query($conn, $sql);

if ($sql_result->num_rows > 0){
  while($row = $sql_result->fetch_assoc()){
?>

<div class="productCard">

<div class="prodImg">
<img src="showimage.php?id=<?php echo $row['product_id']?>" alt="">
</div>

<strong>Name:</strong> <?php echo $row['name']?> <br>
<strong>Price:</strong> <?php echo $row['price']?> <br>
<strong>Stock:</strong> <?php echo $row['stock']?> <br>

</div>

<?php
  }
}
?>
</div>

</body>
</html>