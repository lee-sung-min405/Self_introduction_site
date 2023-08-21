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
  
  <title>포트폴리오 사이트 - 기술 스펙</title>
</head> 

<body id="body">
            <?php
                require('lib/header.php');
            ?>
        <h1 align="center">프로젝트 글쓰기</h1>
        
        <section id="section" style="margin-top:20px; height:950px">

            <form action="index_Project_create_process.php" method="post">
                <p><input type="text" name="title" placeholder="제목을 입력해 주세요." style="width:990px;height:45px;font-size:30px;"></p>
                <p><textarea name="description" placeholder="내용을 입력하세요." style="width:990px;height:800px;font-size:20px;"></textarea></p>
                <p><input type="submit" style="font-size:20px; background-color:#bff3c1; color:green; margin-left:940px; cursor: pointer"></p>
            <form>

        </section>

            <?php
                require('lib/footer.php');
            ?>
    </div>
    </section>

</body>
</html>