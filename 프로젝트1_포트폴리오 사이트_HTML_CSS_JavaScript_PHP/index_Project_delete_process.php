<?php
    unlink('data/'.basename($_POST['id']));
    header('Location:/index_Project.php?id='.$_POST['title']);
?>