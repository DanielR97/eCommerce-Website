<form id='remove-product' name='removeForm' action='php/removeProduct.php' method='post' enctype='multipart/form-data'>
	<h3>Remove the Selected Products</h3>
	<br>
	<div>
		<label for='product-id'>Products' IDs: </label><br>
        <?php include('selectProductIdChecklist.php'); ?>
    </div>
	<br>
	<div>
		<input type='submit' id='send-remove' name='remove_btn' class='btn btn-outline-dark' value='Remove Products'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>