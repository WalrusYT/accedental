<?php
$error = '';
if (isset($_REQUEST['sub_reg'])) {
    $surname = $_REQUEST['surname'];
    $name = $_REQUEST['name'];
    $patronymic = $_REQUEST['patronymic'];
    $passport = $_REQUEST['passport'];
    $birthday = $_REQUEST['birth'];
    $login = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $email = $_REQUEST['mail'];
    $birth = new DateTime($birthday);
    $right_now = new DateTime();
    if (!is_numeric($surname) && $surname!='' && !is_numeric($name) && $name!='' && !is_numeric($patronymic) && $patronymic!='' && is_numeric($passport) && $birthday!=null && $login!='' && $pass!='' && $passport!='' && $right_now>$birth)
    {
    $sql = "SELECT f_login('$login','$passport') AS 'login';";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);
    $isExist = $result['login'];
    if ($isExist == 0) {
            $sql = "INSERT IGNORE INTO customer(surname, name, patronymic, passport, birthday, login, pass, mail) VALUES ('$surname', '$name', '$patronymic', '$passport', '$birthday', '$login', '$pass', '$email') ";
    $query = mysqli_query($con, $sql);
        header('Location: ./login.php');
        exit();
    } else {
        $error = 'Такой пользователь уже существует.';
    }
    }
    else
    {
        $error = 'Введите данные корректно.';
    }

}

