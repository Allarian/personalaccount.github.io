<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/modals.css">
	<title>Оборудование для Интерактивного ТВ</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="main">
	<div class="wrap">
		<header class="col-xs-12">
			<menu class="col-lg-8 col-md-8">
				<a href="user_page.php"><img src="img/logo.png" id="logo"></a><a href="internet.php">Интернет</a><a href="tv.php" id="active">Интерактивное ТВ</a><a href="about_program.html">О сервисе</a><a href="feedback.php">Обратная связь</a>
			</menu>
			<menu id="log_out" class="col-lg-4 col-md-4">
				<a href="settings.php">Настройки профиля</a><a href="sign_in.php">Выход</a>
			</menu>
		</header>
		<main class="col-xs-12">
			<div class="col-xs-12 sub_menu">
				<a href="tv.php">Об услуге</a><a href="tv_rates.php">Тарифы</a><a href="videorent.php">Видеопрокат</a><a href="tv_device.php">Оборудование</a>
			</div>
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<h2>Оборудование</h2>
				<div class="info_block">
					<div class="row row_center">
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall_2">
								<img src="img/device_tv_1.jpg" alt="ТВ-приставка «Стандарт» с поддержкой HD и 3D без встроенного жесткого диск" style="width:100%">
								<h3>ТВ-приставка «Стандарт» с поддержкой HD и 3D без встроенного жесткого диска</h3>
								<p>Основные функции:</p>
								<ul>
									<li>поддержка изображения в цифровом формате стандартной (SD) и высокой (HD) четкости, стереозвук;</li>
									<li>поддержка интерактивных сервисов.</li>
								</ul>
							</div>
							<select id="1" class="select" onchange="cost_change_2('1')">
								<option disabled>Выберите способ расчёта</option>
								<option>В рассрочку на 36 месяцев</option>
								<option>В рассрочку на 24 месяца</option>
								<option>В рассрочку на 12 месяцев</option>
								<option selected>Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc1">3800</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall_2">
								<img src="img/device_tv_2.jpg" alt="Видеосендер VAP2400 Motorola. ТВ без проводов" style="width:100%">
								<h3>Видеосендер VAP2400 Motorola. ТВ без проводов</h3>
								<p>Преимущества:</p>
								<ul>
									<li>не надо сверлить стены;</li>
									<li>никаких расходов на установку;</li>
									<li>провода больше не будут мешаться под ногами;</li>
									<li>просто установить и настроить самому;</li>
									<li>видео Full HD 1080p и SD;</li>
									<li>до пяти потоков видео одновременно.</li>
								</ul>
								<p>Видеосендер приобретается дополнительно к ТВ-приставке.</p>
							</div>
							<select id="2" class="select" onchange="cost_change_2('2')">
								<option disabled>Выберите способ расчёта</option>
								<option>В рассрочку на 24 месяца</option>
								<option>В рассрочку на 12 месяцев</option>
								<option selected>Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc2">3960</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
						<div class="col col-lg-4 col-md-4 row_block moderate_w">
							<div class="tall_2">
								<img src="img/device_tv_3.jpeg" alt="Универсальный пульт дистанционного управления" style="width:100%">
								<h3>Универсальный пульт дистанционного управления</h3>
								<p>Позволяет управлять как ТВ-приставкой, так и телевизором одновременно.</p>
							</div>
							<select id="3" class="select" onchange="cost_change_2('3')">
								<option disabled>Выберите способ расчёта</option>
								<option selected>Единовременно</option>
							</select>
							<div class="row w100">
								<span>Стоимость покупки</span>
								<span class="cost right" id="dc3">350</span>
							</div>
							<a href="#get_rate" class="decor_n"><button class="button_get button right">Купить</button></a>
						</div>
					</div>
				</div>
				<div class="info_block">
					<div class="info">
						<h2>Примечания</h2>
						<p>Состав комплекта оборудования:</p>
						<ul>
							<li>ТВ-приставка;</li>
							<li>универсальный пульт дистанционного управления;</li>
							<li>адаптер питания, переходник RCA-SCART, соединительные кабели: сетевой, композитный, HDMI.</li>
						</ul>
						<p>В зависимости от технологии подключения может потребоваться оборудование доступа к сети Интернет, которое не входит в комплект с ТВ-приставкой.
						   Подробную информацию предоставит наш менеджер после проверки технической возможности и оставления заявки на подключение.</p>
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