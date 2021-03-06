<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/modals.css">
	<title>Оборудование для Домашнего Интернета</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="wrap" id="main">
		<header class="col-xs-12">
			<menu class="col-lg-8 col-md-8">
				<a href="user_page.php"><img src="img/logo.png" id="logo"></a><a href="internet.php" id="active">Интернет</a><a href="tv.php">Интерактивное ТВ</a><a href="about_program.html">О сервисе</a><a href="feedback.php">Обратная связь</a>
			</menu>
			<menu id="log_out" class="col-lg-4 col-md-4">
				<a href="settings.php">Настройки профиля</a><a href="sign_in.php">Выход</a>
			</menu>
		</header>
		<main class="col-xs-12">
			<div class="col-xs-12 sub_menu">
				<a href="internet.php">Об услуге</a><a href="int_rates.php">Тарифы</a><a href="int_options.php">Опции</a><a href="wifi.php">Wi-Fi</a><a href="device_int.php">Оборудование</a>
			</div>
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<h2>Оборудование</h2>
				<div class="info_block">
					<div class="row row_center">
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall">
								<img src="img/device_int_1.jpg" alt="sagem_4320" class="w100">
								<h3>FTTx маршрутизатор Sagemcom F@st 4320</h3>
								<p>Sagemcom F@st 4320 — компактный и мощный абонентский шлюз, предназначенный для решения следующих задач:</p>
								<ul>
									<li>Предоставление услуг Triple-play</li>
									<li>Высокоскоростной доступ к домовым сетям FTTH посредством интерфейса Gigabit Ethernet WAN</li>
									<li>Передача данных по стандарту Wi-Fi 802.11ас</li>
								</ul>
								<p>Sagemcom F@st 4320 v1 разработан на базе новейших технологий, позволяющих маршрутизировать трафик на скоростях, близких к скорости интерфейса GE.</p>
								<p>Преимущества:</p>
								<ul>
									<li>4 порта RJ-45 10/100/1000 BT</li>
									<li>1 порт RJ-11 (FXS порт) для оказания голосовых услуг (поддержка многоканальной IP-телефонии благодаря встроенному SIP-прокси)</li>
									<li>USB-разъем, к которому может быть подключен внешний накопитель или сетевой принтер</li>
									<li>БЕСПРОВОДНАЯ СВЯЗЬ:<br>
								    	Wi-Fi IEEE 802.11n точка доступа 2.4 ГГц<br>
										Wi-Fi IEEE 802.11ac точка доступа 5 ГГц</li>
								</ul>
							</div>
							<select id="1" class="select" onchange="cost_change_1('1')">
								<option disabled>Выберите способ расчёта</option>
								<option>В рассрочку на 36 месяцев</option>
								<option>В рассрочку на 24 месяца</option>
								<option>В рассрочку на 12 месяцев</option>
								<option selected="selected">Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc1">4800</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall">
								<img src="img/device_int_2.jpg" alt="QBR-1041WU" class="w100">
								<h3>FTTx маршрутизатор QBR-1041WU</h3>
								<p>QBR-1041WU — это современный беспроводной маршрутизатор с поддержкой стандартов 802.11b/g/n и скоростью передачи данных до 300 Мбит/с, которой будет достаточно для онлайн-игр,
							   	   трансляции потокового видео, интернет-телефонии и прочих приложений. Он прост в настройке и представляет собой базовое решение для беспроводного доступа в интернет.</p>
								<p>Преимущества:</p>
								<ul>
									<li>Четыре 10/100 Base-T Ethernet-порта</li>
									<li>Поддерживает протокол Wi-Fi Protected Setup (WPS) и имеет Wi-Fi переключатель, Две встроенные Wi-Fi антенны 3Dbi</li>
									<li>USB-разъем, к которому может быть подключен внешний накопитель или сетевой принтер</li>
									<li>4 LAN-порта 10/100Mpbs Ethernet с поддержкой авто-согласования</li>
								</ul>
							</div>
							<select id="2" class="select" onchange="cost_change_1('2')">
								<option disabled>Выберите способ расчёта</option>
								<option>В рассрочку на 36 месяцев</option>
								<option>В рассрочку на 24 месяца</option>
								<option>В рассрочку на 12 месяцев</option>
								<option selected="selected">Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc2">1900</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall">
								<img src="img/device_int_3.jpg" alt="QFR-200-4T-2V-W" class="w100">
								<h3>Маршрутизатор QFR-200-4T-2V-W</h3>
								<p>Абонентский Ethernet маршрутизатор QFR-200-4T-2V-W предназначен для предоставления услуг Triple Play с подключением Point-to-Point на основе сетей FTTH.
							   	   Это высокопроизводительное и эффективное устройство поддерживает предоставление таких сервисов, как IPTV(цифровое телевидение) и SIP телефония.</p>
								<p>Преимущества:</p>
								<ul>
									<li>Устройство QFR-200-4T-W имеет встроенный беспроводной модуль WLAN стандарта 802.11n</li>
									<li>Поддержка модуля SFP 100Base-FX для WAN-порта</li>
									<li>4 LAN-порта 10/100Mpbs Ethernet с поддержкой авто-согласования</li>
									<li>2 порта FXS</li>
								</ul>
							</div>
							<select id="3" class="select" onchange="cost_change_1('3')">
								<option disabled>Выберите способ расчёта</option>
								<option>В рассрочку на 36 месяцев</option>
								<option>В рассрочку на 24 месяца</option>
								<option>В рассрочку на 12 месяцев</option>
								<option selected="selected">Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc3">8790</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
					</div>
				</div>
				<div class="info_block">
					<div class="info">
						<h2>Примечания</h2>
						<p>Требования к персональному компьютеру:</p>
						<ul>
							<li>Операционная система: Windows XP SP3, Windows Vista SP2, Windows 7 SP1 (32/64-битные).</li>
							<li>Автоматические обновления операционной системы (Windows Update).</li>
							<li>Браузер: Internet Explorer 7 (или другой автоматически обновляемый).</li>
							<li>Процессор: Intel Pentium III 800 МГц (или эквивалентный других производителей).</li>
							<li>Оперативная память (без учёта другого ПО, установленного на компьютере): 256 МБ (Windows XP), 1024 МБ (Vista, 7).</li>
							<li>Сетевая плата (Ethernet контроллер): 10/100 Мбит/с.</li>
						</ul>
						<p>Скорость доступа к сети Интернет зависит не только от технических особенностей Услуги, но и от действий третьих сил, организаций и лиц, управляющих сегментами сети Интернет (или оказывающих на них влияние),
					   	   не принадлежащих ПАО «Ростелеком». Скорость доступа к сети Интернет является величиной неопределенной и зависит от ряда параметров, в том числе, технических характеристик подключения,
					   	   маршрута и текущей загрузки каналов, характеристиками установленного абонентского оборудования (ПК, смартфон, WiFi-роутер), версией программного обеспечения или используемого стандарта, месторасположением запрашиваемого контента. Все параметры являются переменными и не гарантируются ПАО «Ростелеком» за пределами своей сети. Указанная в тарифном плане скорость является максимально возможной.</p>
					</div>
				</div>
			</div>
		</main>
	</div>
	<footer class="col-xs-12">
		<div class="footer_box">
			<div class="footer_links">
				<h3>Компания</h3>
				<nav>
					<li><a href="http://company.rt.ru" target="_blank">О компании</a></li>
					<li><a href="http://company.rt.ru/press" target="_blank">Пресс-центр</a></li>
					<li><a href="http://company.rt,ru/career/vacancy" target="_blank">Работа в компании</a></li>
				</nav>
			</div>
			<div class="footer_links">
				<h3>Наши контакты</h3>
				<nav>
					<li><a href="http:/www.rt.ru/contacts" target="_blank">Офисы продаж</a></li>
					<li><a href="http://www.rt.ru/service/contact_info/total_info/info_services" target="_blank">Сервисные службы</a></li>
				</nav>
			</div>
			<div class="footer_block">
				<form name="search" action="#" method="get" class="search_form">
					<input type="text" name="q" placeholder="Поиск"><button type="submit"><img src="img/search.png" style="vertical-align: middle"></button>
				</form>
				<h3>Будь в курсе</h3>
				<div class="soc-links">
					<a href="http://vk.com/rostelecom" target="_blank" class="social-icon vk">ВКонтакте</a>
					<a href="http://www.facebook.com/Rostelecom.Official" target="_blank" class="social-icon fb">Facebook</a>
					<a href="http://ok.ru/rostelecom.official" target="_blank" class="social-icon ok">Однокласники</a>
				</div>
				<div class="soc-links">
					<a href="http://twitter.com/#!/Rostelecom News" target="_blank" class="social-icon tt">Twitter</a>
					<a href="http://www.youtube.com/user/rostelec" target="_blank" class="social-icon yt">Youtube</a>
					<a href="http://www.flickr.com/photos/rostelecom photostream" target="_blank" class="social-icon fk">Flickr</a>
				</div>
			</div>
		</div>
	</footer>
	<button id="btn_toTop" class="anim" onclick="document.getElementById('main').scrollTop = 0;" title="Наверх">
    	<svg viewBox="0 0 500 500" style="width: 70px;height:50px;"  currentscale="1">
    		<path style="fill:#010002;" d="M238.369,0C106.726,0,0,106.726,0,238.369c0,131.675,106.726,238.369,238.369,238.369
				c131.675,0,238.369-106.694,238.369-238.369C476.737,106.726,370.043,0,238.369,0z M352.722,289.221
				c-6.198,6.198-16.273,6.198-22.47,0l-91.883-91.883l-91.883,91.883c-6.198,6.198-16.273,6.198-22.47,0
				c-6.198-6.166-6.198-16.273,0-22.47L227.086,163.68c3.115-3.115,7.183-4.64,11.283-4.64s8.168,1.526,11.283,4.64L352.722,266.75
				C358.92,272.948,358.92,282.991,352.722,289.221z"/>
   		</svg>
    </button>

	<!--Modals-->
	<div id="get_rate" class="popup_overlay">
		<div class="box col-lg-4 col-md-5 col-lg-push-4 col-md-push-3">
			<a href="#close" class="close">&times</a>
			<h2>Подтвердите покупку оборудования</h2>
			<form action="" method="post" id="getting_rate">
				<p>Вы сможете забрать купленное оборудование завтра в центре обслуживания «Ростелеком»</p>
				<div class="row flex_row">
					<div class="flex_block">
						<input type="button" class="button button_submit" onclick="location.href='#close'" value="Отмена">
					</div>
					<div class="flex_block">
						<input type="submit" class="button button_submit" onclick="location.href='#'" value="Подтвердить">
					</div>
				</div>
			</form>
		</div>
	</div>

	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>