<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
        <title>เเสดงข้อมูลสมาชิกทั้งหมด</title>
    </head>
    <body>
   
        <center> 
        <a href="member_type_insert.php"> -เพิ่มข้อมูลสมาชิก </a>
        <a href="member_type_form_insert.php"> -เพิ่มข้อมูลประเภทสมาชิก </a>
        <table border="1px">
            <tr>
                <th>รหัสสมาชิก</th>
                <th>ชื่อประเภท</th>   
            </tr>
 
 
 
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM type_sell");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['type_sell_id'];  ?></td>
                <td><?php echo $row_select['type_sell_name']; ?></td>     
                <td><a href="member_type_form_update.php?update_id=<?php echo $row_select['type_sell_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="member_type_delete.php?delete_id=<?php echo $row_select['type_sell_id']; ?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table>
        </center>
    </body>
</html>