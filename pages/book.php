<?php
include '../config.php';
include './myFunction.php';
include '../pages/code_exit.php'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Аксиденталь - Отель в Санкт-Петербурге</title>
        <link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block"> <a class="nav_button" href="../index.php">Главная</a>
 <?php if (isset($_COOKIE['user'])) { ?>  
                        <?php if ($count !=0) { ?>
            <a class="nav_button" href="orders.php">Мои заказы (<?=$count?>)</a>
            <?php } ?>
                        <a class="nav_button" href="profile.php">Профиль</a>
                        <a class="nav_button"> <form name="f2" action="book.php" method="get">
                                <input name="sub_exit" type="submit" value="Выход"/>
                            </form> </a>
                    <?php } else { ?>
                        <a class="nav_button" href="login.php">Вход</a>
                        <a class="nav_button" href="register.php">Регистрация</a>
                    <?php } ?>

                </div>
            </div> </div>
<?php if (isset($_COOKIE['user'])) { ?>
<?php if (!isset($_REQUEST['sub_step2'])) { ?>
        <?php if (!isset($_REQUEST['sub_step1'])) { ?>
            <form name="f3" action="book.php" method="get">
                <table align="center">
                    <tr><td><?php combo('hotel', $con, 'hotel', 'name'); ?> </td>
                        <td><?php combo('type', $con, 'type', 'name'); ?></td>
                        <td><?php combo('capacity', $con, 'capacity', 'name'); ?></td>
                        <td><input name="sub_show" type="submit" value="Показать"/></td></tr>
                </table>

                <table align="center" width="800" cellpadding="0" cellspacing="0" style="border: #2f3a5f solid medium"><?php include './code_book.php'; ?> <tr><td></td><td></td><td align="center">
                    <?php if (isset($_REQUEST['sub_show'])) { ?>
                                <input name="sub_choose" type="submit" value="Выбрать"/> 
                            <?php } ?></td><td></td><td></td></tr></table>

            <?php } else { ?>
                <form name="f6" action="book.php" method="get">
                    <input name="sub_b" type="submit" value="Хочу вернутся назад"/> 
                </form>
            <?php } ?>
            <?php if (isset($_REQUEST['sub_show'])) { ?>
                <p class="fig"><img src="../images/<?= $photo ?>.jpg"
                                    width="1280" height="200" alt=""></p>
                <?php } ?>
        </form>
        <?php if (!isset($_REQUEST['sub_step1'])) { ?>
            <a class="cool_text">Выберите номер и укажите на кого бронируете отель.</a> </br>
            Выбранный отель: <strong><?= $hotel ?></strong></br>
            Выбранный номер: <strong><?= $type ?> <?= $capa ?></strong> (<strong><?= $num ?></strong> номер) Цена: <strong><?= $price ?></strong> рублей</br> 
            <form name="f4" action="book.php" method="get">
                <input name="mas" type="radio" value="0" checked/> Бронирую на себя </br>
                <input name="mas" type="radio" value="1"/> Бронирую на другого человека </br>
                <input name="num_hotel" type="hidden" size="1" value=<?= $id_hotel ?>> 
                    <input name="num_room" type="hidden" size="1" readonly value=<?= $num ?>></br>
                    <input name="status_in" type="hidden" size="100" readonly value=<?= substr($status,16,10) ?>></br>
                    <input name="status_out" type="hidden" size="100" readonly value=<?= substr($status,30,10) ?>></br>
                        <?php if (isset($_REQUEST['sub_choose'])) { ?>
                            <input name="sub_step1" type="submit" value="Продолжить"/>
                        <?php } ?>
                        </form>
                    <?php } else { ?>
                        <?php include './code_book.php'; ?>
                        <?= $text_book ?>

                        <form name="f5" action="book.php" method="get">
                            <table align="center">
                                Отель: <strong><?= $hotel ?></strong></br>
                                Номер: <strong><?= $type ?> <?= $cap ?></strong> (<?= $num ?> номер) Цена: <strong><?= $price ?></strong> рублей</br>
                            <?php if ($busy_date_in!='')
                            {?>
                            <strong> Внимание! </strong> Ваш номер занят с <?=$busy_date_in?> до <?=$busy_date_out?> 
                            <?php } ?>
                                <input name="hotel" type="hidden" size="1" value=<?= $hotel_id ?>> 
                                <input name="type" type="hidden" size="1" readonly value=<?= $type ?>>
                                <input name="cap" type="hidden" size="1" readonly value=<?= $cap ?>>
                                <input name="num" type="hidden" size="1" readonly value=<?= $num ?>>
                                <input name="price" type="hidden" size="1" readonly value=<?= $price ?>>
                                <input name="bd_in" type="hidden" readonly value=<?= $busy_date_in ?>>
                                <input name="bd_out" type="hidden" readonly value=<?= $busy_date_out ?>>
                                <tr><td>Даннные гостя:</td><td></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?><td>Даннные второго гостя:</td><?php } ?>
                                    <td></td>
                                    <?php if ($cap == "Трехместный") { ?><td>Даннные третьего гостя:</td><?php } ?></tr>
                                <tr><td>Фамилия:</td><td> <input name="surname" type="text" readonly value=<?= $surname ?>></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?> <td>Фамилия:</td><td> <input name="surname2" type="text" value=""></td><?php } ?>
                                    <?php if ($cap == "Трехместный") { ?> <td>Фамилия:</td><td> <input name="surname3" type="text" value=""></td><?php } ?>
                                </tr>
                                <tr><td>Имя:</td><td>  <input name="name" type="text" readonly value=<?= $name ?>></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?> <td>Имя: </td><td><input name="name2" type="text" value=""></td><?php } ?>
                                    <?php if ($cap == "Трехместный") { ?> <td>Имя:</td><td> <input name="name3" type="text" value=""></td><?php } ?>
                                </tr>
                                <tr><td>Отчество:</td><td> <input name="patronymic" type="text" readonly value=<?= $patronymic ?>></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?> <td>Отчество:</td><td> <input name="patronymic2" type="text" value=""></td><?php } ?>
                                    <?php if ($cap == "Трехместный") { ?> <td>Отчество:</td><td> <input name="patronymic3" type="text" value=""></td><?php } ?>
                                </tr>
                                <tr><td>Паспорт:</td><td> <input name="passport" type="text" readonly value=<?= $passport ?>></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?> <td>Паспорт:</td><td> <input name="passport2" type="text" value=""></td><?php } ?>
                                    <?php if ($cap == "Трехместный") { ?> <td>Паспорт:</td><td> <input name="passport3" type="text" value=""></td><?php } ?>
                                </tr>
                                <tr><td>Дата рождения:</td><td> <input name="birthday" readonly type="date" value=<?= $birthday ?>></td>
                                    <?php if ($cap == "Двухместный" || $cap == "Трехместный") { ?> <td>Дата рождения:</td><td> <input name="birthday2" type="date" value=""></td><?php } ?>
                                    <?php if ($cap == "Трехместный") { ?> <td>Дата рождения:</td><td> <input name="birthday3" type="date" value=""></td><?php } ?>
                                </tr>
                                <tr><td>Дата заезда:</td><td> <input name="check_in" type="date" value=></td></tr>
                                <tr><td>Дата выезда:</td><td> <input name="check_out" type="date" value=></td></tr>
                                <tr><td><input name="sub_step2" type="submit" value="Продолжить"/></td></tr>
                                        </table>
                                        </form>
                                    <?php } ?>
                                        <?php } else { ?>
    <?php include './code_book.php'; ?>
    <?php if ($isOkay==1) { ?>
                                    <a class="cool_text">Проверьте данные</a> </br>
    <form name="f7" action="success.php" method="get">
    <table border="1px" width="400px" align="center">
        <tr>
            
            <td align="center"> <?=$order[0][0][0]?></td >
            <td align="center"> <input name="hotel" type="text" readonly value=<?=$order[0][0][1]?>></td >
            
        </tr>
        <tr>
            <td align="center"> <?=$order[0][1][0]?></td >
            <td align="center"> <input name="type" type="text" readonly value=<?=$order[0][1][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][2][0]?></td >
            <td align="center"> <input name="capacity" type="text" readonly value=<?=$order[0][2][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][3][0]?></td >
            <td align="center"> <input name="num" type="text" readonly value=<?=$order[0][3][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][4][0]?></td >
            <td align="center"> <input name="price" type="text" readonly value=<?=$order[0][4][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][5][0]?></td >
            <td align="center"> <input name="check-in" type="text" readonly value=<?=$order[0][5][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][6][0]?></td >
            <td align="center"> <input name="check-out" type="text" readonly value=<?=$order[0][6][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[0][7][0]?></td >
            <td align="center"> <input name="days" type="text" readonly value=<?=$order[0][7][1]?>></td >
        </tr>
        <tr>
            <td align="center"> <?=$order[1][0][0][0]?></td >
            <td align="center"> <input name="name1" type="text" readonly value=<?=$order[1][0][0][1]?>> </td >
            <?php if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="name2" type="text" readonly value=<?=$order[1][1][0][1]?>></td >
            <?php if ($order[0][2][1]=='Трехместный') { ?>
            <td align="center"><input name="name3" type="text" readonly value=<?=$order[1][2][0][1]?>></td >
            <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <td align="center"> <?=$order[1][0][1][0]?></td >
            <td align="center"> <input name="surname1" type="text" readonly value=<?=$order[1][0][1][1]?>></td >
            <?php if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="surname2" type="text" readonly value=<?=$order[1][1][1][1]?>></td >
            <?php if ($order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="surname3" type="text" readonly value=<?=$order[1][2][1][1]?>></td >
            <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <td align="center"> <?=$order[1][0][2][0]?></td >
            <td align="center"> <input name="patronymic1" type="text" readonly value=<?=$order[1][0][2][1]?>></td >
            <?php if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="patronymic2" type="text" readonly value=<?=$order[1][1][2][1]?>></td >
            <?php if ($order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="patronymic3" type="text" readonly value=<?=$order[1][2][2][1]?>></td >
            <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <td align="center"> <?=$order[1][0][3][0]?></td >
            <td align="center"> <input name="passport1" type="text" readonly value=<?=$order[1][0][3][1]?>></td >
            <?php if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="passport2" type="text" readonly value=<?=$order[1][1][3][1]?>></td >
            <?php if ($order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="passport3" type="text" readonly value=<?=$order[1][2][3][1]?>></td >
            <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <td align="center"> <?=$order[1][0][4][0]?></td >
            <td align="center"> <input name="birthday1" type="text" readonly value=<?=$order[1][0][4][1]?>></td >
            <?php if ($order[0][2][1]=='Двухместный'||$order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="birthday2" type="text" readonly value=<?=$order[1][1][4][1]?>></td >
            <?php if ($order[0][2][1]=='Трехместный') { ?>
            <td align="center"> <input name="birthday3" type="text" readonly value=<?=$order[1][2][4][1]?>></td >
            <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <td align="center"> <?=$order[2][0]?></td >
            <td align="center"> <input name="cost" type="text" readonly value=<?=$order[2][1]?>> рублей.</td >
        </tr>
        <tr>
            <td align="center"><input name="sub_step3" type="submit" value="Забронировать"/></td>
        </tr>
    </table>
        </form>
    <?php } else { ?>
    <a class="cool_text">Вы ввели некорректные данные: <?=$error?></a> </br>
    <form name="f7" action="book.php" method="get">
        <input name="btn_back" type="submit" value="Попробовать снова"/>
    </form>
     <?php } ?>
                                    <?php } ?>
    <?php } else { ?>
    Вы не авторизованы. 
    <?php } ?>



                                    <div id="bottom_bar_black"> <div id="main_container">
                                            <div id="header_lower">  <div id="header_content_lowerline">Контакты
                                                    <div id="header_content_lowerboxcontent">Улица Осипенко, 5<br />
                                                        Россия<br />
                                                        Санкт-Петербург<br />
                                                        Улица Осипенко, 5 (тел.  +79887654343, osipenko@accidental.com)<BR />
                                                        Улица Химиков, 20 (тел. +79995556677, khimikov@accidental.com)<br />
                                                        Улица Счастливая, 3 (тел. +78909904567, schastlivaya@accidental.com)<br />
                                                        Гостиница работает круглосуточно<BR /> 
                                                    </div>
                                                </div> 
                                            </div>

                                            <div id="header_lower">  <div id="header_content_lowerline">Помощь
                                                    <div id="header_content_lowerboxcontent">тут будет текст </div>
                                                </div> 
                                            </div>


                                        </div> 
                                    </div>
                                    <div id="copywriteblock"> Designed by <a href="http://www.pixelateddesign.co.uk/">www.pixelateddesign.co.uk </a></div>

                                    </body>
                                    </html>