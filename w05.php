<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6014421004-w05</title>
</head>
<body>
<?php
    echo "1.ฟังก์ชัน Pow" . "<br>";
     /*  ฟังก์ชัน Pow
         ฟังก์ชันนี้จะใช้ในการหาค่าเลขยกกำลัง
         รูปแบบ 
              pow (ตัวเลขฐาน,ตัวเลขยกกำลัง)
      ตัวอย่าง */
      echo "result = ". pow (5,2)."<br>"; // 25
      echo "result = ". pow (5,5)."<br>"; // 3125
 ?>

     <br>
     <br>
<?php
    echo "2.ฟังก์ชัน array_sum" . "<br>";
    /* ฟังก์ชัน array_sum
        ฟังก์ชันนี้เป็นการนำค่าในอาร์เรย์มาบวกกันทั้งหมด
        รูปแบบ 
            array_sum ( array $array ) : number
     ตัวอย่าง */
    $a = array(2, 4, 6, 8);
    echo "sum(a) = " . array_sum($a) . " <br>"; //20
    $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
    echo "sum(b) = " . array_sum($b) . " <br>"; //6.9
?>
    
    <br>
    <br>
<?php
      echo "3.ฟังก์ชัน Round" . "<br>";
      /*  ฟังก์ชัน Round
          ฟังก์ชันนี้เป็นฟังก์ชันที่มีการปัดเศษลงหากหลักสุดท้ายมีค่าน้อยกว่า 5 และปัดเศษขึ้นหากหลักสุดท้ายมีค่าตั้งแต่ 5 ขึ้นไป พารามิเตอร์ มีดังนี้
          val- ค่าตัวเลข
          precision - จำนวนทศนิยม
          mode - เป็นการเลือกประเภทในการปัดเศษ
              PHP_ROUND_HALF_UP : ถึง 5 ปัดขึ้น
              PHP_ROUND_HALF_DOWN : ต่อให้ถึง 5 ก็ปัดลง
              PHP_ROUND_HALF_EVEN : จำนวนเต็มเป็นเลขคี่และถึง 5 ปัดขึ้น
              PHP_ROUND_HALF_ODD : จำนวนเต็มเป็นเลขคู่และถึง 5 ปัดขึ้น
          รูปแบบ 
               round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] ) : float
       ตัวอย่าง */
       echo "3.4 = ". round(3.4). "<br>";         // 3
       echo "3.5 = ". round(3.5). "<br>";         // 4
       echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_UP). "<br>";   // 10
       echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_DOWN). "<br>"; // 9
       echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_EVEN). "<br>"; // 10
       echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_ODD). "<br>";  // 9
       echo "1.55 = ". round( 1.55, 1, PHP_ROUND_HALF_UP). "<br>";   //  1.6
       echo "1.55 = ". round( 1.55, 1, PHP_ROUND_HALF_DOWN). "<br>"; //  1.5
       
  ?>
<?php
    echo "3.ฟังก์ชั่นที่เกี่ยวกับการนำค่าที่น้อยที่สุดใน array ออกมาแสดงผล" . "<br>";
    echo min(200, 300, 100, 600, 700)."<br />"; // 100
    echo min(array(200, 400, 500))."<br />"; // 200
    //ฟังก์ชัน min() เป็นคำสั่งที่จะนำค่าน้อยที่สุดออกมา แสดงผล
?>
<?php
    echo "4.ฟังก์ชั่นที่เกี่ยวกับการนำค่าที่มากที่สุดใน array ออกมาแสดงผล" . "<br>";
    echo max(100, 300, 500, 600, 700)."<br />"; // 700
    echo max(array(200, 400, 500))."<br />"; // 500
    //ฟังก์ชัน max() เป็นคำสั่งที่จะนำค่ามากที่สุดออกมา แสดงผล
?> 
<?php
    echo "ฟังก์ชั่นที่5 ฟังก์ชั่นที่เกี่ยวกับการหาค่าลอการิทึมฐาน 10" . "<br>";
    echo log10(50)."<br>";
?>
</body>
</html>