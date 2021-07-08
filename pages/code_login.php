<?php
$error = '';
if (isset($_REQUEST['sub_login'])) {
    $login = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $sql = "SELECT f_account('$login','$pass') AS 'account';";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);
    $isExist = $result['account'];
    if ($isExist == 0) {
        $error = 'Неверные данные.';
    } else {
        setcookie('user', $login, time()+10000, '/accedental');
        header('Location: ../index.php');
        exit();
    }
}


