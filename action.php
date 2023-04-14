<?php
    if(isset($_POST)){
        echo "Почта: " . $_POST['email'];
        echo "Пароль: " . $_POST['password'];
    }
?>