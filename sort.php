<?php
require "db_conn.php";

   
$sql = "SELECT * FROM product_table";


if(isset($_GET['sortprice']))
{

$sortByPrice = $_GET['sortprice'];

if($sortByPrice="0-10")
{
$sql.=" price<10";
}
else if($sortByPrice="10-20")
{
$sql.=" price>=10 AND price<=20";
}
else if($sortByPrice="20-30")
{
$sql.=" price>20 AND price<=30";
}
else if($sortByPrice="30-40")
{
$sql.=" price>30 AND price<=40";
}
else if($sortByPrice="40-50")
{
$sql.=" price>40 AND price<=50";
}
else{

$sql.=" price>50";

}

if($sortBy == 'asc') {
  $sql.=" ORDER BY price ASC";
  
} else if ($sortBy == 'dsc'){
  $sql.=" ORDER BY price DSC";
}

else {
  $sql.=" ORDER BY product_id ASC";
}
}

else  if( isset( $_GET['sort'])){
  $sortBy = $_GET['sort'];
if($sortBy == 'asc') {
  $sql.=" ORDER BY price ASC";
  
} else if ($sortBy == 'dsc'){
  $sql.=" ORDER BY price DSC";
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
?>
