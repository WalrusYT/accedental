<?php
$count = 0;
if (isset($_REQUEST['sub_exit'])) {
    setcookie('user', '', time()-3600, '/accedental');
    header('Location: /accedental/index.php');
        exit();
}
if (isset($_COOKIE['user']))
{
    $login = $_COOKIE['user'];
    $sql = "SELECT COUNT(c.id) AS 'count' FROM `order` o JOIN customer c ON o.customer_id = c.id WHERE c.login LIKE '$login';";
    $query=  mysqli_query($con, $sql);
    while ($r=  mysqli_fetch_assoc($query)) {
    $count = $r['count'];
    }
}