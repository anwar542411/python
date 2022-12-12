<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_name=$_REQUEST['fname'];
$get_address=$_REQUEST['faddress'];
$get_tel=$_REQUEST['ftell'];
$get_buy=$_REQUEST['fbuy'];

try{
$sql_insert = "insert into mks_buy (buy_id,buy_name,buy_address,buy_tel,buy_buy) 
values ('','$get_name','$get_address','$get_tel','$get_buy')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
