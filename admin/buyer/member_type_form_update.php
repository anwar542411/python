<?php 
    include "../../connect/connect_db.php";
    $get_update_id=$_REQUEST['update_id'];
 
    try{
        $sql_select= $conn->prepare("SELECT * FROM buy_buy where buy_buy_id='$get_update_id' ");//การเขียนคำสั่ง SQL
        $sql_select->execute();//สั่งให้ sql_select ทำงาน
        $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);        
    
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
    //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
?>
<html>
    <head>
        <title>เเบบฟอร์มบันทึกข้อมูลประเภทการจ่าย</title>
    </head>
    <body>
        <center>
        <form action="member_type_update.php?update_id=<?php echo $get_update_id; ?>" method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลประเภทการจ่าย</h1></td>
                </tr>
                <tr>
                    <td>ประเภทการจ่าย</td>
                    <td><input type="text" name="fname" size="50" value="<?php echo $row_select['buy_buy_name']; ?>"></td>
                </tr>
                <tr>
                   
        
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสมาชิก"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>
