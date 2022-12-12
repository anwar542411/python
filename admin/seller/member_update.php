<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_type=$_REQUEST['ftype'];
$get_group=$_REQUEST['fgroup'];
$get_price=$_REQUEST['fprice'];
$filename = $_FILES["fimg"]["name"];
$get_details=$_REQUEST['fdetails'];
$get_eddress=$_REQUEST['feddress'];
$get_tell=$_REQUEST['ftell'];
 

 
try{
      
    $sql_update = "UPDATE mks_sell 
            SET sell_name='$get_name',
                sell_type='$get_type',
                sell_group='$get_group',
                sell_price='$get_price',
                sell_img='$filename',
                sell_details='$get_details',
                sell_eddress='$get_eddress',
                sell_tel='$get_tell' 
            WHERE sell_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
