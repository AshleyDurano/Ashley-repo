<?php 
session_start();
if(!isset($_SESSION['username'])){
header('Location: log.php');
exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,100&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>    

</head>
<body class="index-body">
<header class="header-main">

    <nav class="nav-main">
        <p>MYBLOG</p>
        <a href="#">Home</a>
        <a href="../MYBLOG/registeration.html">Sign up</a>   
        <a href="logout.php">Log out</a>
         
    </nav>
    </header>
<div class="header">
  <h2>MY BLOG</h2>
    <p>Welcome to the blog <b style="background-color: black; color: white; font-weight: 100; padding: 3px 10px;">
        <?php echo $_SESSION["firstname"] . "  " . $_SESSION["lastname"]; ?></b></p>
</div>

<div class="rows">
        <div class="leftcolumn">
            <div class="card">
                <div class="fakeimg" style="height:200px;">
                
                </div>
                <div class="texts">
                <h2></h2>
                <h2>Game Website</h2>
                
                <p>Explore the gaming industry. build your own time to Play and Enjoy. This is my Project in PC 223 subject that would submitted to sir Jover Isoto Capuyan.</p>
                </div>
                <button>READMORE »</button>
                <div class="right-buttom-comment"><p>Comments <b>0</b></p></div>
            </div>

            <div class="card">
            <div class="fakeimg1" style="height:200px;"></div>
            <div class="texts">
            <h2>CRUD OPERATION</h2>
            <h4>Data Created: <?php echo $_SESSION['date'];?></h4>
            <br>
            <p>This program allows you to Create Read Update Delete Data and you can check account and edit here, click bellow.</p>
            <a href="indexphp1.php" style="border: solid 1px black;
    background: black;
    color: white;
    padding: 6px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;">READMORE »</a>
            <div class="right-buttom-comment"><p>Comments <b class="bbb">2</b></p></div>
            </div>
            </div>
        </div>
  <div class="rightcolumn">
    <div class="card">
      <div class="fakeimg2" style="height:200px;"></div>
      <div class="texts">
      <h2>My Name</h2>
      
      <p><?php echo $_SESSION['firstname'] . '  ' . $_SESSION['lastname'];?></p>
    </div>
    </div>
    <div class="card">
      <h3>Personal Information</h3>
      <div class="fakeimg3">
          <div class="text-inside"><h1>School:</h1><p><?php echo $_SESSION['address'];?></p>
          </div>
      </div>
      <hr>
      <div class="fakeimg4">
        <div class="text-inside"><h1>Major:</h1><p><?php echo $_SESSION['gender'];?></p>
        </div>
      </div><hr>
      <div class="fakeimg5">
          <div class="text-inside"><h1>Department:</h1><p><?php echo $_SESSION['department'];?></p>
          </div>
      </div>
      <br>
      <hr>
      
      <div class="fakeimg6">
        <div class="text-inside"><h1>Course:</h1><p><?php echo $_SESSION['course'];?></p>
        </div>
      </div><br>
    </div>
    <div class="card">
      <h3>Tags</h3>
      <ul>
        <li class="first-li">Travel</li>
        <li>New York</li>
        <li>London</li>
        <li>IKEA</li>
        <li>Norway</li>
        <li>DIY</li>
        <li>Ideas</li>
        <li>Baby</li>
        <li>Family</li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
