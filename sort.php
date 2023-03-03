<?php
require "db_conn.php";
$minPrice = isset($_GET['minprice'])? $_GET['minprice'] : 1;
$maxPrice =  isset($_GET['maxprice'])? $_GET['maxprice'] : 999999999;

$sql = "SELECT * FROM product_table";

if (!empty($minPrice) && !empty($maxPrice)) {
  $sql .= " WHERE price BETWEEN $minPrice AND $maxPrice";
}

// f(isset($minPrice)==false &&isset($maxPrice)== false)
// {
//   $sql .= " WHERE price BETWEEN {$minPrice} AND {$maxPrice}";
// }i

// if(isset($_GET['sortprice']))
// {
//   $sortByPrice= $_GET['sortprice'];
// if($sortByPrice=='1')
// {
// $sql.=" WHERE price>1 AND price<=10";
// }
// else if($sortByPrice=='10')
// {
// $sql.=" WHERE price>=10 AND price<=20";
// }
// else if($sortByPrice=='20')
// {
// $sql.=" WHERE price>=20 AND price<=30";
// }
// else if($sortByPrice=='30')
// {
// $sql.=" WHERE price>30 AND price<=40";
// }
// else if($sortByPrice=='40')
// {
// $sql.=" WHERE price>40 AND price<=50";
// }

// else{
//   $sql.=" WHERE price>1 ";
// }
// }
// else{
//   $sql.=" WHERE price>1 ";
// }

if(isset($_GET['sort']))
  {
  $sortBy = $_GET['sort'];
if($sortBy == 'asc') {
  $sql.=" ORDER BY price ASC";
  
} else if ($sortBy == 'desc'){
  $sql.=" ORDER BY price DESC";
}
else {
  $sql.=" ORDER BY product_id ASC";
}
}
else {
  $sql.=" ORDER BY product_id ASC";
}



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
echo $minPrice;
?>
