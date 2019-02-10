<form id='update-product' name='updateForm' action='php/updateProduct.php' method='post' enctype='multipart/form-data'>
	<h3>Update Product</h3>
	<br>
	<div>
		<label for='product-id'>Product ID: </label>
		<select id='product-id' class='form-input' name='product-id' title='Product ID' required >
			<option value=''>Select the Product's ID</option>
            <?php include('selectProductId.php'); ?>
        </select>
    </div>
	<br>
	<div>
		<label for='product-id'>New Product ID: </label>&nbsp;
		<input type='text' class='form-input' id='new-product-id' name='new-product-id' placeholder=' New Product ID' title='New Product ID' maxlength='9' required />
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
		<input type='submit' id='send-add' name='add_btn' class='btn btn-outline-dark' value='Update Product'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>
