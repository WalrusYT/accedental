<?php
//$error = '';
$text_book = '';
$hotel = 'Не выбран.';
$type = 'Не выбран.';
$num = 'не выбран';
$price = 'неизвестное кол-во ';
$name = '';
$capa = '';
$sel = '';
$cap = '';
$sum = '';
$email = '';
$days = 0;
$result_edit = '';
$id_hotel = null;
//$order = [
//    [
//        ['Отель:',''],
//        ['Тип номера:',''],
//        ['Вместимость:',''],
//        ['Номер:',''],
//        ['Цена:',''],
//        ['Дата заезда:',''],
//        ['Дата выезда:',''],
//        ['Количество дней','']
//    ],
//    [
//        [
//            ['Имя:',''],
//            ['Фамилия:',''],
//            ['Отчество:',''],
//            ['Паспорт:',''],
//            ['Дата рождения:','']
//        ],
//        [
//            ['Имя:',''],
//            ['Фамилия:',''],
//            ['Отчество:',''],
//            ['Паспорт:',''],
//            ['Дата рождения:','']
//        ],
//        [
//            ['Имя:',''],
//            ['Фамилия:',''],
//            ['Отчество:',''],
//            ['Паспорт:',''],
//            ['Дата рождения:','']
//        ]
//    ],
//    ['Стоимость:','']
//];
//if(isset($_REQUEST['sub_data']))
//{
//    $login_customer = $_COOKIE['user'];
//    $sql="SELECT * FROM customer c WHERE c.login = '$login_customer';";
//    echo $sql;
//    $query=  mysqli_query($con, $sql);
//while ($r=  mysqli_fetch_assoc($query)) {
//    $surname=$r['surname'];
//    $name=$r['name'];
//    $patronymic=$r['patronymic'];
//    $passport=$r['passport'];
//    $birthday=$r['birthday'];
//    $login=$r['login'];
//    $pass=$r['pass'];
//    $email = $r['mail'];
//    $user_id = $r['id'];
//}
//}
//if(isset($_REQUEST['sub_data_edit']))
//{
//    $surname=$_REQUEST['surname'];
//    $name=$_REQUEST['name'];
//    $patronymic=$_REQUEST['patronymic'];
//    $passport=$_REQUEST['passport'];
//    $birthday=$_REQUEST['birthday'];
//    $login=$_REQUEST['login'];
//    $pass=$_REQUEST['pass'];
//    $user_id = $_REQUEST['user_id'];
//    $email = $_REQUEST['email'];
//}
//if (isset($_REQUEST['sub_data_save']))
//{
//    $surname=$_REQUEST['surname_edit'];
//    $name=$_REQUEST['name_edit'];
//    $patronymic=$_REQUEST['patronymic_edit'];
//    $passport=$_REQUEST['passport_edit'];
//    $birthday=$_REQUEST['birthday_edit'];
//    $login=$_REQUEST['login_edit'];
//    $pass=$_REQUEST['pass_edit'];
//    $email = $_REQUEST['email_edit'];
//    $user_id = $_REQUEST['user_id_edit'];
//    $sql = "SELECT f_checkExist('$login','$pass') AS 'res'";
//    $query=  mysqli_query($con, $sql);
//    while ($r=  mysqli_fetch_assoc($query)) {
//    $result_edit=$r['res'];
//    if ($result_edit==0 && is_numeric($passport) && !is_numeric($name) && !is_numeric($surname) && !is_numeric($patronymic))
//    {
//    $sql="SELECT update_user($user_id,'$login','$email','$name','$surname','$patronymic','$passport','$birthday','$pass') AS 'res';";
//    $query=  mysqli_query($con, $sql);
//    $result_edit = 1;
//    setcookie('user', '', time()-3600, '/accedental');
//    setcookie('user', $login, time()+10000, '/accedental');
//    }
//    else
//    {
//        $result_edit = 0;
//    }
//}
//}
    
//if (isset($_REQUEST['sub_step2']))
//{
//    if ($_REQUEST['hotel']==1)
//    {
//        $hotel='Аксиденталь на Осипенко';
//    }
//    if ($_REQUEST['hotel']==2)
//    {
//        $hotel='Аксиденталь на Химиков';
//    }
//    if ($_REQUEST['hotel']==3)
//    {
//        $hotel='Аксиденталь на Счастливой';
//    }
//    $order[0][0][1] = $hotel;
//    $order[0][1][1] = $_REQUEST['type'];
//    $order[0][2][1] = $_REQUEST['cap'];
//    $order[0][3][1] = $_REQUEST['num'];
//    $order[0][4][1] = $_REQUEST['price'];
//    $order[0][5][1] = $_REQUEST['check_in'];
//    $order[0][6][1] = $_REQUEST['check_out'];
//    $order[1][0][0][1] = $_REQUEST['name'];
//    $order[1][0][1][1] = $_REQUEST['surname'];
//    $order[1][0][2][1] = $_REQUEST['patronymic'];
//    $order[1][0][3][1] = $_REQUEST['passport'];
//    $order[1][0][4][1] = $_REQUEST['birthday'];
//    $first_date = new DateTime($order[0][5][1]);
//$second_date = new DateTime($order[0][6][1]);
//$days = $first_date->diff($second_date);
//    $sum = $order[0][4][1]*format_interval($days);
//        $order[0][7][1] = format_interval($days);
//    $order[2][1] = $sum;
//    if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный')
//    {
//    $order[1][1][0][1] = $_REQUEST['name2'];
//    $order[1][1][1][1] = $_REQUEST['surname2'];
//    $order[1][1][2][1] = $_REQUEST['patronymic2'];
//    $order[1][1][3][1] = $_REQUEST['passport2'];
//    $order[1][1][4][1] = $_REQUEST['birthday2'];
//    if ($order[0][2][1]=='Трехместный')
//    {
//    $order[1][2][0][1] = $_REQUEST['name3'];
//    $order[1][2][1][1] = $_REQUEST['surname3'];
//    $order[1][2][2][1] = $_REQUEST['patronymic3'];
//    $order[1][2][3][1] = $_REQUEST['passport3'];
//    $order[1][2][4][1] = $_REQUEST['birthday3'];
//    }
//    }
//    }
//function format_interval(DateInterval $interval) {
//    $result = "";
//    if ($interval->y) { $result .= $interval->format("%y years "); }
//    if ($interval->m) { $result .= $interval->format("%m months "); }
//    if ($interval->d) { $result .= $interval->format("%d"); }
//    if ($interval->h) { $result .= $interval->format("%h hours "); }
//    if ($interval->i) { $result .= $interval->format("%i minutes "); }
//    if ($interval->s) { $result .= $interval->format("%s seconds "); }
//
//    return $result;
//}
//if (isset($_REQUEST['sub_reg'])) {
//    $surname = $_REQUEST['surname'];
//    $name = $_REQUEST['name'];
//    $patronymic = $_REQUEST['patronymic'];
//    $passport = $_REQUEST['passport'];
//    $birthday = $_REQUEST['birth'];
//    $login = $_REQUEST['login'];
//    $pass = $_REQUEST['pass'];
//    $email = $_REQUEST['mail'];
//    $sql = "SELECT f_login('$login','$passport') AS 'login';";
//    $query = mysqli_query($con, $sql);
//    $result = mysqli_fetch_assoc($query);
//    $isExist = $result['login'];
//    if ($isExist == 0) {
//            $sql = "INSERT IGNORE INTO customer(surname, name, patronymic, passport, birthday, login, pass, mail) VALUES ('$surname', '$name', '$patronymic', '$passport', '$birthday', '$login', '$pass', '$email') ";
//    $query = mysqli_query($con, $sql);
//        header('Location: ./login.php');
//        exit();
//    } else {
//        $error = 'Такой пользователь уже существует.';
//    }
//
//}
//if (isset($_REQUEST['sub_login'])) {
//    $login = $_REQUEST['login'];
//    $pass = $_REQUEST['pass'];
//    $sql = "SELECT f_account('$login','$pass') AS 'account';";
//    $query = mysqli_query($con, $sql);
//    $result = mysqli_fetch_assoc($query);
//    $isExist = $result['account'];
//    if ($isExist == 0) {
//        echo 'Аккаунта нет.';
//        $error = 'Неверные данные.';
//    } else {
//        setcookie('user', $login, time()+10000, '/accedental');
//        header('Location: ../index.php');
//        exit();
//    }
//}
if (isset($_REQUEST['sub_exit'])) {
    setcookie('user', '', time()-3600, '/accedental');
    header('Location: /accedental/index.php');
        exit();
}
//if (isset($_REQUEST['sub_show']))
//{
//    $id_hotel = $_REQUEST['hotel'];
//    $id_capacity = $_REQUEST['capacity'];
//    $id_type = $_REQUEST['type'];
//    $sql="SELECT h.name AS 'Отель', t.name AS 'Вид', c.name AS 'Вместимость', hr.numRoom AS 'Номер', hr.price AS 'Цена'
//  FROM hotel_room hr JOIN hotel h ON hr.hotel_id = h.id JOIN room r ON hr.room_id = r.id JOIN capacity c ON r.capacity_id = c.id JOIN type t ON r.type_id = t.id
//  WHERE h.id=$id_hotel AND c.id=$id_capacity AND t.id=$id_type;";
//    echo "<tr><td>    </td><td>Отель</td><td>Вид</td><td>Вместимость</td><td>Номер</td><td>Цена</td></tr>";
//    $query=  mysqli_query($con, $sql);
//while ($r=  mysqli_fetch_assoc($query)) {
//    $hotel=$r['Отель'];
//    $type=$r['Вид'];
//    $capa=$r['Вместимость'];
//    $num=$r['Номер'];
//    $price=$r['Цена'];
//    echo "<tr><td><input name='sel' type='radio' value='$num' checked/></td><td>$hotel</td><td>$type</td><td>$name</td><td>$num</td><td>$price</td></tr>";
//}
//$photo = $hotel.$type.$capa;
//    
//}
//if (isset($_REQUEST['sub_step1']))
//{
//    $mas = $_REQUEST['mas'];
//    $surname = "";
//    $name = "";
//    $patronymic = "";
//    $passport = "";
//    $birthday = "";
//    $hotel_id = $_REQUEST['num_hotel'];
//    $room_id = $_REQUEST['num_room'];
//    if ($mas == 1)
//    {
//        $text_book = "Введите данные гостя";
//    }
//    else
//    {
//        $text_book = "Проверьте свои данные";
//        $user = $_COOKIE['user'];
//    $sql= "SELECT c.surname, c.name, c.patronymic, c.passport, c.birthday FROM customer c WHERE c.login = '$user';";
//    $query=  mysqli_query($con, $sql);
//    while ($r=  mysqli_fetch_assoc($query)) {
//    $surname = $r['surname'];
//    $name = $r['name'];
//    $patronymic = $r['patronymic'];
//    $passport = $r['passport'];
//    $birthday = $r['birthday'];
//    }
//    
//}
//$sql = "SELECT h.name AS 'Отель', t.name AS 'Вид', c.name AS 'Вместимость', hr.numRoom AS 'Номер комнаты', hr.price AS 'Цена'
//  FROM hotel_room hr JOIN hotel h ON hr.hotel_id = h.id JOIN room r ON hr.room_id = r.id JOIN capacity c ON r.capacity_id = c.id JOIN type t ON r.type_id = t.id
//  WHERE hr.numRoom=$room_id AND h.id=$hotel_id;";
//$query=  mysqli_query($con, $sql);
//while ($a=  mysqli_fetch_assoc($query)) {
//    $hotel=$a['Отель'];
//    $type=$a['Вид'];
//    $cap=$a['Вместимость'];
//    $num=$a['Номер комнаты'];
//    $price=$a['Цена'];
//}
//}
//if (isset($_REQUEST['sub_choose']))
//{
//    $sel = $_REQUEST['sel'];
//    $id_hotel = $_REQUEST['hotel'];
//    $sql="SELECT h.name AS 'Отель', t.name AS 'Вид', c.name AS 'Вместимость', hr.numRoom AS 'Номер комнаты', hr.price AS 'Цена'
//  FROM hotel_room hr JOIN hotel h ON hr.hotel_id = h.id JOIN room r ON hr.room_id = r.id JOIN capacity c ON r.capacity_id = c.id JOIN type t ON r.type_id = t.id
//  WHERE hr.numRoom=$sel AND h.id=$id_hotel;";
//    $query=  mysqli_query($con, $sql);
//    while ($r=  mysqli_fetch_assoc($query)) {
//    $hotel=$r['Отель'];
//    $type=$r['Вид'];
//    $capa=$r['Вместимость'];
//    $num=$sel;
//    $price=$r['Цена'];
//}
//}
//if (isset($_REQUEST['sub_edit']))
//{
//    $id_customer = $_REQUEST['customer'];
//    $sql="SELECT * FROM customer c WHERE c.id = $id_customer;";
//    echo "<tr><td></td><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Паспорт</td><td>Дата рождения</td><td>Логин</td><td>Пароль</td></tr>";
//    $query=  mysqli_query($con, $sql);
//while ($r=  mysqli_fetch_assoc($query)) {
//    $surname=$r['surname'];
//    $name=$r['name'];
//    $patronymic=$r['patronymic'];
//    $passport=$r['passport'];
//    $birthday=$r['birthday'];
//    $login=$r['login'];
//    $pass=$r['pass'];
//    echo "<tr><td><input name='sel' type='radio' value='' checked/></td><td>$surname</td><td>$name</td><td>$patronymic</td><td>$passport</td><td>$birthday</td><td>$login</td><td>$pass</td></tr>";
//}
//}


?>

