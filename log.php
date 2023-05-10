<?php 
 session_start();
$users = simplexml_load_file("accounts.xml");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    
        foreach($users-> user as $user){
            if($user->username == $username && $user->password == $password){              
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = (string) $user->id;
                $_SESSION['firstname'] = (string) $user->firstname;
                $_SESSION['lastname'] = (string) $user->lastname;
                $_SESSION['address'] = (string) $user->address;
                $_SESSION['gender'] = (string) $user->gender; 
                $_SESSION['course'] = (string) $user->course; 
                $_SESSION['department'] = (string) $user->department; 
                $_SESSION['date'] = (string) $user->date; 

                      header('Location: main.php');
                exit();
            }
        }   
        header('Location: alert.php');
        exit();
}
?>