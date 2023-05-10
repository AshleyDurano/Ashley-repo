<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$users = simplexml_load_file('accounts.xml');
		$user = $users->addChild('user');
		$user->addChild('id', $_POST['id']);
		$user->addChild('username', $_POST['username']);
		$user->addChild('password', $_POST['password']);
		$user->addChild('firstname', $_POST['firstname']);
		$user->addChild('lastname', $_POST['lastname']);
		$user->addChild('address', $_POST['address']);
		$user->addChild('gender', $_POST['gender']);
		$user->addChild('course', $_POST['course']);
		$user->addChild('department', $_POST['department']);
		$user->addChild('date', $_POST['date']);
		
		// Save to file
		// file_put_contents('files/members.xml', $users->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($users->asXML());
		$dom->save('accounts.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'Member added successfully';
		header('location: indexphp1.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: indexphp1.php');
	}
?>