<?php include 'Controllers/CategoryController.php';
	
	$categories = getAllCategories();
?>

<div class="center">
	<a href="Dashboard.php">Dashboard</a></h3>
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th>ID#</th>
			<th>Name</th>
			<th>Dob </th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Dept_ID</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo "<td>".$c["dob"]."</td>";
						echo "<td>".$c["credit"]."</td>";
						echo "<td>".$c["cgpa"]."</td>";
						echo "<td>".$c["dept_id"]."</td>";
						echo '<td><a href="Editstudent.php?id='.$c["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="Deletestudent.php?id='.$c['id'].'">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>