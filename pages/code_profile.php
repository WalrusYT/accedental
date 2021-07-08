<?php
$result_edit = 0;
$id_hotel = null;
$surname = '';
$name = '';
$patronymic = '';
$passport = '';
$birthday = '';
$login = '';
$pass = '';
$email = '';
$isChanged = false;
$user_id = null;
if(isset($_REQUEST['sub_data']))
{
    $login_customer = $_COOKIE['user'];
    $sql="SELECT * FROM customer c WHERE c.login = '$login_customer';";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $surname=$r['surname'];
    $name=$r['name'];
    $patronymic=$r['patronymic'];
    $passport=$r['passport'];
    $birthday=$r['birthday'];
    $login=$r['login'];
    $pass=$r['pass'];
    $email = $r['mail'];
    $user_id = $r['id'];
}
}
if(isset($_REQUEST['sub_data_edit']))
{
    $surname=$_REQUEST['surname'];
    $name=$_REQUEST['name'];
    $patronymic=$_REQUEST['patronymic'];
    $passport=$_REQUEST['passport'];
    $birthday=$_REQUEST['birthday'];
    $login=$_REQUEST['login'];
    $pass=$_REQUEST['pass'];
    $user_id = $_REQUEST['user_id'];
    $email = $_REQUEST['email'];
}
if (isset($_REQUEST['sub_data_save']))
{
    $surname=$_REQUEST['surname_edit'];
    $name=$_REQUEST['name_edit'];
    $patronymic=$_REQUEST['patronymic_edit'];
    $passport=$_REQUEST['passport_edit'];
    $birthday=$_REQUEST['birthday_edit'];
    $login=$_REQUEST['login_edit'];
    $pass=$_REQUEST['pass_edit'];
    $email = $_REQUEST['email_edit'];
    $user_id = $_REQUEST['user_id_edit'];
        $sql = "SELECT f_checkExist('$user_id','$login','$passport') AS 'res'";
        $query=  mysqli_query($con, $sql);
        while ($r=  mysqli_fetch_assoc($query)) {
        $result_edit=$r['res'];
    }
    if ($result_edit==0 && is_numeric($passport) && !is_numeric($name) && !is_numeric($surname) && !is_numeric($patronymic))
    {
    $sql="SELECT update_user($user_id,'$login','$email','$name','$surname','$patronymic','$passport','$birthday','$pass') AS 'res';";
    $query=  mysqli_query($con, $sql);
    $result_edit = 1;
    setcookie('user', '', time()-3600, '/accedental');
    setcookie('user', $login, time()+10000, '/accedental');
    }
    else
    {
        $result_edit = 0;
    }
}

