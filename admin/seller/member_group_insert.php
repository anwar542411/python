<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_type_sell_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "insert into group_sell (group_sell_id,group_sell_name) 
values ('','$get_type_sell_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    //echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>