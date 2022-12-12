<?php
include "../../connect/connect_db.php";  
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
 
 
try{
    $sql_update = "UPDATE type_sell 
            SET buy_buy_name='$get_name'
            WHERE buy_buy_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
 
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_type_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
