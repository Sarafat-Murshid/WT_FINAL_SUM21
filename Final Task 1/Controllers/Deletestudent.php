<?php
	include 'Controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
	
?>

<html>
	<body>
	<h1><?php echo $err_db;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
						<input type="text" name="name" value="<?php echo $c["name"];?>" placeholder="Student Name">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="delete" value="Delete">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>