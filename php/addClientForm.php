<form id='add-client' name='additionForm' action='php/addClient.php' method='post' enctype='multipart/form-data'>
	<h3>Add Client</h3>
	<br>
	<div>
		<label for='client-id'>ID: </label>&nbsp;
		<input type='text' class='form-input' id='client-id' name='client-id' placeholder=' Client ID' title='Client ID' maxlength='9' required />
	</div>
	<br>
	<div>
		<label for='client-name'>Name: </label>&nbsp;
		<input type='text' class='form-input' id='client-name' name='client-name' placeholder=' Client name' title='Client Name' maxlength='50' required />
	</div>
	<br>
	<div>
		<label for='gender'>Gender: </label>&nbsp;
		<input type='radio' id='m' name='gender' title='Client Gender' value='M' required />&nbsp;
		<label for='m'>Male</label>&nbsp;
		<input type='radio' id='f' name='gender' title='Client Gender' value='F' required />&nbsp;
		<label for='f'>Female</label>
	</div>
	<br>
	<div>
		<label for='Birthdate'>Birthdate: </label>&nbsp;
		<input type='date' class='form-input' id='birthdate' name='birthdate' title='Client Birthdate' required />
	</div>
	<br>
	<div>
		<label for='Phone'>Phone: </label>&nbsp;
		<input type='number' class='form-input' id='phone' name='phone' placeholder=' Client phone' title='Client Phone' max='9999999999999' min='-9999999999999' required />
	</div>
	<br>
	<div>
		<input type='submit' id='send-add' name='add_btn' class='btn btn-outline-dark' value='Add Client'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>
