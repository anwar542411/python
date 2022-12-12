<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <title>MKshop[ซื้อขายของถิ่น]</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          .mySlides {display:none;}
        </style>
        <style>
          img {
              border-radius: 50%;
          }
          </style>
    </head>
    <body background="0019.jpg"> <!-- เปิด พื้นหลัง11111111111111111111111111111111111111111111111111 -->

      <body>
        <div class="container-">
        <div class="row">
        <div class="col-md-2" style="background-color:rgb(178, 172, 104);">
          <a href="../../web/home1.php">
          <img src="1.png"  width="200" height="200">
         </a>
        </div>
          <div class="col-md-10" style="background-color:rgb(178, 172, 104);"><br><br><br>
        <h1 style="color:white"><b><font face="DSN KrungKaSame" size="10" > <a href="../../web/home1.php">MKshop[ซื้อ ขาย ของท้องถิ่น]</a></h1></b></font>
      </div>
          </div>
          </div><br>
          </div>


          <div class="row"><br><!-- เปิด main menu -->
              <div class="col-md-9" style="background-color:rgb(68, 66, 44);"><font size="5" >
          <style>
        .dropbtn {
        background-color: rgb(68, 66, 44);;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
       }
        .dropdown {
        position: relative;
        display: inline-block;
       }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgb(68, 66, 44);;
        min-width: 160px;
        box-shadow: 10px 80px 160px 10px rgb(255, 255, 255);
        z-index: 1;
       }

        .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        text-align: left;
        display: block;
       } 

        .dropdown-content a:hover {background-color: #5f7596}

        .dropdown:hover .dropdown-content {
        display: block;
       }

        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
       }
      </style>

<style>
.dropbtn {
  background-color: rgb(178, 172, 104);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(178, 172, 104);
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
      </head>
<body>

  <div class="dropdown">
    <button class="dropbtn"><b><a href="../../web/home1.php">หน้าหลัก</a></b></button>
  
  </div>

<div class="dropdown">
  <button class="dropbtn"><b>เคื่องประดับ</b></button>
  <div class="dropdown-content">
  <a href="../../web/home01.php">เครื่องประดับ</a>
  <a href="../../web/home02.php">ของเล่น</a>
  
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><b>ของใช้</b></button>
  <div class="dropdown-content">
  <a href="../../web/home03.php">ของใช้ผู้ชาย</a>
  <a href="../../web/home04.php">ของใช้ผู้หญิง</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><b>อาหาร</b></button>
  <div class="dropdown-content">
  <a href="../../web/home05.php">อาหารแห้ง</a>
  <a href="../../web/home06.php">อาหารสด</a>
  <a href="../../web/home07.php">ผลไม้</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><b>อสังหาริมทรัพย์</b></button>
  <div class="dropdown-content">
  <a href="../../web/home08.php">ที่ดิน</a>
  <a href="../../web/home09.php">กระท่อม</a>
  </div>

</div> 
<div class="dropdown">
    <button class="dropbtn"><b><a href="../seller/member_form_insert.php">ขายสินค้า</a></b></button>
  
  </div>
</font></div>
              <div class="col-md-3" style="background-color:rgb(68, 66, 44);">
              <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Search(ค้นหา)</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="../../web/home01.php">เครื่องประดับ</a>
    <a href="../../web/home02.php">ของเล่น</a>
    <a href="../../web/home03.php">ของใช้ผู้ชาย</a>
    <a href="../../web/home04.php">ของใช้ผู้หญิง</a>
    <a href="../../web/home05.php">อาหารแห้ง</a>
    <a href="../../web/home06.php">อาหารสด</a>
    <a href="../../web/home07.php">ผลไม้</a>
    <a href="../../web/home08.php">ที่ดิน</a>
    <a href="../../web/home09.php">กระท่อม</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

              </div>
          </div><br><!-- ปิด ]main menu -->
          </div> 
    </head>
    <body>
    <div class="col-md-12" style="background-color: rgb(178, 172, 104);"><br><center>
        <center> 
        
        <a href="member_type_form_insert.php"> <font color="#FFFFFF">-เพิ่มข้อมูลประเภทการจ่าย </a>
        <table border="1px">
            <tr>
                <th><font color="#FFFFFF">ลำดับที่</font></th>
                <th><font color="#FFFFFF">ชื่อ สกุล</font></th>
                <th><font color="#FFFFFF">ช่องทางการชำระ</font></th>
                <th><font color="#FFFFFF">ที่อยู่</font></th>
                <th><font color="#FFFFFF">เบอร์ติดต่อ</font></th>
                <th><font color="#FFFFFF">เเก้ไขข้อมูล</font></th>
                <th><font color="#FFFFFF">ลบข้อมูล</font></th>
                
            </tr>
 
 
 
            <?php 
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM mks_buy 
                    LEFT JOIN buy_buy
                    ON mks_buy.buy_buy = buy_buy.buy_buy_id");
                    
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

            <tr>
                <td><font color="#FFFFFF"><?php echo $row_select['buy_id'];  ?></font></td>
                <td><font color="#FFFFFF"><?php echo $row_select['buy_name']; ?></font></td> 
                <td><font color="#FFFFFF"><?php echo $row_select['buy_buy_name']; ?></font></td> 
                <td><font color="#FFFFFF"><?php echo $row_select['buy_address']; ?></font></td> 
                <td><font color="#FFFFFF"><?php echo $row_select['buy_tel']; ?></font></td>
                 
                <td><font color="#FFFFFF"><a href="member_form_update.php?update_id=<?php echo $row_select['buy_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></font></td> 
 
                <td><font color="#FFFFFF"><a href="member_delete.php?del_id=<?php echo $row_select['buy_id']; ?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></font></td>  
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table><br>
        </div><br>
        <div class="col-md-12"><!-- เริ่มต้น Banner -->

<div class="row"><!-- เริ่มต้น Banner -->
    <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF"><br>
      <p>ค้นหาร้านค้า</p>
      <p>สมัครเป็นสมาชิก</p>
      <p>ลงทะเบียนเพื่อรับข่าวสาร</p></font>
    </div><br>
    <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF"><br>
      <p>รับความช่วยเหลือ</p>
      <p>สถานะคำสั่งซื้อ</p>
      <p>การส่งมอบ</p>
      <p>การคืนสินค้า</p>
      <p>ทางเลือกการชำระเงิน</p>
      <p>ติดต่อเรา</p></font>
    </div>
    <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF"><br> 
      <p>เกี่ยวกับ mkshop</p>
      <p>ข่าวสาร</p>
      <p>ร่วมงานกับเรา</p>
      <p>ร่วมลงทุนกับเรา</p>
      <p>ความยั่งยืน</p></font>
    </div> 
    <div class="col-md-6" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF"><br> 
      <p></p></font>
    </div>  

  </div><!-- ปิด class row main menu -->  
  
  
  
  <div class="row"><!-- เริ่มต้น Banner -->
    <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>ไทย</p>
      </font>
    </div>
    <div class="col-md-5" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>© 2022 mkshop, Inc. สงวนลิขสิทธิ์</p>
      </font>
    </div>
    <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>คำแนะนำ</p>
      </font>
    </div>  
    <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>เงื่อนไขการขาย</p></font>
    </div> 
    <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>ข้อกำหนดการใช้</p></font>
    </div>    
    <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
      <font color="#FFFFFF">
      <p>นโยบายความเป็นส่วนตัวของ mkshop</p></font>
    </div>
  </div> 

        </center>
    </body>
</html>