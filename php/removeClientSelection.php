<form id='remove-client' name='removeForm' action='php/removeClient.php' method='post' enctype='multipart/form-data'>
	<h3>Remove the Selected Clients</h3>
	<br>
	<div>
		<label for='client-id'>Clients' IDs: </label><br>
        <?php include('selectClientIdChecklist.php'); ?>
    </div>
	<br>
	<div>
		<input type='submit' id='send-remove' name='remove_btn' class='btn btn-outline-dark' value='Remove Clients'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>