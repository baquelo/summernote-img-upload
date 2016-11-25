<?php

$dir_name = "uploads/";
    move_uploaded_file($_FILES['file']['tmp_name'],$dir_name.$_FILES['file']['name']);
    echo "http://itabirafest.com/inscricao/administracao/simg/".$dir_name.$_FILES['file']['name'];
?>