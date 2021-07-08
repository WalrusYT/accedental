<?php include '../config.php';
include './myFunction.php';
include './code_exit.php';
include './code_book.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Аксиденталь - Отель в Санкт-Петербурге</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block"> <a class="nav_button" href="../index.php"> Главная</a>
	  <?php if (isset($_COOKIE['user'])) { ?>  
            <a class="nav_button" href="pages/book.php">Забронировать</a>
            <a class="nav_button" href="profile.php">Профиль</a>
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
        <div id="content_container">
            <div id="header"> <div class="header_content_mainline"> Вы успешно забронировали номер в нашем отеле! </div> <div id="header_content_tagline"></div>
          
          
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
