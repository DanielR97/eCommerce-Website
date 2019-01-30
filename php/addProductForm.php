<form id='add-product' name='additionForm' action='php/addProduct.php' method='post' enctype='multipart/form-data'>
	<h3>Add Product</h3>
	<br>
	<div>
		<label for='product-id'>Product ID: </label>&nbsp;
		<input type='text' class='form-input' id='product-id' name='product-id' placeholder=' Product ID' title='Product ID' maxlength='9' required />
	</div>
	<br>
	<div>
		<label for='product-name'>Product Name: </label>&nbsp;
		<input type='text' class='form-input' id='product-name' name='product-name' placeholder=' Product Name' title='Product Name' maxlength='50' required />
	</div>
	<br>	
	<div class='image-upload'>
    	<label for='file-input'>Product Picture: 
			<img src='img/upload.png' alt='uploadImg' id='upload-img' class='img-responsive' width='80' height='80'/>
			<img id='preview' src='#' alt='' height='160' width='160' />
		</label>
		<input type='file' onchange='loadFile(event)' name='product-picture' id='file-input' accept='image/*' required />
	</div>
	<br>
	<div>
		<input type='submit' id='send-add' name='add_btn' class='btn btn-outline-dark' value='Add Product'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>
