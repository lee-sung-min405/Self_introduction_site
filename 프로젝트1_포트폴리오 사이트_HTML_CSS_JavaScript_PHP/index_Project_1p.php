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
        
             <?php
                if(isset($_GET['id'])){
            ?>  
            <button  style="font-size:15px; background-color:#bff3c1; margin-left:950px; cursor: pointer">
                <a href="index_Project_update.php?id=<?php echo $_GET['id']; ?>">수정<br></a>
            </button>
            <?php
                    }
            ?>
            


        <section id="section" style="margin-top:21px;">
            
            
            <h1 style="margin-left: 30px;"><?php print_title();?></h1>
            <hr>

            <p style="margin-left:30px;margin-top:30px;"><?php print_section();?></p>

            <form action="index_Project_delete_process.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <input type="submit" value="삭제"  
                    style="font-size:15px; background-color:#bff3c1; margin-left:950px; cursor: pointer; margin-top:5px;">
            </form>
               

        </section>

            <?php
                require('lib/footer.php');
            ?>
    </div>
    </section>

</body>
</html>