<?php
$t = 0;
$n = 0;
$result = '';
if (isset($_REQUEST['sub_edit']))
{
    $t = 1;
    $sql="SELECT * FROM customer c";
    echo "<tr><td></td><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Паспорт</td><td>Дата рождения</td><td>Почта</td><td>Логин</td><td>Пароль</td></tr>";
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
    $n=$r['id'];
    echo "<tr><td><input name='sel_customer' type='radio' value='$n' checked/></td><td>$surname</td><td>$name</td><td>$patronymic</td><td>$passport</td><td>$birthday</td><td>$email</td><td>$login</td><td>$pass</td></tr>";
}
}
if (isset($_REQUEST['sub_edit2']))
{
    $t = 2;
    $id_staff = $_REQUEST['staff'];
    $sql="SELECT s.id, h.name AS 'hotel', s.surname, s.name, s.patronymic, s.phone, s.passport, s.salary FROM staff s JOIN hotel h ON s.hotel_id = h.id WHERE s.status_id = $id_staff;";
    echo "<tr><td></td><td>Отель</td><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Телефон</td><td>Паспорт</td><td>Зарплата</td></tr>";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $hotel = $r['hotel'];
    $surname=$r['surname'];
    $name=$r['name'];
    $patronymic=$r['patronymic'];
    $passport=$r['passport'];
    $phone=$r['phone'];
    $salary=$r['salary'];
    $n=$r['id'];
    echo "<tr><td><input name='sel_staff' type='radio' value='$n' checked/></td><td>$hotel</td><td>$surname</td><td>$name</td><td>$patronymic</td><td>$phone</td><td>$passport</td><td>$salary</td></tr>";
}
}
if (isset($_REQUEST['sub_edit3']))
{
    $t = 3;
    $id_order = $_REQUEST['order'];
    $sql="CALL hotel_showOrders($id_order);";
    echo "<tr><td>Номер заказа</td><td>Отель</td><td>Вид номера</td><td>Вместимость</td><td>Удобства</td><td>Номер</td><td>Дата заселения</td><td>Дата выселения</td><td>Стоимость</td></tr>";
    $query=  mysqli_query($con, $sql);
    while ($r=  mysqli_fetch_assoc($query)) {
        $num = $r['num'];
        $name = $r['name'];
        $type=$r['type'];
        $cap = $r['cap'];
        $facilities = $r['facilities'];
        $numRoom = $r['numRoom'];
        $check_in = $r['check-in'];
        $check_out = $r['check-out'];
        $cost = $r['cost'];
        $photo = $name.$type.$cap;
        echo "<tr><td>$num</td><td>$name</td><td>$type</td><td>$cap</td><td>$facilities</td><td>$numRoom</td><td>$check_in</td><td>$check_out</td><td>$cost</td></tr>";
    }
}
if (isset($_REQUEST['sub_choose']))
{
    $t=$_REQUEST['type'];
    if ($t==1)
    {
        $customer_id = $_REQUEST['sel_customer'];
        $sql="SELECT * FROM customer c WHERE c.id=$customer_id;";
            $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $surname=$r['surname'];
    $name=$r['name'];
    $patronymic=$r['patronymic'];
    $passport=$r['passport'];
    $birthday=$r['birthday'];
    $login=$r['login'];
    $email = $r['mail'];
    $pass=$r['pass'];
}
    }
    if ($t==2)
    {
    $id_staff = $_REQUEST['sel_staff'];
    $sql="SELECT  h.name AS 'hotel', s.surname, s.name, s.patronymic, s.phone, s.passport, s.salary FROM staff s JOIN hotel h ON s.hotel_id = h.id WHERE s.id = $id_staff;";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $hotel = $r['hotel'];
    $surname=$r['surname'];
    $name=$r['name'];
    $patronymic=$r['patronymic'];
    $passport=$r['passport'];
    $phone=$r['phone'];
    $salary=$r['salary'];
    }
}
}
if (isset($_REQUEST['sub_edit_1']))
{
    $surname=$_REQUEST['c_surname'];
    $name=$_REQUEST['c_name'];
    $patronymic=$_REQUEST['c_patronymic'];
    $passport=$_REQUEST['c_passport'];
    $birthday=$_REQUEST['c_birthday'];
    $login=$_REQUEST['c_login'];
    $pass=$_REQUEST['c_pass'];
    $email = $_REQUEST['c_email'];
    $customer_id = $_REQUEST['c_id'];
        $sql = "SELECT f_checkExist('$customer_id','$login','$passport') AS 'res'";
        $query=  mysqli_query($con, $sql);
        while ($r=  mysqli_fetch_assoc($query)) {
        $result_edit=$r['res'];
    }
    if ($result_edit==0 && is_numeric($passport) && !is_numeric($name) && !is_numeric($surname) && !is_numeric($patronymic))
    {
    $sql="SELECT update_user($customer_id,'$login','$email','$name','$surname','$patronymic','$passport','$birthday','$pass') AS 'res';";
    $query=  mysqli_query($con, $sql);
    $result_edit = 1;
    }
    else
    {
        $result_edit = 0;
    }
}
if (isset($_REQUEST['sub_edit_staff']))
{
    echo 'dfs';
    $surname=$_REQUEST['c_surname'];
    $name=$_REQUEST['c_name'];
    $patronymic=$_REQUEST['c_patronymic'];
    $phone=$_REQUEST['c_phone'];
    $passport=$_REQUEST['c_passport'];
    $salary=$_REQUEST['c_salary'];
    $staff_id = $_REQUEST['staff_id'];
    $hotel_id = $_REQUEST['mas'];
    $status_id = $_REQUEST['staff'];
        $sql = "SELECT f_checkExist_staff('$staff_id','$passport') AS 'res';";
        $query=  mysqli_query($con, $sql);
        while ($r=  mysqli_fetch_assoc($query)) {
        $result_edit=$r['res'];
    }
    if ($result_edit==0 && is_numeric($passport) && !is_numeric($name) && !is_numeric($surname) && !is_numeric($patronymic))
    {
    $sql="SELECT update_staff($staff_id,'$name','$surname','$patronymic','$status_id','$hotel_id', '$salary', '$phone');";
    echo $sql;
    $query=  mysqli_query($con, $sql);
    $result_edit = 1;
    }
    else
    {
        $result_edit = 0;
    }
}
if (isset($_REQUEST['sub_del_1']))
{
        $passport=$_REQUEST['c_passport'];
    $login=$_REQUEST['c_login'];
       $customer_id = $_REQUEST['c_id'];
       $sql = "DELETE FROM customer WHERE id=$customer_id;";
       $query=  mysqli_query($con, $sql);
       $sql = "SELECT COUNT(*) AS 'res'
     FROM customer c
     WHERE c.passport=$passport";
        $query=  mysqli_query($con, $sql);
        while ($r=  mysqli_fetch_assoc($query)) {
        $result_edit=$r['res'];
        }
        if ($result_edit==0)
        {
       $result='- Вы успешно удалили пользователя.';
        }
        else
        {
            $result='- Удаление пользователя не удалось. Возможно у него есть заказы.';
        }
       
}
if (isset($_REQUEST['sub_del_2']))
{
    
       $staff_id = $_REQUEST['staff_id'];
       $sql = "DELETE FROM staff WHERE id=$staff_id;";
       $query=  mysqli_query($con, $sql);
       $result='- Вы успешно удалили сотрудника.';
       
}
