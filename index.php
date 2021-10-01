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
		<form action="create.php">
			<input type="submit" class="btn btn-success btn-create" value="Create New User" >
		</form>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Name</th>
		      <th scope="col">Username</th>
		      <th scope="col">Email</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Website</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th valign="middle" scope="row"><img class="table_image" src="assets/images/icon.png" alt="icon"></th>
		      <td valign="middle" >Patricia Lebsack</td>
		      <td valign="middle">Karianne</td>
		      <td valign="middle">Juliane@mail.ru</td>
		      <td valign="middle">12345789</td>
		      <td valign="middle"><a href="#">kail.ru</a></td>
		      <td valign="middle">
		      	<form action="profile.php">
		      		<input type="submit" class="btn btn-outline-info btn-actions" value="View">
		      	</form>
		      	<form action="update.php">
		      		<input type="submit" class="btn btn-outline-primary btn-actions" value="Update">
		      	</form>
		      	<form action="">
		      		<input type="submit" class="btn btn-outline-danger btn-actions" value="Delete">
		      	</form>
		      </td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>

