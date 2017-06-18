<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/sprite.css">
	<link rel="stylesheet" type="text/css" href="css/modals.css">
	<title>Дополнительные услуги для Домашнего Интернета</title>
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
		<main  class="col-xs-12">
			<div class="col-xs-12 sub_menu">
				<a href="internet.php">Об услуге</a><a href="int_rates.php">Тарифы</a><a href="int_options.php">Опции</a><a href="wifi.php">Wi-Fi</a><a href="device_int.php">Оборудование</a>
			</div>
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<h2 style="padding-bottom:10px">Опции Домашнего Интернета</h2>
				<div class="block">
					<div class="row">
						<div class="col col-lg-9 col-md-9">
							<div class="sprite_icons small_5"></div>
							<div>
								<h3>Родительский контроль «Safe Kids»</h3>
								<p>Ограничение доступа на любые устройства ребенка.</p>
							</div>
						</div>
						<div class="col col-lg-3 col-md-3">
							<span class="cost cost_month">от 99</span>
							<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
							<span class="show_more" id="show-more-1" onclick="show_more('1')">Подробнее</span>
						</div>
					</div>
					<div id="1" class="sub_block hidden">
						<div class="row">
							<div class="inner_row">
								<p>Услуга «Kaspersky Safe Kids» позволит защитить устройства ребенка от негативного влияния Интернета,
						   	   	   ограничить или запретить доступ к опасному контенту, контролировать время использования устройствами, отслеживать местонахождение ребенка и получать оперативные уведомления об активности вашего ребенка.</p>
								<h4>Сколько стоит:</h4>
								<p>Ежемесячная подписка — 99 руб./мес. Первый месяц после активации — бесплатно, далее автоматическая платная пролонгация.</p>
								<p>Годовая подписка — 900 руб./год, экономия 288 руб. по сравнению с ежемесячной подпиской, плюс два месяца пользования в подарок.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="row">
						<div class="col col-lg-9 col-md-9">
							<div class="sprite_icons small_6"></div>
							<div>
								<h3>Фиксированный IP</h3>
								<p>Получите фиксированный IP-адрес, чтобы размещать в Интернете собственные веб-ресурсы и пользоваться всеми возможностями файлообменных сетей.</p>
							</div>
						</div>
						<div class="col col-lg-3 col-md-3">
							<span class="cost cost_month">от 60</span>
							<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
							<span class="show_more" id="show-more-2" onclick="show_more('2')">Подробнее</span>
						</div>
					</div>
					<div id="2" class="sub_block hidden">
						<div class="row">
							<div class="inner_row">
								<p>Опция «Фиксированный IP» позволяет закрепить фиксированный «реальный» IP-адрес за вашим оборудованием.
						   	   	   Это позволит организовать размещение в сети собственных веб-ресурсов и полноценно пользоваться всеми возможностями файлообменных сетей.</p>
								<p>Все заказанные изменения в составе опций вступают в силу не позднее следующих за заказом суток.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="row">
						<div class="col col-lg-9 col-md-9">
							<div class="sprite_icons small_7"></div>
							<div>
								<h3>Медиабокс</h3>
								<p>Воспроизводите и скачивайте видео и аудио композиции с помощью программы «Медиабокс».</p>
							</div>
						</div>
						<div class="col col-lg-3 col-md-3">
							<span class="cost cost_month">от 50</span>
							<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
							<span class="show_more" id="show-more-3" onclick="show_more('3')">Подробнее</span>
						</div>
					</div>
					<div id="3" class="sub_block hidden">
						<div class="row">
							<div class="inner_row">
								<p>Программа «Медиабокс» представляет собой поисковую систему, менеджер закачек и проигрыватель файлов в одной программной оболочке.
						   	   	   Каталог программы содержит тысячи видео и аудио композиций. Весь контент удобно структурирован по разделам и жанрам.</p>
								<p>Преимущества программы «Медиабокс»:</p>
								<ul>
									<li>Быстрый и всеобъемлющий поиск;</li>
									<li>Структурированный по жанрам каталог содержит тысячи видео и аудио композиций, обложки, описание, рейтинги IMDB и другую полезную информацию о контенте, размещенном на сервисах стронних провайдеров;</li>
									<li>Подписка на желаемый контент и автоматическая загрузка по мере появления контента в сети;</li>
									<li>Уведомление о завершенных скачиваниях по e-mail;</li>
									<li>Проигрыватель, включающий в себя все доступные кодеки;</li>
									<li>Максимальная скорость скачивания за счёт возможности получения контента из удобного и наглядного каталога локальных ресурсов филиала.</li>
								</ul>
								<h4>Сколько стоит:</h4>
								<p>Стоимость опции «Медиабокс» составляет 50 руб./мес.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="row">
						<div class="col col-lg-9 col-md-9">
							<div class="sprite_icons small_8"></div>
							<div>
								<h3>Домашний архив</h3>
								<p>Сохраняйте важные файлы с опцией «Домашний архив» и переносите их на другой компьютер даже в случае поломки Вашего компьютера.</p>
							</div>
						</div>
						<div class="col col-lg-3 col-md-3">
							<span class="cost cost_month">от 30</span>
							<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
							<span class="show_more" id="show-more-4" onclick="show_more('4')">Подробнее</span>
						</div>
					</div>
					<div id="4" class="sub_block hidden">
						<div class="row">
							<div class="inner_row">
								<p>Скачайте и установите на Ваш компьютер программу «Домашний архив».</p>
								<p>После установки «Домашний архив» на жестком диске Вашего компьютера будет создана специальная папка HomeArchive. В эту папку Вы сможете помещать самые важные файлы (документы, музыку, фотографии и пр.).</p>
								<p>В фоновом режиме программа «Домашний архив» будет автоматически синхронизировать содержимое папки на компьютере с содержимым в облачном хранилище 
						   	   	   (передавать и сохранять копии этих файлов на специально выделенном для Вас месте в облачном хранилище Ростелеком). Каждое изменение, которое Вы произведете в Ваших файлах, будет сохранено в копиях файлов, размещенных в облачном хранилище.</p>
								<p>Дополнительно для Вашего удобства Вы можете указать для синхронизации любые уже созданные до установки «Домашнего архива» папки. Все изменения, происходящие в указанных Вами папках, также будут сохраняться в облачном хранилище.</p>
								<p>В случае, если Ваш компьютер выйдет из строя, Вы всегда сможете установить программу «Домашний архив» на другой компьютер, и она восстановит (скопирует) Ваши файлы из облачного хранилища.</p>
								<h4>Сколько стоит:</h4>
								<p>Стоимость опции составляет 30 рублей в месяц за 1 гигабайт дискового пространства в облачном хранилище. Расширение дискового хранилища на 1 Гб стоит - 20 рублей в месяц и оплачивается дополнительно.</p>
							</div>
						</div>
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
			<h2>Подтвердите подключение опции</h2>
			<form action="" method="post" id="getting_rate">
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