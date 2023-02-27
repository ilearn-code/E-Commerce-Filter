
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="css\style.css">
	<title>Grocery product</title>
	
	</head>

	<body>

		
			
			<form method="POST" name="upfrm" action="uploadcode.php" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Enter image name" name="product_name" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>



			<!-- <div class="products"> -->

		<?php
        include "db_conn.php";

        $result = mysqli_query($conn, "SELECT * FROM product_table");

        while($row = mysqli_fetch_array($result)) {
        $img_path = $row['img_path'];
        $product_name= $row['product_name'];
		?>
       <div class="product_container <?php echo $product_name?> ">
        <img src="<?php echo $img_path ?>" height="400px" width="400px" >
        <h2 class="PNAME"><?php echo $product_name?></h2>
		<span class="price">$19.99</span>
     </div>

		<?php
    }
?>


			<!-- </div> -->
		
	
	</body>
	</html>
	