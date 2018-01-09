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
    </head>
    <body>
        <?php
        // put your code here
        include './config.php';
        $id = filter_input(INPUT_GET, 'id');
        echo $id;
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sql = "UPDATE `admin2` SET `username`= '".$_POST['username']."',`password`= '".$_POST['password']."' WHERE `id` = '$id'";
       $qry= mysqli_query($conn, $sql);
       if($qry){
           header("location:./index.php");
       }else{
           echo 'Fail';
       }
        
        }
        ?>
         <form action="edit.php" method="post" class="form-group">
             <label>Username: </label>
             <input type="text" name="username" class="form-control">
               <label>Password: </label>
             <input type="text" name="password" class="form-control">
            
            <br/>
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
    </body>
</html>
