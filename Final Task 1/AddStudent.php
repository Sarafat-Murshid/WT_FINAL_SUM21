<?php include 'Controllers/CategoryController.php';?>
	<div class="center">
		<h5 class="text-danger"><?php echo $db_err;?></h5>
		<form method="post" action="" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">DOB:</h4> 
				<input type="text" name="dob" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Credit:</h4> 
				<input type="text" name="credit" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<input type="text" name="cgpa" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Dept_id:</h4> 
				<input type="text" name="dept_id" class="form-control">
			</div>
			
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">
			</div>
		</form>
	</div>
