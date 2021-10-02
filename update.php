<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title>CRUD application</title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
		  <thead class="table-light">
		    <tr>
		      <td class="table_head" height="100px" valign="middle" colspan="2" scope="col">Update user: <b>Patricia Labsack</b></td>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<td scope="row">
			  		<form class="row g-3 needs-validation" novalidate action="index.php" >
			  			<div class="table-row">
			  				<label for="validationName" class="form-label">Name</label>
			  				<input type="text" id="validationName" class="form-control" minlength="3" placeholder="Name" value="" required>
		  				    <div class="invalid-feedback">
						      Name is mandatory
						    </div>
			  			</div>  	
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Username</label>
			  				<input type="text" id="validationUsername" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationEmail" class="form-label">Email</label>
			  				<input type="email" id="validationEmail" class="form-control" placeholder="Email" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid email
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationPhone" class="form-label">Phone</label>
			  				<input type="tel" id="validationPhone" minlength="3" class="form-control" placeholder="Phone" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid phone
			  				</div>
			  			</div> 		
			  			<div class="table-row">
			  				<label for="validationWebsite" class="form-label">Website</label>
			  				<input type="url"  id="validationWebsite" class="form-control" placeholder="Website" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid website
			  				</div>
			  			</div> 
			  			<div class="table-row">
			  				<label for="validationImage" class="form-label">Image</label><br>
			  				<input id="validationImage" type="file" required>
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

	<script src="bootstrap-assets/js/validation.js"></script>
</body>
</html>