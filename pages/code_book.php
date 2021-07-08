<?php
$order = [
    [
        ['Отель:',''],
        ['Тип номера:',''],
        ['Вместимость:',''],
        ['Номер:',''],
        ['Цена:',''],
        ['Дата заезда:',''],
        ['Дата выезда:',''],
        ['Количество дней','']
    ],
    [
        [
            ['Имя:',''],
            ['Фамилия:',''],
            ['Отчество:',''],
            ['Паспорт:',''],
            ['Дата рождения:','']
        ],
        [
            ['Имя:',''],
            ['Фамилия:',''],
            ['Отчество:',''],
            ['Паспорт:',''],
            ['Дата рождения:','']
        ],
        [
            ['Имя:',''],
            ['Фамилия:',''],
            ['Отчество:',''],
            ['Паспорт:',''],
            ['Дата рождения:','']
        ]
    ],
    ['Стоимость:','']
];
$id_hotel = null;
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
$error = '';
$days = 0;
$isOkay = 0;
$busy_date_in = '';
$busy_date_out = '';
$status = '';
if (isset($_REQUEST['sub_step2']))
{
    $bd_in = new DateTime($_REQUEST['bd_in']);
    $bd_out = new DateTime($_REQUEST['bd_out']);
    $right_now = new DateTime();
    if ($_REQUEST['hotel']==1)
    {
        $order[0][0][1]="Осипенко";
    }
    if ($_REQUEST['hotel']==2)
    {
        $order[0][0][1]='Химиков';
    }
    if ($_REQUEST['hotel']==3)
    {
        $order[0][0][1]='Счастливая';
    }
    $order[0][1][1] = $_REQUEST['type'];
    $order[0][2][1] = $_REQUEST['cap'];
    $order[0][3][1] = $_REQUEST['num'];
    $order[0][4][1] = $_REQUEST['price'];
    $order[0][5][1] = $_REQUEST['check_in'];
    $order[0][6][1] = $_REQUEST['check_out'];
    $order[1][0][0][1] = $_REQUEST['name'];
    $order[1][0][1][1] = $_REQUEST['surname'];
    $order[1][0][2][1] = $_REQUEST['patronymic'];
    $order[1][0][3][1] = $_REQUEST['passport'];
    $order[1][0][4][1] = $_REQUEST['birthday'];
    $first_date = new DateTime($order[0][5][1]);
$second_date = new DateTime($order[0][6][1]);
if ($order[0][5][1]=='' || $order[0][6][1]=='' || $order[1][0][0][1]=='' || $order[1][0][1][1]=='' || $order[1][0][2][1] == '' || $order[1][0][3][1] == '' || $order[1][0][4][1] == '' || $second_date<=$first_date)
{
    $error = 'Попробуйте снова.';
    $isOkay = 0;
}
else
{
    
    if ($right_now>$first_date)
    {
        $error = 'Вы не можете забронировать отель ранее чем завтра';
        $isOkay = 0;
    }
    else
    {
            if ($bd_in!='')
            {
                if ($first_date>=$bd_in && $first_date<=$bd_out || $second_date>=$bd_in && $first_date<=$bd_out)
                {
                    $isOkay = 0;
                    $error = 'В указанную дату этот номер занят.';
                }
                else
                {
                            $isOkay = 1;
$days = $first_date->diff($second_date);
    $sum = $order[0][4][1]*format_interval($days);
        $order[0][7][1] = format_interval($days);
    $order[2][1] = $sum;
    if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный')
    {
    $order[1][1][0][1] = $_REQUEST['name2'];
    $order[1][1][1][1] = $_REQUEST['surname2'];
    $order[1][1][2][1] = $_REQUEST['patronymic2'];
    $order[1][1][3][1] = $_REQUEST['passport2'];
    $order[1][1][4][1] = $_REQUEST['birthday2'];
    if ($order[0][2][1]=='Трехместный')
    {
    $order[1][2][0][1] = $_REQUEST['name3'];
    $order[1][2][1][1] = $_REQUEST['surname3'];
    $order[1][2][2][1] = $_REQUEST['patronymic3'];
    $order[1][2][3][1] = $_REQUEST['passport3'];
    $order[1][2][4][1] = $_REQUEST['birthday3'];
    }
    }
}
                    
                }
            }
}
}
function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d"); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}
if (isset($_REQUEST['sub_step1']))
{
    $mas = $_REQUEST['mas'];
    $surname = "";
    $name = "";
    $patronymic = "";
    $passport = "";
    $birthday = "";
    $hotel_id = $_REQUEST['num_hotel'];
    $room_id = $_REQUEST['num_room'];
        $busy_date_in=$_REQUEST['status_in'];
    $busy_date_out=$_REQUEST['status_out'];
    if ($mas == 1)
    {
        $text_book = "Введите данные гостя";
    }
    else
    {
        $text_book = "Проверьте свои данные";
        $user = $_COOKIE['user'];
    $sql= "SELECT c.surname, c.name, c.patronymic, c.passport, c.birthday FROM customer c WHERE c.login = '$user';";
    $query=  mysqli_query($con, $sql);
    while ($r=  mysqli_fetch_assoc($query)) {
    $surname = $r['surname'];
    $name = $r['name'];
    $patronymic = $r['patronymic'];
    $passport = $r['passport'];
    $birthday = $r['birthday'];
    }
    }
$sql = "CALL hotel_rooms($room_id,$hotel_id)";
$query=  mysqli_query($con, $sql);
while ($a=  mysqli_fetch_assoc($query)) {
    $hotel=$a['Отель'];
    $type=$a['Вид'];
    $cap=$a['Вместимость'];
    $num=$a['Номер комнаты'];
    $price=$a['Цена'];
}
}
if (isset($_REQUEST['sub_choose']))
{
    $sel = $_REQUEST['sel'];
    $id_hotel = $_REQUEST['hotel'];
    $sql="CALL hotel_roomsbyNum($sel,$id_hotel);";
    $query=  mysqli_query($con, $sql);
    while ($r=  mysqli_fetch_assoc($query)) {
    $hotel=$r['Отель'];
    $type=$r['Вид'];
    $capa=$r['Вместимость'];
    $num=$sel;
    $price=$r['Цена'];
    $status=str_replace(' ', '', $r['Статус']);
}
}
if (isset($_REQUEST['sub_show']))
{
    $id_hotel = $_REQUEST['hotel'];
    $id_capacity = $_REQUEST['capacity'];
    $id_type = $_REQUEST['type'];
    $sql="CALL hotel_roomsbyCap($id_hotel,$id_capacity,$id_type);";
    echo "<tr><td>    </td><td>Отель</td><td>Вид</td><td>Вместимость</td><td>Номер</td><td>Цена</td><td>Статус</td></tr>";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $hotel=$r['Отель'];
    $type=$r['Вид'];
    $capa=$r['Вместимость'];
    $num=$r['Номер'];
    $price=$r['Цена'];
    $status=$r['Статус'];
    echo "<tr><td><input name='sel' type='radio' value='$num' checked/></td><td>$hotel</td><td>$type</td><td>$capa</td><td>$num</td><td>$price</td><td>$status</td></tr>";
}
$photo = $hotel.$type.$capa;
    
}
if (isset($_REQUEST['sub_step3']))
{
    $num = rand(0, 1000000);
    $passport = $_REQUEST['passport1'];
    $sql="SELECT c.id FROM customer c WHERE c.passport LIKE '$passport';";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $customer_id = $r['id'];
}
    $hotel = $_REQUEST['hotel'];
    $sql="SELECT h.id FROM hotel h WHERE h.name LIKE '%$hotel';";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $hotel_id = $r['id'];
}
$num_room = $_REQUEST['num'];
    $sql="SELECT hr.id FROM hotel_room hr WHERE hr.numRoom = '$num_room' AND hr.hotel_id LIKE '$hotel_id';";
    $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $hr_id = $r['id'];
}
$check_in = $_REQUEST['check-in'];
$check_out = $_REQUEST['check-out'];
$cost = $_REQUEST['cost'];
$sql = "INSERT IGNORE INTO order_info(num,customer_id,hotel_room_id,`check-in`,`check-out`,cost) VALUES ('$num', '$customer_id', '$hr_id', '$check_in', '$check_out', '$cost');";
echo $sql;
$query = mysqli_query($con, $sql);
$sql = "SELECT oi.id FROM order_info oi WHERE oi.num = '$num';";
$query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $order_info_id = $r['id'];
}
$sql = "INSERT IGNORE INTO `order`(customer_id,order_info_id) VALUES ('$customer_id','$order_info_id');";
$query=  mysqli_query($con, $sql);
$sql = "UPDATE hotel_room hr SET hr.status = 'Занятно с $check_in до $check_out' WHERE hr.id = '$hr_id';";
$query=  mysqli_query($con, $sql);
if ($_REQUEST['capacity']=='Двухместный' || $_REQUEST['capacity']=='Трехместный')
    {
        $name2=$_REQUEST['name2'];
        $surname2=$_REQUEST['surname2'];
        $patronymic2=$_REQUEST['patronymic2'];
        $passport2 = $_REQUEST['passport2'];
        $birthday2 = $_REQUEST['birthday2'];
        $login2 = "user".rand(0,10000);
        $pass2 = $num;
        $sql = "INSERT IGNORE INTO customer(surname, name, patronymic, passport, birthday, login, pass, mail) VALUES ('$surname2', '$name2', '$patronymic2', '$passport2', '$birthday2', '$login2', '$pass2', '$email') ";
        $query=  mysqli_query($con, $sql);
        $sql = "SELECT c.id FROM customer c WHERE c.passport = $passport2;";
        $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $customer2_id = $r['id'];
}
        $sql = "INSERT IGNORE INTO `order`(customer_id,order_info_id) VALUES ('$customer2_id','$order_info_id');";
        $query=  mysqli_query($con, $sql);
        if ($_REQUEST['capacity']=='Трехместный')
        {
            $name3=$_REQUEST['name3'];
        $surname3=$_REQUEST['surname3'];
        $patronymic3=$_REQUEST['patronymic3'];
        $passport3 = $_REQUEST['passport3'];
        $birthday3 = $_REQUEST['birthday3'];
        $login3 = "user".rand(0,10000);
        $pass3 = $num;
        $sql = "INSERT IGNORE INTO customer(surname, name, patronymic, passport, birthday, login, pass, mail) VALUES ('$surname3', '$name3', '$patronymic3', '$passport3', '$birthday3', '$login3', '$pass3', '$email') ";
        $query=  mysqli_query($con, $sql);
        $sql = "SELECT c.id FROM customer c WHERE c.passport = $passport3;";
        $query=  mysqli_query($con, $sql);
while ($r=  mysqli_fetch_assoc($query)) {
    $customer3_id = $r['id'];
}
        $sql = "INSERT IGNORE INTO `order`(customer_id,order_info_id) VALUES ('$customer3_id','$order_info_id');";
        $query=  mysqli_query($con, $sql);
        }
    }
}