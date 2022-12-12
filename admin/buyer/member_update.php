<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_buy=$_REQUEST['fbuy'];
$get_address=$_REQUEST['faddress'];
$get_tel=$_REQUEST['ftell'];
 

 
try{
      
    $sql_update = "UPDATE mks_buy 
            SET buy_name='$get_name',
                buy_address='$get_address',
                buy_tel='$get_tel', 
                buy_buy='$get_buy'
            WHERE buy_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
