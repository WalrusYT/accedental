<?php include './config.php';
include './pages/myFunction.php';
include './pages/code_exit.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Аксиденталь - Отель в Санкт-Петербурге</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="top_bar_black"> <div id="logo_container"> <div id="logo_image"> </div>  <div id="nav_block"> <div class="nav_button">Главная</a></div>
            
            <?php if (isset($_COOKIE['user'])) { ?>  
            <a class="nav_button" href="pages/book.php">Забронировать</a>
            <a class="nav_button" href="pages/profile.php">Профиль</a>
            <?php if ($_COOKIE['user'] == 'admin') { ?>
            <a class="nav_button" href="pages/admin_panel.php">Админ-панель</a>
            <?php } ?>
            <?php if ($count !=0) { ?>
            <a class="nav_button" href="pages/orders.php">Мои заказы (<?=$count?>)</a>
            <?php } ?>
            <a class="nav_button"> <form name="f2" action="index.php" method="get">
                <input name="sub_exit" type="submit" value="Выход"/>
            </form> </a>
            <?php } else{?>
            <a class="nav_button" href="pages/login.php">Вход</a>
            <a class="nav_button" href="pages/register.php">Регистрация</a>
            <?php } ?>
          
		
	  </div>
</div> </div>
        <div id="content_container">
            <?php if (isset($_COOKIE['user'])) { ?>  
       	  <div id="header"> <div class="header_content_mainline"> Здравствуйте, <?=$_COOKIE['user']?> </div> <div id="header_content_tagline">Основной слоган нашей гостиницы. Ведь при заселении к нам, вы погружаетесь в атмосферу уюта и комфорта за приемлемую цену</div>
          <?php } else{?>
              <div id="header"> <div class="header_content_mainline"> Добро пожаловать! </div> <div id="header_content_tagline">Основной слоган нашей гостиницы. Ведь при заселении к нам, вы погружаетесь в атмосферу уюта и комфорта за приемлемую цену</div>
          <?php } ?>
</div>
           
                 <div id="header_lower">  <div id="header_content_boxline">О нас <div id="header_content_boxcontent">Посмотрите на город глазами местных жителей, остановившись в самом центре Санкт-Петербурга. Отель Аксиденталь удобно расположен на Невском проспекте - главной улице Санкт-Петербурга. В этом отеле, находящемся недалеко от всемирно известных культурных и исторических достопримечательностей Петербурга, включая музей Фаберже, гостей ждут роскошные номера для приятного отдыха. Отель находится рядом с торговыми и деловыми центрами, а также всего в 5 минутах ходьбы от нескольких станций метро.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

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
