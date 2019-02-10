<form id='update-client' name='updateForm' action='php/updateClient.php' method='post' enctype='multipart/form-data'>
	<h3>Update a Client</h3>
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
		<label for='new-client-id'>New Client ID: </label>&nbsp;
		<input type='text' class='form-input' id='new-client-id' name='new-client-id' placeholder=' New Client ID' title='New Client ID' maxlength='9' required />
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
		<input type='submit' id='send-add' name='add_btn' class='btn btn-outline-dark' value='Update Client'>
	</div>
	<br>
	<?php include("php/messages.php"); ?>
<form>
