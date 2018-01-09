<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        include './config.php';
        $sql = "select * from `admin2`";
        $qry = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($qry)){
         
     ?>
         <table class="table">
                <thead>
                <th>Job Title</th>
                <th>Job Function</th>
                <th>Company Name</th>
                 
                
                </thead>
                
                <tbody>
                <td class="col-md-1 col-md-offset-1" style="word-break: break-all;">
                    <a href="show_details.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
                
                <td class=" " style="word-break: break-all; width: 10px"><?php echo $row['username']; ?></td>
                <td class="col-md-1 col-md-offset-1" style="word-break: break-all;"><?php echo $row['password']; ?></td>
                
                       <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                        <br/>
                        <br/>
                        
                         <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
        <?php } ?>
    </body>
</html>
