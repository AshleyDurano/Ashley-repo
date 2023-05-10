<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation in XML Files using PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
</head>
<body>
<div class="container">
    <h1 class="page-header">CRUD Operation in XML Files using PHP</h1>
    <div class="row">
        <a href="main.php" style="    border: solid 1px black;
    margin: 65px;
    padding: 10px;
    background: green;
    color: white;
    text-decoration: none;
    font-size: 20px;">Back to page ↩️</a>
        <div class="col-sm-8 col-sm-offset-2">

            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>UserID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>School</th>
                    <th>Major</th>
                    <th>Course</th>
                    <th>Department</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('accounts.xml');
 
                    foreach($file->user as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->lastname; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->gender; ?></td>
                            <td><?php echo $row->course; ?></td>
                            <td><?php echo $row->department; ?></td>
                            <td>
                                <a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn-success"><span class="edit">✏️</span> Edit</a>
                                <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn-danger"><span class="trash">🗑️</span> Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>