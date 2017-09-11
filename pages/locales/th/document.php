<?php
  require_once __DIR__ . '/../../../php/db_ip_connection.php';
  // if($usrcountrycode == "TH" && !isset($_GET['lang'])){
  //   header("Location:/document.php?lang=th");
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website of ARG teamwork">
  <meta name="author" content="natpaphon sukitpaneenit">
  <meta name="Keywords" content="csgo, csgoserver, เซิฟ csgo, เซิฟเกม, communityserver, dedicated server">
  <title>ARG - The house of gamer</title>
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="../../../resource/css/font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="../../../resource/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../../resource/css/document.css" type="text/css">
  </head>
  <body>
    <div class="main-container">
    <div class="left-menu">
        <a href="http://www.arg.in.th"><img src="../../../resource/img/logo.png" class="logo"></img></a>
        <a href="#" class="active menubar" id="content1">ทำไมถึงน่าเปิดเซิฟเวอร์กับเรา</a>
        <a href="#" class="menubar" id="content2">บริการของเรามีอะไรบ้าง</a>
        <a href="#" class="menubar" id="content3">จะเริ่มเปิดเซิฟอย่างไร</a>
        <a href="#" class="menubar" id="content4">การใช้งานเซิฟ</a>
    </div>
    <div class="content">
      <div class="content-header">
        ARG Document
      </div>

      <div class="content-body show content1">
        <h3> แนะนำตัวกันซักนิด </h3>
        เราเป็นทีมที่ทำเซิฟมามากกว่าสองปี อีกทั้งเรายังพร้อมให้บริการครบวงจรตั้งแต่เริ่มจนจบการทำงาน
        ทำให้มั่นใจได้ว่าเราเป็นทีมงานที่มีประสบการณ์ และ คุณสามารถมีเซิฟเวอร์ของตัวเองได้โดยไม่ต้องมีประสบการณ์มาก่อน
      </div>
      <div class="content-body content2">
        <h3> บริการของเรามีอะไรบ้าง</h3>
        เราให้บริการเซิฟเวอร์ในราคาที่สมเหตุผล ทั้งยังให้บริการในการพัฒนาต่าง ๆ เช่นเวปไซด์ API หรือ เซิฟเวอร์รูปแบบอื่น ๆ อีกด้วย
        อย่างไรก็ตามอย่ากังวลที่จะติดต่อเราเพื่อปรึกษาถึงค่าใช้จ่าย หรือ ความเป็นไปได้ในการทำงานอื่น ๆ
      </div>
      <div class="content-body content3">
        <h3> เปิดเซิฟเวอร์อย่างไร</h3>
        ในตอนนี้ การเปิดเซิฟเวอร์ และ ใช้บริการทำได้ผ่านทาง Facebook และ อีเมล์โดยท่านจะได้รับคำแนะนำจากแอดมินที่ประจำการอยู่
        โดยคุณควรเตรียมข้อมูลที่ใช้งานไว้ให้พร้อมประกอบด้วย รูปแบบเซิฟเวอร์ ชื่อเซิฟเวอร์ รหัสผ่าน และ สตรีมโปรไฟล์ของคนที่จะเป็นแอดมิน
      </div>
      <div class="content-body content4">
        <h1> การใช้งานเซิฟเวอร์ </h1>
        <h3> การเชื่อมต่อเข้าสู่เซิฟเวอร์ </h3>
        <p> หลังจากที่ท่านได้รับ IP เข้าสู่เซิฟเวอร์จากเราท่านสามารถเข้าสู่เซิฟเวอร์ได้ทั้งจากการเพิ่มเซิฟเวอร์ชุมชน หรือ หาในเซิฟเวอร์บนอินเทอร์เนท แต่วิธีที่เราแนะนำคือการเชื่อมต่อผ่าน console</p>
        <ul>
          <li>เชื่อมต่อผ่าน console พิมพ์ตามข้อมูลดังกล่าวลงใน console connect ip:port; password xxxx; -- เช่น connect arp.com:22111;password 1234;</li>
          <li>เชื่อมต่อผ่าน web browser พิมพ์ข้อมูลดังกล่าวลงในช่องเวปไซด์ steam://connect/ip:port -- เช่น steam://connect/arp.com:22111</li>
        </ul>
        <h3> ระบบแอดมิน </h3>
        <p> คุณสามารถจัดการดูแลเซิฟเวอร์ของคุณได้ด้วยคำสั่งในช่องแชท !admin /!sm_admin </p>
        <p> หลังพิมพ์จะมีหน้าต่างขึ้นมาให้คุณกดใช้งานผ่านตัวเลข </p>
        <p><img src="../../../resource/img/howto1.jpg"></p>
        <p> โดยที่คุณจะใช้บ่อย ๆ คือเบอร์ 2 </p>
        <p><img src="../../../resource/img/howto2.jpg"></p>
        <p> เมื่อกดเข้ามาแล้วสามารถกดเลือกแมปได้ที่ข้อ 1 </p>
        <h3> RCON และ การตั้งค่าชั่วคราว </h3>
        <p> คุณสามารถเปลี่ยนค่าบางอย่างของเซิฟเวอร์ได้โดยจะมีผลจนกว่าเซิฟเวอร์จะปิดปรับปรุงหรืออัพเดทแพทช์</p>
        <p> เช่นพิมพ์ !sm_rcon value -- !sm_rcon mp_freezetime 5</p>
        <p> นอกจากนี้ยังมีคำสั่ง chat ที่น่าสนใจและใช้บ่อยคือ </p>
        <ul>
          <li> /t & /ct สำหรับตั้งชื่อทีม เช่น /t Math /ct Calculus</li>
        </ul>
        <p><img src="../../../resource/img/howto3.jpg"></p>
        <h3> โหมดฝึกซ้อม </h3>
        <p> คุณสามารถฝึกซ้อมแผน หรือ ฝึกปาระเบิดได้ในโหมดนี้ </p>
        <p> ด้วยการพิมพ์ !prac เพื่อเปิดโหมดซ้อมและ !warmup เพื่อปิด </p>
        <p><img src="../../../resource/img/howto4.jpg"></p>
        <p> โดยคำสั่ง console ที่น่าสนใจในโหมดนี้คือ </p>
        <ul>
          <li>noclip เพื่อบิน</li>
        </ul>
        <h3> การเล่นปกติ และ Veto </h3>
        <p> โดยปกติคุณต้องรอผู้เล่นทุกคนพิมพ์ .r เพื่อเริ่มเกม</p>
        <p> แต่คุณสามารถบังคับเริ่มเกม หรือ เริ่มโดยที่ผู้เล่นน้อยกว่า 10 ได้ด้วยคำสั่ง !fs</p>
        <p> คุณสามารถเล่น veto ได้ด้วยคำสั่ง !veto </p>
        <p> โดยคำสั่ง chat ที่น่าสนใจในโหมดนี้คือ </p>
        <ul>
          <li>!veto -- เริ่ม veto</li>
          <li>!fs , !fe -- เริ่มและหยุดแมทนั้น ๆ </li>
          <li>!pause , !unpause -- หยุด และ กลับมาเล่นต่อ </li>
        </ul>
        <h3>มีคำถามเพิ่มเติม หรือ ต้องการให้เราปรับปรุง Document โปรดติดต่อทางเรา </h3>
      </div>
    </div>
    <div class="footer">
      <div class="footer-left copyright">
        <p>© 2017 ARG ALL RIGHTS RESERVED</p>
      </div>
      <div class="footer-right i18n">
        <p><a href="./document.php?lang=th">TH - ไทย</a>
        <a href="../../document.php?lang=en">EN - English</a><p>
      </div>
    </div>
    </div>
  </body>
  <!-- jQuery -->
  <script src="../../../resource/js/jquery.js"></script>
  <script>
  $(document).ready(function(){
    // Set document header
    var contentHead = $( "a.active").text();
    $(".content-header").text("doc > " + contentHead);
    // Set content
    $(".content-body").hide();
    $(".show").show();
    // Tab function
    $("a.menubar").click(function(){
      // onClick toggle active , deactive
      $(".active").toggleClass("active");
      $(this).toggleClass("active");
      $(".content-body").hide();
      var id = $(this).attr('id');
      // fade in a litte bit ; w ;
      $("."+id).show();
      // Get content name and put to header
      var contentHead = $( "a.active").text();
      $(".content-header").text("doc > " + contentHead);
    });
  });
  </script>
</html>
