<?php include '../config.php';
include './myFunction.php';
include '../pages/code_profile.php';
include './code_exit.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Аксиденталь - Отель в Санкт-Петербурге</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block"> <a class="nav_button" href="../index.php"> Главная</a>
	  <?php if (isset($_COOKIE['user'])) { ?>  
            <a class="nav_button" href="pages/book.php">Забронировать</a>
            <?php if ($count !=0) { ?>
            <a class="nav_button" href="orders.php">Мои заказы (<?=$count?>)</a>
            <?php } ?>
            <a class="nav_button"> <form name="f2" action="login.php" method="get">
                <input name="sub_exit" type="submit" value="Выход"/>
            </form> </a>
            <?php } else{?>
            <a class="nav_button" href="register.php">Регистрация</a>
            <?php } ?>
		
	  </div>
</div> </div>
            <?php if (!isset($_COOKIE['user'])) { ?> 
            Вы не авторизованы
            <?php } else{?>
            <a class="cool_text">Личный кабинет </a>
            <?php if(!isset($_REQUEST['sub_data'])&&!isset($_REQUEST['sub_data_edit'])){ ?>
           <form name="f5" action="profile.php" method="get">
               <table align="center">
                   <tr>
                       <?php if ($result_edit==1) { ?>
                           Данные успешно обновлены 
                       <?php } else { ?>
                           Данные не обновлены, попробуйте снова.
                          <?php } ?>
                       <td><input name="sub_data" type="submit" value="Нажмите, чтобы посмотреть данные"></td>
                   </tr>
               </table>
           </form>
           <?php } ?>
           <?php if(isset($_REQUEST['sub_data'])){ ?>
           <form name="f7" action="profile.php" method="get">
           <table align="center">
               <tr>
                   <td>Логин:</td><td><input name="login" type="text" readonly value=<?= $login ?> ><input name="user_id" type="hidden" value=<?=$user_id?>></td>
               </tr>
               <tr>
                   <td>Почта:</td><td><input name="email" type="text" readonly value=<?= $email ?> ></td>
               </tr>
               <tr>
                   <td>Имя:</td><td><input name="name" type="text" readonly value=<?= $name ?>></td>
               </tr>
               <tr>
                   <td>Фамилия:</td><td><input name="surname" type="text" readonly value=<?= $surname ?>></td>
               </tr>
               <tr>
                   <td>Отчество:</td><td><input name="patronymic" type="text" readonly value=<?= $patronymic ?>></td>
               </tr>
               <tr>
                   <td>Паспорт:</td><td><input name="passport" type="text" readonly value=<?= $passport ?>></td>
               </tr>
               <tr>
                   <td>Дата рождения:</td><td><input name="birthday" type="text" readonly value=<?= $birthday ?>></td>
               </tr>
               <tr>
                   <td>Пароль:</td><td><input name="pass" type="password" readonly value=<?= $pass ?>></td>
               </tr>
               <tr>
                   <td><input name="sub_data_edit" type="submit" value="Изменить"></td>
               </tr>
           </table>
           </form>
            <?php } ?>
           <?php if(isset($_REQUEST['sub_data_edit'])){ ?>
           <form name="f7" action="profile.php" method="get">
           <table align="center">
               <tr>
                   <td>Логин:</td><td><input name="login_edit" type="text" value=<?= $login ?> > <input name="user_id_edit" type="hidden" value=<?=$user_id?>></td>
               </tr>
               <tr>
                   <td>Почта:</td><td><input name="email_edit" type="text" value=<?= $email ?> ></td>
               </tr>
               <tr>
                   <td>Имя:</td><td><input name="name_edit" type="text" value=<?= $name ?>></td>
               </tr>
               <tr>
                   <td>Фамилия:</td><td><input name="surname_edit" type="text" value=<?= $surname ?>></td>
               </tr>
               <tr>
                   <td>Отчество:</td><td><input name="patronymic_edit" type="text" value=<?= $patronymic ?>></td>
               </tr>
               <tr>
                   <td>Паспорт:</td><td><input name="passport_edit" type="text" value=<?= $passport ?>></td>
               </tr>
               <tr>
                   <td>Дата рождения:</td><td><input name="birthday_edit" type="text" value=<?= $birthday ?>></td>
               </tr>
               <tr>
                   <td>Пароль:</td><td><input name="pass_edit" type="password" value=<?= $pass ?>></td>
               </tr>
               <tr>
                   <td><input name="sub_data_save" type="submit" value="Сохранить изменения"></td>
               </tr>
           </table>
           </form>
            <?php } ?>
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


