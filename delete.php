<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './config.php';
$id = filter_input(INPUT_GET, "id");
$sql = "delete from `admin2` where `id` = $id";
$qry = mysqli_query($conn, $sql);
if($qry){
    echo 'Deleted successfully';
}else{
    echo 'Sryy !!!! can not be deleted ';
}
