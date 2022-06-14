<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
            if ($_POST['password']===$password){
                echo '<p class="success">Congratulations,you have logged in!</p>';
            }else{
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
?>