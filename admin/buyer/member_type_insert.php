<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_buy_buy_name=$_REQUEST['fbuy'];
 
 
 
try{
$sql_insert = "insert into buy_buy (buy_buy_id,buy_buy_name) 
values ('','$get_buy_buy_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    //echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>