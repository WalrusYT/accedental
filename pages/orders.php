<?php include '../config.php';
include './myFunction.php';
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
            <a class="nav_button" href="book.php">Забронировать</a>
            <a class="nav_button" href="profile.php">Профиль</a>
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
            <a class="cool_text">Мои заказы </a>
            <form name="f8" action="orders.php" method="get">
               <table align="center">
                   <tr>
                       <td><input name="sub_orders" type="submit" value="Нажмите, чтобы просмотреть Ваши заказы"></td>
                   </tr>
                   <tr>
                   <td><table align="center" width="1200" cellpadding="0" cellspacing="0" style="border: #2f3a5f solid medium"><?php include './code_orders.php'; ?> <tr><td></td><td></td><td align="center"></td>
               
                       </table>
                       </tr>
                       </table>
           </form>
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


