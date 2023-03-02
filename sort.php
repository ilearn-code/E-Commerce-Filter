<?php
require "db_conn.php";

   
if(isset($_GET['sort']))
{
  $sortBy = $_GET['sort'];
if ($sortBy == 'asc') {
  $sortOrder = 'ASC';
  $orderBy = 'price';
} else  {
  $sortOrder = 'DESC';
  $orderBy = 'price';
}
} else {

  $sortOrder = 'ASC'; 
  $orderBy = 'product_id'; 
}

$sql = "SELECT * FROM product_table ORDER BY $orderBy $sortOrder";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $img_path = $row['img_path'];
    $product_name= $row['product_name'];
    $product_price=$row['price'];
    ?>
   <div class="product_container <?php echo $product_name?> ">
    <img src="<?php echo $img_path ?>" >
    <h2 class="PNAME"><?php echo $product_name?></h2>
    <span class="price">Rs.<?php echo $product_price ?></span>
 </div>

    <?php
}
?>
