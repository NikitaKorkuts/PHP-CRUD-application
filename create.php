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
			  		<form class="row g-3 needs-validation" novalidate action="">
			  			<div class="table-row">
			  				<label for="validationCustom01" class="form-label">Name</label>
			  				<input type="text" id="validationCustom01" class="form-control" placeholder="Name" value="" required>
		  				    <div class="invalid-feedback">
						      Name is mandatory
						    </div>
			  			</div>  	
			  			<div class="table-row">
			  				<label for="validationCustom02" class="form-label">Username</label>
			  				<input type="text" id="validationCustom02" class="form-control" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationCustom03" class="form-label">Email</label>
			  				<input type="text" id="validationCustom03" class="form-control" placeholder="Email" value="" required>
			  				<div class="valid-feedback">
			  					It must be valid email
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationCustom04" class="form-label">Phone</label>
			  				<input type="text" id="validationCustom04" class="form-control" placeholder="Phone" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid phone
			  				</div>
			  			</div> 		
			  			<div class="table-row">
			  				<label for="validationCustom05" class="form-label">Website</label>
			  				<input type="text" id="validationCustom05" class="form-control" placeholder="Website" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid website
			  				</div>
			  			</div> 
			  			<div class="table-row">
			  				<label for="validationCustom06" class="form-label">Image</label><br>
			  				<input id="validationCustom06" type="file" required>
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
</body>
</html>