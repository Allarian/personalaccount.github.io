<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/modals.css">
	<title>Личный кабинет пользователя Ростелеком</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="main">
	<div class="wrap">
		<header class="col-xs-12">
			<menu class="col-lg-8 col-md-8">
				<a href="user_page.php"><img src="img/logo.png" id="logo"></a><a href="internet.php">Интернет</a><a href="tv.php">Интерактивное ТВ</a><a href="about_program.html">О сервисе</a><a href="feedback.php">Обратная связь</a>
			</menu>
			<menu id="log_out" class="col-lg-4 col-md-4">
				<a href="settings.php">Настройки профиля</a><a href="sign_in.php">Выход</a>
			</menu>
		</header>
		<main class="col-xs-12">
			<div class="col-lg-12 col-md-12">
				<div class="info_block">
					<div class="row row_top">
						<div class="col col-lg-5 col-md-5 box">
							<h2 class="underline">Персональные данные</h2>
							<a href="settings.php" class="trek button_2">Изменить личные данные</a>
							<form id="user_data" class="anim">
								<div class="row flex_row">
									<div class="flex_block"><p>Воронина Александра Семеновна</p></div>
									<div class="col col-lg-6 col-md-5 col-md-push-1">
										<div class="flex_row">
											<div class="flex_block"><p>21.03.1990</p></div>
											<div class="flex_block"><p>Женский</p></div>
										</div>
									</div>
								</div>
								<div class="row flex_row">
									<div class="flex_block"><p>Ставропольский край</p></div>
									<div class="flex_block"><p>г. Ставрополь</p></div>
								</div>
								<div class="row flex_row">
									<div class="flex_block"><p>Ул. Лермонтова</p></div>
									<div class="col col-lg-6 col-md-5 col-md-push-1">
										<div class="flex_row">
											<div class="flex_block"><p>д. 271</p></div>
											<div class="flex_block"><p>кв. 15</p></div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-lg-push-2 col-md-5 col-md-push-1 box">
							<h2 class="underline">Лицевой счёт</h2>
							<a href="#new_pers_acc_num" class="trek button_2">Добавить номер лицевого счёта</a>
							<div class="w100 anim" id="stat_acct">
								<div class="acc_numd_choice">
									<input type="radio" name="acc_numb" id="acc_nb_1" checked>
									<label for="acc_nb_1">042600054048</label>
									<input type="radio" name="acc_numb" id="acc_nb_2">
									<label for="acc_nb_2"></label>
									<input type="radio" name="acc_numb" id="acc_nb_3">
									<label for="acc_nb_3"></label>
									<input type="radio" name="acc_numb" id="acc_nb_4">
									<label for="acc_nb_4"></label>
									<input type="radio" name="acc_numb" id="acc_nb_5">
									<label for="acc_nb_5"></label>
								</div>
								<div class="row">
									<div class="col col-lg-6 col-md-6">
										<h4>На счету</h4>
										<span class="cost" name="on_acc">1000</span>
									</div>
									<div class="col col-lg-6 col-md-6">
										<h4>К списанию</h4>
										<span class="cost" name="to_cut">930</span>
									</div>
									<button class="button button_submit" onclick="location.href='#refill_BS'">Пополнить баланс</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="info_block">
					<h2>Подключенные тарифы и услуги</h2>
					<div class="box">
						<div class="row">
							<div class="col-lg-5 col-md-5 pull_out_box">
								<div class="block">
									<div class="row"><p class="anim show_more" id="show-more-1" onclick="show_more('1')">Интернет</p></div>
									<div id="1" class="sub_block hidden">
										<div class="row flex_row" id="int_rate">
											<div class="flex_block"><span class="name">Домашний Интернет 50</span></div>
											<div class="flex_row col col-lg-6 col-md-6">
												<div class="flex_block"><span class="speed">50</span></div>
												<div class="flex_block"><span class="cost cost_month">550</span></div>
											</div>
										</div>
										<div class="block">
											<div class="row flex_row show_more" id="show-more-2" onclick="show_more('2')"><b>Опции</b></div>
											<div id="2" class="sub_block hidden">
												<div class="row flex_row" id="int_opt">
													<div class="flex_block"><span class="name">Домашний архив</span></div>
													<div class="flex_row col col-lg-6 col-md-6">
														<div class="flex_block"></div>
														<div class="flex_block"><span class="cost cost_month">30</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row flex_row" id="int_wifi_rate">
											<div class="flex_block"><span class="name">WiFi 0 руб.</span></div>
											<div class="flex_row col col-lg-6 col-md-6">
												<div class="flex_block"><span class="speed">1</span></div>
												<div class="flex_block"><span class="cost cost_month">0</span></div>
											</div>
										</div>
										<div class="row flex_row" id="int_device">
											<div class="flex_block"><span class="name">Оборудование не куплено</span></div>
											<div class="flex_row col col-lg-6 col-md-6 hidden">
												<div class="flex_block"><span class="month"></span></div>
												<div class="flex_block"><span class="cost cost_month"></span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-5 col-lg-push-2 col-md-push-2 pull_out_box">
								<div class="block">
									<div class="row"><p class="anim show_more" id="show-more-3" onclick="show_more('3')">Интерактивное ТВ</p></div>
									<div id="3" class="sub_block hidden">
										<div class="row flex_row" id="tv_rate">
											<div class="flex_block"><span class="name">Твой стартовый</span></div>
											<div class="flex_row col col-lg-6 col-md-6">
												<div class="flex_block"><span class="channels">127</span></div>
												<div class="flex_block"><span class="cost cost_month">320</span></div>
											</div>
										</div>
										<div class="block">
											<div class="row flex_row show_more" id="show-more-4" onclick="show_more('4')"><b>Дополнительные пакеты</b></div>
											<div id="4" class="sub_block hidden">
												<div class="row flex_row" id="sub_pack">
													<div class="flex_block"><span class="name">Твой идеальный HD</span></div>
													<div class="flex_row col col-lg-6 col-md-6">
														<div class="flex_block"></div>
														<div class="flex_block"><span class="cost cost_month">30</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="block">
											<div class="row flex_row show_more" id="show-more-5" onclick="show_more('5')"><b>Подписки</b></div>
											<div id="5" class="sub_block hidden">
												<div class="row flex_row" id="videorent">
													<div class="flex_block"><span class="name">Подписок нет</span></div>
													<div class="flex_row col col-lg-6 col-md-6">
														<div class="flex_block"></div>
														<div class="flex_block hidden"><span class="cost cost_month"></span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row flex_row" id="tv_device">
											<div class="flex_block"><span class="name">Оборудования нет</span></div>
											<div class="flex_row col col-lg-6 col-md-6">
												<div class="flex_block"><span class="month"></span></div>
												<div class="flex_block hidden"><span class="cost cost_month"></span></div>
											</div>
										</div>
									</div>
								</div>
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

	<!--Modal-->
	<div id="new_pers_acc_num" class="popup_overlay">
		<div class="box col-lg-5 col-md-5 col-lg-push-3 col-md-push-3">
			<a href="#close" class="close">&times</a>
			<h2>Добавление номера лицевого счёта</h2>
			<form action="" method="post" id="add_pers_acc_num">
				<div class="row flex_row">
					<div class="flex_block">
						<label for="acc_area">Регион лицевого счёта</label>
						<select id="acc_area" required>
							<option>Астраханская область</option>
							<option>Волгоградская область</option>
							<option>Кабардино-Балкарская Республика</option>
							<option>Карачаево-Черкесская Республика</option>
							<option>Краснодарский край</option>
							<option>Республика Адыгея</option>
							<option>Ростовская область</option>
							<option>Ставропольский край</option>
						</select>
					</div>
					<div class="flex_block">
						<label for="acc_number">Номер лицевого счёта</label>
						<input type="text" id="acc_number" pattern="[0-9]{12}" required>
					</div>
				</div>
				<div class="row flex_row">
					<div class="flex_block"><input type="reset" class="button button_submit" value="Очистить"></div>
					<div class="flex_block"><input type="submit" class="button button_submit" value="Добавить"></div>
				</div>
			</form>
		</div>
	</div>
	<div id="refill_BS" class="popup_overlay">
		<div class="box col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
			<a href="#close" class="close">&times</a>
			<h2>Пополнение баланса</h2>
			<form action="" method="post" id="refilling_BS">
				<label for="acc_number">Введите сумму пополнения в рублях</label>
				<input type="text" id="acc_number" pattern="^[ 0-9]+$" required>
				<input type="submit" class="button button_submit">
			</form>
		</div>
	</div>

	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/scripts.js"></script>

	<button id="btn_toTop" class="anim" onclick="document.getElementById('main').scrollTop = 0;" title="Наверх">
    	<svg viewBox="0 0 500 500" style="width: 70px;height:50px;"  currentscale="1">
    		<path style="fill:#010002;" d="M238.369,0C106.726,0,0,106.726,0,238.369c0,131.675,106.726,238.369,238.369,238.369
				c131.675,0,238.369-106.694,238.369-238.369C476.737,106.726,370.043,0,238.369,0z M352.722,289.221
				c-6.198,6.198-16.273,6.198-22.47,0l-91.883-91.883l-91.883,91.883c-6.198,6.198-16.273,6.198-22.47,0
				c-6.198-6.166-6.198-16.273,0-22.47L227.086,163.68c3.115-3.115,7.183-4.64,11.283-4.64s8.168,1.526,11.283,4.64L352.722,266.75
				C358.92,272.948,358.92,282.991,352.722,289.221z"/>
   		</svg>
    </button>

</body>

</html>