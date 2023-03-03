
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="css\style.css">
	<title>Grocery product</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<script>

function sortProducts() {

  var sortBy = document.getElementById("sort_by").value;
  var minprice=document.getElementById("minprice").value;
   var maxprice=document.getElementById("maxprice").value;

  var xhr = new XMLHttpRequest();

 
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("product-table").innerHTML = this.responseText;
    }
  };
console.log("sort.php?sort="+sortBy+"&minprice="+minprice+"&maxprice="+maxprice);

  xhr.open("GET","sort.php?sort="+sortBy+"&minprice="+minprice+"&maxprice="+maxprice, true);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send();
}
setInterval(sortProducts(), 20000);
</script>
	</head>

	<body>
<div class="header">
<button class="addpbutton" onclick="showPopup()">Add Product</button> 
</div>
    
       
 <div id="popup_container">    
<div id="popup">
<button class="hidebtn" onclick="hidePopup()"><i class="uil uil-times-circle"></i></button>  
  <div class="upload_form">

  <form method="POST" name="upfrm" action="uploadcode.php" enctype="multipart/form-data">
				<div>
         
					<label for="product_name">product name</label><input type="text" class="product_name" placeholder="Enter product name" name="product_name"  />
          <br>
					<label for="product_price">product price</label><input type="text" name="price" class="product_price"  placeholder="price">
          <br>
          <br>
					<label for="file_input">Product Image</label><input type="file" name="fileImg" class="file_input" />
          <br>
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>


  </div>
    
 
</div> 
 </div> 
			
			
        <div class="filters" >
 <label for="sort_by">Sort by</label>
  <select id="sort_by" class="sortBy" name="sort" onchange="sortProducts()">
  <option value="default">Default</option>
  <option value="asc" >Price( Low to High)</option>
  <option value="desc" >Price(High to Low)</option>
  </select>

 <label for="rangeinp">Range</label>
<input type="text" class="rangeinp" id="minprice" name="minprice" placeholder="min" onchange="sortProducts()" required >
<input type="text" class="rangeinp" id="maxprice" name="maxprice" placeholder="max" value="99999" onchange="sortProducts()" required>


 </div>

			<div class="productss" id="product-table">

		<?php include "sort.php" ?>

			</div>
		
	
	</body>
<script>

function hidePopup(){

document.getElementById("popup_container").style.display="none";
}

  function showPopup(){

    document.getElementById("popup_container").style.display="block";
  }

  
 
</script>
	
	</html>
	