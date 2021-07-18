<?php include 'Controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control">
			<h4 class="text">DOB:</h4> 
			<input type="text" name="dob" value="<?php echo $c["dob"];?>" class="form-control">
			<h4 class="text">Credit:</h4> 
			<input type="text" name="credit" value="<?php echo $c["credit"];?>" class="form-control">
			<h4 class="text">CGPA:</h4> 
			<input type="text" name="cgpa" value="<?php echo $c["cgpa"];?>" class="form-control">
			<h4 class="text">Dept_ID:</h4> 
			<input type="text" name="dept_id" value="<?php echo $c["dept_id"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="edit_category" value="Edit Category" class="form-control">
		</div>
	</form>
</div>
