<form id='add-client' name='additionForm' action='php/addOrder.php' method='post' enctype='multipart/form-data'>
	<h3>Order Something</h3>
	<br>
	<div>
		<label for='order-id'>ID: </label>&nbsp;
		<input type='text' class='form-input' id='order-id' name='order-id' placeholder=' Order ID' title='Order ID' maxlength='9' required />
	</div>
	<br>
	<div>
		<label for='order-date'>Order Date: </label>&nbsp;
		<input type='date' class='form-input' id='order-date' name='order-date' title='Order Date' required />
	</div>
    <br>
    <div>
		<label for='client-id'>Client ID: </label>
		<select id='client-id' class='form-input' name='client-id' title='Client ID' required >
			<option value=''>Select the Client's ID</option>
            <?php include('selectClientId.php'); ?>
        </select>
    </div>
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
		<label for='quantity'>Quantity: </label>&nbsp;
		<input type='number' class='form-input' id='quantity' name='quantity' placeholder=' Quantity' title='Quantity' max='99' min='-99' required />
	</div>
	<br>
	<div>
		<input type='submit' id='send-add' name='add_btn' class='btn btn-outline-dark' value='Make Order'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>