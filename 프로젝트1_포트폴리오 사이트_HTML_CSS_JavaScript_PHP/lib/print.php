<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel ="stylesheet" type="text/css" href="./minesweeper.css">
  <script src="./minesweeper.js"></script>

  <script src="JavaScript_1.js"></script> <!--자바스크립트 연동-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style_1.css"> <!--CSS 연동-->
  
  <title>포트폴리오 사이트 - 프로젝트</title>
</head> 
<body>
    <?php
    function print_title(){
            
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        }
        else{
            echo "환영합니다.";
        }
    }
    ?>

    <?php
    function print_section(){
        if(isset($_GET['id'])){
            $basename=basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("data\\".$basename.""));
        }
    }
    ?>

    <?php
    function print_menu(){
        $list=scandir('./data');
        $i=0;
    ?>
    <ul class="card-ul">
    <?php
        while($i < count($list)){
            $title =htmlspecialchars($list[$i]);
            if($list[$i]!='.'){
                if($list[$i]!='..'){
                    echo "<li><a href=\"index_Project_1p.php?id=$title\">
                        <div class='card-box'>
                            <div class='img-gradient'></div>
                            <img src='image/Project_pic.png' alt='프로젝트사이트 사진'>
                            <div class='text-wrap'>
                                <h1>$title</h1>
                                <p>$title 더보기</p>
                            </div>
                        </a></li>";
                }
            }
            $i=$i+1;
        }?>
    </ul>
        <?php
    }
    ?>
</body>
    