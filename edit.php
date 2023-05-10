<?php
	session_start();
	if(isset($_POST['edit'])){
		$users = simplexml_load_file('accounts.xml');
		foreach($users->user as $user){
			if($user->id == $_POST['id']){
		
				$user->firstname = $_POST['firstname'];
				$user->lastname = $_POST['lastname'];
				$user->address = $_POST['address'];
				$user->gender = $_POST['gender'];
				$user->course = $_POST['course'];
				$user->department = $_POST['department'];
				break;
			}
		}
 
		file_put_contents('accounts.xml', $users->asXML());
		$_SESSION['message'] = 'Member updated successfully';
		header('location: indexphp1.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: indexphp1.php');
	}
 
?>