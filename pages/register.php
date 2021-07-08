<?php include '../config.php';
include './myFunction.php';
include './code_register.php';
include './code_exit.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Аксиденталь - Отель в Санкт-Петербурге</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block"> <a class="nav_button" href="../index.php"> Главная</a>
            <a class="nav_button" href="login.php">Вход</a>
            <?php if ($count !=0) { ?>
            <a class="nav_button" href="orders.php">Мои заказы (<?=$count?>)</a>
            <?php } ?>
		
	  </div>
</div> </div>
        <div id="content_container">
       	  <div id="header"> <div class="header_content_mainline"> Регистрация </div> <div id="header_content_tagline">Заполните форму регистрации</div>
          
          
</div>
           
                 <div id="header_lower">  <div id="header_content_boxline">Зарегистрироваться <div id="header_content_boxcontent">
                             <form name="f1" action="register.php" method="get">
                             Фамилия: <input name="surname" type="text" value=""/></br>
                             Имя: <input name="name" type="text" value=""/></br>
                             Отчество: <input name="patronymic" type="text" value=""/></br>
                             Паспорт: <input name="passport" type="text" value=""/></br>
                             Дата рождения: <input name="birth" type="date" value=""/> </br>
                             Электронная почта: <input name="mail" type="text" value=""/> </br>
                             Логин: <input name="login" type="text" value=""/> </br>
                             Пароль: <input name="pass" type="password" value=""/> </br>
                             <input name="sub_reg" type="submit" value="Отправить"/>
                             </form>
                             <?php echo $error ?>
 </div></div> 
          </div><div id="header_lower">  
            <div id="header_content_boxline">История</div> 
          <div id="header_content_boxcontent">Невском проспекте в Санкт-Петербурге
Посмотрите на город глазами местных жителей, остановившись в самом центре Санкт-Петербурга. Отель Radisson Royal удобно расположен на Невском проспекте - главной улице Санкт-Петербурга. В этом отеле, находящемся недалеко от всемирно известных культурных и исторических достопримечательностей Петербурга, включая музей Фаберже, гостей ждут роскошные номера для приятного отдыха. Отель находится рядом с торговыми и деловыми центрами, а также всего в 5 минутах ходьбы от нескольких станций метро.

Исторический отель в центре Санкт-Петербурга

Здание, в котором расположен отель Аксиденталь, построено в XVIII веке и имеет богатую историю. Его интерьер был полностью реконструирован в 2001 году. Также был восстановлен оригинальный фасад, свидетельствующий о величии этого здания. При этом были сохранены оригинальные элементы, возраст которых насчитывает почти 300 лет. Наш первоклассный отель в Санкт-Петербурге сочетает в себе роскошь и комфорт. Мы предлагаем гостям 164 элегантных и современных номера. Наши прекрасно оборудованные конференц-залы и светлый атриум готовы принять специальные мероприятия любого уровня: корпоративные семинары, приемы и свадьбы.</div>
          
          </div>    
        </div>
        
        
        
        
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
