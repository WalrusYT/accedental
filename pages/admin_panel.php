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
	  <?php if (!isset($_COOKIE['user'])) { ?>  
            <a class="nav_button" href="pages/book.php">Забронировать</a>
            <a class="nav_button"> <form name="f2" action="login.php" method="get">
                <input name="sub_exit" type="submit" value="Выход"/>
            </form> </a>
            <?php } else{?>
            <a class="nav_button" href="register.php">Регистрация</a>
            <?php } ?>
		
	  </div>
</div> </div>
            <?php if (isset($_COOKIE['user']) && $_COOKIE['user'] != 'admin') { ?> 
            Нет доступа! 
            <?php } else{?>
       	   <a class="cool_text">Панель администрирования</a>
          
          
           
                
                             <form name="f3" action="admin_panel.php" method="get">
                                 Редактирование пользователей <input name="sub_edit" type="submit" value="Показать"/></br>
                                 Редактирование персонала  <?php combo('staff', $con, 'status', 'name'); ?> <input name="sub_edit2" type="submit" value="Показать"/></br>
                                 Редактирование заказов  <?php combo('order', $con, 'order_info', 'num'); ?> <input name="sub_edit3" type="submit" value="Показать"/></br>
                                 <table align="center" width="1000" cellpadding="0" cellspacing="0" style="border: #2f3a5f solid medium"><?php include './code_admin_panel.php'; ?>
                                     <?php if (isset($_REQUEST['sub_edit']) || isset($_REQUEST['sub_edit2']) || isset($_REQUEST['sub_edit3'])) { ?>
                                  <input name="sub_choose" type="submit" value="Выбрать"/> 
                             <?php } ?>
                                  <input name="type" type="hidden" value="<?=$t?>"></input>
                                  </table>
                             </form>
           <a class="cool_text"><?=$result?></a>
           <?php if (isset($_REQUEST['sub_choose'])){ ?>
           <?php if($t==1){?>
           <a class="cool_text">Редактирование пользователя </a></br>
           <form name="f9" action="admin_panel.php" method="get">
           <input name="c_id" type="hidden" value="<?=$customer_id?>">
               <table align="center">
                   <tr>
           <td>Фамилия:</td> <td><input name="c_surname" type="text" value="<?=$surname?>"></input></td>
                   </tr>
                   <tr>
           <td>Имя:</td> <td><input name="c_name" type="text" value="<?=$name?>"></input></td>
           </tr>
                   <tr>
           <td>Отчество:</td> <td><input name="c_patronymic" type="text" value="<?=$patronymic?>"></input></td>
           </tr>
                   <tr>
           <td>Паспорт:</td> <td><input name="c_passport" type="text" value="<?=$passport?>"></input></td>
           </tr>
                   <tr>
           <td>Дата рождения:</td> <td> <input name="c_birthday" type="date" value="<?=$birthday?>"></input></td>
           </tr>
                   <tr>
           <td>Эл. Почта:</td> <td> <input name="c_email" type="text" value="<?=$email?>"></input></td>
           </tr>
                   <tr>
           <td>Логин:</td> <td> <input name="c_login" type="text" value="<?=$login?>"></input></td>
           </tr>
                   <tr>
           <td>Пароль:</td> <td> <input name="c_pass" type="text" value="<?=$pass?>"></input></td>
           </tr>
                   <tr>
            <td><input name="sub_edit_1" type="submit" value="Редактировать данные"/> </td>
            <td><input name="sub_del_1" type="submit" value="Удалить пользователя"/> </td>
            </tr>
            </table>
           </form>
           <?php } ?>
           <?php if($t==2){?>
                <a class="cool_text">Редактирование персонала </a></br>
           <form name="f11" action="admin_panel.php" method="get">
           <input name="staff_id" type="hidden" value="<?=$id_staff?>"></input></br>
           <table align="center">
           <tr><td>Отель:</td>
                <td><input name="mas" type="radio" value="1" checked/> Аксиденталь на Осипенко </br>
                <input name="mas" type="radio" value="2"/> Аксиденталь на Химиков </br>
                <input name="mas" type="radio" value="3"/> Аксиденталь на Счастливой </td>
               </tr><tr>
           <td>Должность:</td><td> <?php combo('staff', $con, 'status', 'name'); ?></td>
           </tr><tr>
           <td>Фамилия:</td> <td><input name="c_surname" type="text" value="<?=$surname?>"></input></td>
           </tr><tr>
           <td>Имя:</td> <td><input name="c_name" type="text" value="<?=$name?>"></input></td>
           </tr><tr>
           <td>Отчество:</td> <td> <input name="c_patronymic" type="text" value="<?=$patronymic?>"></input></td>
           </tr><tr>
           <td>Паспорт:</td> <td> <input name="c_passport" type="text" value="<?=$passport?>"></input></td>
           </tr><tr>
                <td>Телефон:</td> <td>  <input name="c_phone" type="tel" value="<?=$phone?>"></input></td>
               </tr><tr> 
           <td>Зар. плата: </td> <td><input name="c_salary" type="text" value="<?=$salary?>"></input></td>
           </tr><tr>
            <td><input name="sub_edit_staff" type="submit" value="Редактировать данные"/> </td>
            <td><input name="sub_del_2" type="submit" value="Уволить сотрудника"/>  </td>
            </table>
           </form>
           <?php } ?>
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


