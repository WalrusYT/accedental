<?php
if (isset($_REQUEST['sub_orders']))
{
    $login_customer = $_COOKIE['user'];
    $sql="CALL hotel_showOrdersProfile('$login_customer');";
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

