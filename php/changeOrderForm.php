<form id='update-order' name='updateForm' action='php/changeOrder.php' method='post' enctype='multipart/form-data'>
	<h3>Change an Order</h3>
	<br>
	<div>
		<label for='order-id'>Order ID: </label>
		<select id='order-id' class='form-input' name='order-id' title='Order ID' required >
			<option value=''>Select the Order's ID</option>
            <?php include('selectOrderId.php'); ?>
        </select>
    </div>
	<br>
	<div>
		<label for='new-order-id'>New Order ID: </label>&nbsp;
		<input type='text' class='form-input' id='new-order-id' name='new-order-id' placeholder=' New Order ID' title='New Order ID' maxlength='9' required />
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
