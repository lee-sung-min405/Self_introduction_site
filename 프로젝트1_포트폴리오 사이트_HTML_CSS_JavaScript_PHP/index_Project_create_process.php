<?php
   file_put_contents('data/'.$_POST['title'],$_POST['description']);
   header('Location:/index_Project.php?id='.$_POST['title']);
?>