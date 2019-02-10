<form id='cancel-order' name='removeForm' action='php/cancelOrder.php' method='post' enctype='multipart/form-data'>
	<h3>Cancel the Selected Orders</h3>
	<br>
	<div>
		<label for='order-id'>Orders' IDs: </label><br>
        <?php include('selectOrderIdChecklist.php'); ?>
    </div>
	<br>
	<div>
		<input type='submit' id='send-remove' name='remove_btn' class='btn btn-outline-dark' value='Cancel Orders'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>