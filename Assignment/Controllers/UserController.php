<?php
    include '../Models/DBConfig.php';
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
	$email="";
    $err_email="";
    $pass="";
    $err_pass="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["signup"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["email"])){
		    $err_email = "Email Required";
			$hasError = true;
	    }
		else{
		    $email = $_POST["email"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			$rs = insertUser($name,$uname,$email,$pass);
			if($rs === true){
				header("Location: Login.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["login"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: Dashboard.php");
			}
			$err_db = "User Invalid";
		}
	}
	
	function insertUser($name,$uname,$email,$pass){
		$query = "insert into users values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);
	}
	function authenticateUser($uname,$pass){
		$query = "select * from users where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>