
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
 <div class="filters" >
 <!-- <select id="sort-by" name="sort">
  <option value="default" name="default">Default</option>
  <option value="asc" name="asc">Ascending</option>
  <option value="desc" name="desc">Descending</option>
</select> -->

<form method="POST" action="sort.php" >
 
  <select id="sort-by" name="sort">
    <option value="default" name="default">Default</option>
  <option value="asc" name="asc">Ascending</option>
  <option value="desc" name="desc">Descending</option>
  </select>
  <input type="submit" value="Sort">
</form>

 </div>

			<div class="productss" id="product-table">

		<?php include "sort.php" ?>

			</div>
		
	
	</body>

	<script>
// create a new XHR object
// var xhr = new XMLHttpRequest();

// // define the function to be executed when the response is received
// xhr.onreadystatechange = function() {
//   if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
//     // replace the content of the product table with the sorted data
//     document.getElementById("product-table").innerHTML = xhr.responseText;
//   }
// };

// // define the sorting function and the sorting order
// function sortProducts(sortBy, sortOrder) {
//   // create the request URL with the sorting parameters
//   var url = "sort.php?sort_by=" + sortBy + "&sort_order=" + sortOrder;

//   // send the request
//   xhr.open("GET", url, true);
//   xhr.send();
// }


	</script>
	</html>
	