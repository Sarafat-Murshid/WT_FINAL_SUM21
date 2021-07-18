<?php
	require_once 'Models/DBConfig.php';
	$err_db="";
	if(isset($_POST["add_category"])){
		$rs = insertCategory($_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: Allstudents.php");
		}
		$db_err = $rs;
	}
	else if (isset($_POST["edit_category"])){
		$rs = updateCategory($_POST["id"],$_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: Allstudents.php");
		}
		$db_err = $rs;
	}
	
	function insertCategory($name,$dob,$credit,$cgpa,$dept_id){
		$query = "insert into student values (NULL,'$name','$dob','$credit','$cgpa','$dept_id')";
		return execute($query);
	}
	function getAllCategories(){
		$query = "select * from student";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from student where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function updateCategory($name,$dob,$credit,$cgpa,$dept_id,$id){
		$query = "update student set name='$name',dob='$dob',credit='$credit',cgpa='$cgpa',dept_id='$dept_id' where id = $id";
		return execute($query);
	}
	function deleteCategory($id)
	{
		$query= "delete from student where id=$id";
		return execute($query);
		
	}
?>