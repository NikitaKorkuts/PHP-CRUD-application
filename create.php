<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title>CRUD appliction</title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
		  <thead class="table-light">
		    <tr>
		      <td class="table_head" height="100px" valign="middle" colspan="2" scope="col">Create new user</td>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<td scope="row">
		  			<?php 

		  			require('functions.php');

		  			$users = getUsers('users.json');
		  			if($_POST){

		  				$newUser = new stdClass();

		  				$newUser->id = end($users)['id'] + 1;
		  				$newUser->name = $_POST['name'];
		  				$newUser->username = $_POST['username'];
		  				$newUser->email = $_POST['email'];
		  				$newUser->phone = $_POST['phone'];
		  				$newUser->website = $_POST['website'];
		  				$newUser->image = 'assets/images/' . $_POST['image'];

		  				$users[] = $newUser;

  						$newJson = json_encode($users);
						file_put_contents('users.json', $newJson);
		  			}

		  			?>
			  		<form class="row g-3 needs-validation" novalidate method="post" >
			  			<div class="table-row">
			  				<label for="validationName" class="form-label">Name</label>
			  				<input type="text" id="validationName" name="name" class="form-control" minlength="3" placeholder="Name" value="" required>
		  				    <div class="invalid-feedback">
						      Name is mandatory
						    </div>
			  			</div>  	
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Username</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationEmail" class="form-label">Email</label>
			  				<input type="email" id="validationEmail" name="email" class="form-control" placeholder="Email" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid email
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationPhone" class="form-label">Phone</label>
			  				<input type="tel" id="validationPhone" name="phone" minlength="3" class="form-control" placeholder="Phone" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid phone
			  				</div>
			  			</div> 		
			  			<div class="table-row">
			  				<label for="validationWebsite" class="form-label">Website</label>
			  				<input type="url"  id="validationWebsite" name="website" class="form-control" placeholder="Website" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid website
			  				</div>
			  			</div> 
			  			<div class="table-row">
			  				<label for="validationImage" class="form-label">Image</label><br>
			  				<input id="validationImage" name="image" type="file" required>
			  			</div>
			  			<div class="table-row">
			  				<input type="submit" class="btn btn-success btn-create" value="Submit" >
			  			</div>
			  		</form>		  			
		      	</td>
		    </tr>
		  </tbody>
		</table>
	</div>

	<script src="assets/js/bootstrap-validation.js"></script>
</body>
</html>