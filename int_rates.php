<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/sprite.css">
	<link rel="stylesheet" type="text/css" href="css/modals.css">
	<title>Тарифы Домашнего Интернета</title>
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
				<h2>Тарифы на Безлимитный Интернет</h2>
				<div class="info_block">
					<h3>Тариф «Игровой»</h3>
					<div class="block">
						<div class="row">
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_speed small_1"></div>
								<div>
									<h4>Интернет до 100 Мбит/с</h4>
									<p>по оптической линии</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_icons small_1"></div>
								<div>
									<h4>Игровые опции:</h4>
									<ul style="margin-left:50px">
										<li>World of Tanks</li>
										<li>Фогейм</li>
									</ul>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_icons small_2"></div>
								<div>
									<h4>Антивирус</h4>
									<p>в подарок на 1 месяц</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<span class="cost cost_month">850</span>
								<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
								<span class="show_more" id="show-more-1" onclick="show_more('1')">Подробнее</span></label>
							</div>
						</div>
						<div id="1" class="sub_block hidden">
							<div class="row">
								<div class="sprite_icons small_3"></div>
								<div>
									<h4>Домашний Интернет до 100 Мбит/с</h4>
									<p>Тариф «Игровой 100 Мбит/с»</p>
								</div>
							</div>
							<div class="row">
								<div class="sprite_icons small_4"></div>
								<div>
									<h4>Антивирус Kaspersky Internet Security</h4>
									<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
									   Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
								</div>
							</div>
							<div class="row">
								<div class="sprite_icons small_1"></div>
								<div>
									<h4>Игровые опции</h4>
									<p>Игровые преимущества в играх World of Tanks, World of Warships, World of Warplanes, Lineage 2, Blade&Soul и Point Blank. Каждый день в любимой игре вас ждет эксклюзивный комплект игровых опций.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="info_block">
					<h3>Базовые тарифы</h3>
					<div class="block">
						<div class="row">
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_speed small_1"></div>
								<div>
									<h4>Интернет до 100 Мбит/с</h4>
									<p>по оптической линии</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_icons small_2"></div>
								<div>
									<h4>Антивирус</h4>
									<p>в подарок на 1 месяц</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3"></div>
							<div class="col col-lg-3 col-md-3">
								<span class="cost cost_month">650</span>
								<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
								<span class="show_more" id="show-more-2" onclick="show_more('2')">Подробнее</span>
							</div>
						</div>
						<div id="2" class="sub_block hidden">
							<div class="row">
								<div class="sprite_icons small_3"></div>
								<div>
									<h4>Домашний Интернет до 100 Мбит/с</h4>
									<p>Тариф «Домашний Интернет 100»</p>
								</div>
							</div>
							<div class="row">
								<div class="sprite_icons small_4"></div>
								<div>
									<h4>Антивирус Kaspersky Internet Security</h4>
									<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
									   Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<div class="row">
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_speed small_2"></div>
								<div>
									<h4>Интернет до 50 Мбит/с</h4>
									<p>по оптической линии</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_icons small_2"></div>
								<div>
									<h4>Антивирус</h4>
									<p>в подарок на 1 месяц</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3"></div>
							<div class="col col-lg-3 col-md-3">
								<span class="cost cost_month">550</span>
								<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
								<span class="show_more" id="show-more-3" onclick="show_more('3')">Подробнее</span>
							</div>
						</div>
						<div id="3" class="sub_block hidden">
							<div class="row">
								<div class="sprite_icons small_3"></div>
								<div>
									<h4>Домашний Интернет до 50 Мбит/с</h4>
									<p>Тариф «Домашний Интернет 50»</p>
								</div>
							</div>
							<div class="row">
								<div class="sprite_icons small_4"></div>
								<div>
									<h4>Антивирус Kaspersky Internet Security</h4>
									<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
									   Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<div class="row">
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_speed small_3"></div>
								<div>
									<h4>Интернет до 30 Мбит/с</h4>
									<p>по оптической линии</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3">
								<div class="sprite_icons small_2"></div>
								<div>
									<h4>Антивирус</h4>
									<p>в подарок на 1 месяц</p>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3"></div>
							<div class="col col-lg-3 col-md-3">
								<span class="cost cost_month">450</span>
								<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
								<span class="show_more" id="show-more-4" onclick="show_more('4')">Подробнее</span>
							</div>
						</div>
						<div id="4" class="sub_block hidden">
							<div class="row">
								<div class="sprite_icons small_3"></div>
								<div>
									<h4>Домашний Интернет до 30 Мбит/с</h4>
									<p>Тариф «Домашний Интернет 30»</p>
								</div>
							</div>
							<div class="row">
								<div class="sprite_icons small_4"></div>
								<div>
									<h4>Антивирус Kaspersky Internet Security</h4>
									<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
									   Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="show_more" style="font-size: 14px" id="show-more-5" onclick="show_more('5')">Интернет по телефонной линии</p>
				<div id="5" class="sub_block hidden">
					<div class="info_block">
						<h3>Тариф «Игровой»</h3>
						<div class="block">
							<div class="row">
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_speed small_4"></div>
									<div>
										<h4>Интернет до 15 Мбит/с</h4>
										<p>по оптической линии</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_icons small_1"></div>
									<div>
										<h4>Игровые опции:</h4>
										<ul style="margin-left:50px">
											<li>World of Tanks</li>
											<li>Фогейм</li>
										</ul>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_icons small_2"></div>
									<div>
										<h4>Антивирус</h4>
										<p>в подарок на 1 месяц</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<span class="cost cost_month">850</span>
									<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
									<span class="show_more" id="show-more-6" onclick="show_more('6')">Подробнее</span>
								</div>
							</div>
							<div id="6" class="sub_block hidden">
								<div class="row">
									<div class="sprite_icons small_3"></div>
									<div>
										<h4>Домашний Интернет до 15 Мбит/с</h4>
										<p>Тариф «Игровой 15 Мбит/с»</p>
									</div>
								</div>
								<div class="row">
									<div class="sprite_icons small_4"></div>
									<div>
										<h4>Антивирус Kaspersky Internet Security</h4>
										<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
										Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
									</div>
								</div>
								<div class="row">
									<div class="sprite_icons small_1"></div>
									<div>
										<h4>Игровые опции</h4>
										<p>Игровые преимущества в играх World of Tanks, World of Warships, World of Warplanes, Lineage 2, Blade&Soul и Point Blank. Каждый день в любимой игре вас ждет эксклюзивный комплект игровых опций.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="info_block">
						<h3>Базовые тарифы</h3>
						<div class="block">
							<div class="row">
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_speed small_5"></div>
									<div>
										<h4>Интернет до 10 Мбит/с</h4>
										<p>по оптической линии</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_icons small_2"></div>
									<div>
										<h4>Антивирус</h4>
										<p>в подарок на 1 месяц</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3"></div>
								<div class="col col-lg-3 col-md-3">
									<span class="cost cost_month">650</span>
									<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
									<span class="show_more" id="show-more-7" onclick="show_more('7')">Подробнее</span>
								</div>
							</div>
							<div id="7" class="sub_block hidden">
								<div class="row">
									<div class="sprite_icons small_3"></div>
									<div>
										<h4>Домашний Интернет до 10 Мбит/с</h4>
										<p>Тариф «Домашний Интернет 10»</p>
									</div>
								</div>
								<div class="row">
									<div class="sprite_icons small_4"></div>
									<div>
										<h4>Антивирус Kaspersky Internet Security</h4>
										<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
										Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<div class="row">
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_speed small_6"></div>
									<div>
										<h4>Интернет до 5 Мбит/с</h4>
										<p>по оптической линии</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_icons small_2"></div>
									<div>
										<h4>Антивирус</h4>
										<p>в подарок на 1 месяц</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3"></div>
								<div class="col col-lg-3 col-md-3">
									<span class="cost cost_month">550</span>
									<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
									<span class="show_more" id="show-more-8" onclick="show_more('8')">Подробнее</span>
								</div>
							</div>
							<div id="8" class="sub_block hidden">
								<div class="row">
									<div class="sprite_icons small_3"></div>
									<div>
										<h4>Домашний Интернет до 5 Мбит/с</h4>
										<p>Тариф «Домашний Интернет 5»</p>
									</div>
								</div>
								<div class="row">
									<div class="sprite_icons small_4"></div>
									<div>
										<h4>Антивирус Kaspersky Internet Security</h4>
										<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
										Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<div class="row">
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_speed small_7"></div>
									<div>
										<h4>Интернет до 3 Мбит/с</h4>
										<p>по оптической линии</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3">
									<div class="sprite_icons small_2"></div>
									<div>
										<h4>Антивирус</h4>
										<p>в подарок на 1 месяц</p>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3"></div>
								<div class="col col-lg-3 col-md-3">
									<span class="cost cost_month">450</span>
									<a href="#get_rate" class="decor_n"><button class="button_get button">Подключить</button></a>
									<span class="show_more" id="show-more-9" onclick="show_more('9')">Подробнее</span>
								</div>
							</div>
							<div id="9" class="sub_block hidden">
								<div class="row">
									<div class="sprite_icons small_3"></div>
									<div>
										<h4>Домашний Интернет до 3 Мбит/с</h4>
										<p>Тариф «Домашний Интернет 3»</p>
									</div>
								</div>
								<div class="row">
									<div class="sprite_icons small_4"></div>
									<div>
										<h4>Антивирус Kaspersky Internet Security</h4>
										<p>1 месяц в подарок при подключении ежемесячной подписки.<br>
										Надежная защита компьютера от вредоносных программ, вирусов и спам-рассылок. Действует на 2 устройства.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="info_block">
					<div class="info">
						<h2>Примечания</h2>
						<ol>
							<li>Услуги Высокоскоростного интернета предоставляются при наличии технической возможности.</li>
							<li>Цены указаны в рублях с учетом НДС.</li>
							<li>Скорость доступа к сети Интернет зависит не только от технических особенностей Услуги, но и от действий третьих сил, организаций и лиц, управляющих сегментами сети Интернет (или оказывающих на них влияние),
								не принадлежащих ПАО «Ростелеком». Скорость доступа к сети Интернет является величиной неопределенной и зависит от ряда параметров, в том числе, технических характеристик подключения, маршрута и текущей загрузки каналов,
								характеристиками установленного абонентского оборудования (ПК, смартфон, WiFi-роутер), версией программного обеспечения или используемого стандарта, месторасположением запрашиваемого контента.
								Все параметры являются переменными и не гарантируются ПАО «Ростелеком» за пределами своей сети. Указанная в тарифном плане скорость является максимально возможной.</li>
							<li>Абонентская плата за услугу Интернет списывается с лицевого счета абонента один раз в месяц.</li>
							<li>Оборудование (маршрутизатор или абонентский модем в зависимости от технологии предоставления услуги), необходимое для получения услуг, может быть приобретено отдельно по действующим тарифам.</li>
						</ol>
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
			<h2>Подтвердите подключение тарифа</h2>
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