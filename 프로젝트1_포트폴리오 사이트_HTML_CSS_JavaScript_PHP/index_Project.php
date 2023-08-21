<?php
    require('lib/print.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel ="stylesheet" type="text/css" href="./minesweeper.css">
  <script src="./minesweeper.js"></script>

  <script src="JavaScript_1.js?ver=1"></script> <!--자바스크립트 연동-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style_1.css?ver=1"> <!--CSS 연동-->
  
  <title>포트폴리오 사이트 - 프로젝트</title>
</head> 

<body id="body">
            <?php
                require('lib/header.php');
            ?>
        
        <button style="font-size:15px; background-color:#bff3c1; margin-left:935px; cursor: pointer"><a href="index_Project_create.php"><strong>글작성</strong></a></button>

        <section id="section" style="margin-top:20px;">
            <?php
                print_menu();
            ?>
 
        </section>
            <?php
                require('lib/footer.php');
            ?>
    </div>
    </section>

</body>
</html>