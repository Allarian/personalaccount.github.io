<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Обратная связь</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="wrap" id="main">
		<header class="col-xs-12">
			<menu class="col-lg-8 col-md-8">
				<a href="user_page.php"><img src="img/logo.png" id="logo"></a><a href="internet.php">Интернет</a><a href="tv.php">Интерактивное ТВ</a><a href="about_program.html">О сервисе</a><a href="feedback.php" id="active">Обратная связь</a>
			</menu>
			<menu id="log_out" class="col-lg-4 col-md-4">
				<a href="settings.php">Настройки профиля</a><a href="sign_in.php">Выход</a>
			</menu>
		</header>
		<main class="col-xs-12">
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<h2>Обратная связь</h2>
				<div class="box col-lg-10 col-md-10">
					<h3 class="underline">Пожалуйста, заполните форму</h3>
					<form action="feedback.js" method="post" id="feedback_form">
						<div class="row flex_row">
							<div class="flex_block">
								<label for="client_cat">Категория клиента<span>*</span></label>
								<select id="client_cat" required>
										<option selected>Частный клиент</option>
										<option>Корпоративный клиент</option>
								</select>
							</div>
							<div class="flex_block">
								<label for="name_client">Фамилия, имя, отчество<span>*</span></label>
								<input type="text" id="name_client" pattern="^[А-Яа-яЁё\s]+$" required>
							</div>
							<div class="flex_block">
								<label for="communicat_time">Удобное для связи время</label>
								<select id="communicat_time">
									<option selected>В любое время</option>
									<option>9:00-12:00</option>
									<option>12:00-15:00</option>
									<option>15:00-18:00</option>
									<option>18:00-21:00</option>
								</select>
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="phone">Контактный телефон<span id="phone_req">*</span></label>
								<input type="text" id="phone" placeholder="+7(9__)___-__-__" required>
							</div>
							<div class="flex_block">
								<label for="email">Электронная почта<span id="email_req" class="hidden">*</span></label>
								<input type="email" id="email">
							</div>
							<div class="flex_block" >
								<label for="phone_communicat" style="display:block" onclick="phone()"><input type="radio" name="radio" id="phone_communicat" checked>связаться с Вами по телефону</label>
								<label for="email_communicat" style="display:block" onclick="email()"><input type="radio" name="radio" id="email_communicat">связаться с Вами по эл. почте</label>
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="place_of_residence">Регион проживания<span>*</span></label>
								<select id="place_of_residence" required>
										<option selected disabled>Выберите регион</option>
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
							<div class="col col-lg-5 col-md-5">
								<label for="locality">Населённый пункт</label>
								<input type="text" id="locality">
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="street">Улица</label>
								<input type="text" id="street">
							</div>
							<div class="flex_row col col-lg-5 col-md-5">
								<div class="flex_block">
									<label for="building">№ дома</label>
									<input type="text" id="building" pattern="^[ 0-9]+$">
								</div>
								<div class="flex_block">
									<label for="apartment">Квартира</label>
									<input type="text" id="apartment" pattern="^[ 0-9]+$">
								</div>
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="service">Услуга<span>*</span></label>
								<select id="service" required>
									<option selected disabled>Выберите из списка</option>
									<option>Домашний Интернет</option>
									<option>Интерактивное ТВ</option>
									<option>Wi-Fi</option>
									<option>Универсальная услуга связи Wi-Fi</option>
									<option>Общий вопрос</option>
								</select>
							</div>
							<div id="acc_block" class="col col-lg-5 col-md-5 hidden">
								<label for="acc_number">Номер лицевого счёта <span>*</span></label>
								<input type="text" id="acc_number" pattern="[0-9]{12}">
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="topic" class="w100">Тема обращения<span>*</span></label>
								<select id="topic" onclick="show_acc_block()" required>
									<option selected disabled>Выберите элемент из списка</option>
									<option>Благодарность</option>
									<option>Вопрос. Личный кабинет</option>
									<option>Вопрос. Описание услуг</option>
									<option>Вопрос. Переоформление</option>
									<option>Вопрос. Подключение опций</option>
									<option>Вопрос. Способ оплаты</option>
									<option>Вопрос. Условия договора</option>
									<option>Вопрос. Цены, тарифы, начисления</option>
									<option>Другое</option>
									<option>Запрос. Подключение услуг, предоставление доп.сервисов</option>
									<option>Запрос. Предоставление платежно-расчетных документов</option>
									<option>Претензия. Качество обслуживания</option>
									<option>Претензия. Качество предоставления услуг</option>
									<option>Претензия. Прочее/Другое</option>
									<option>Претензия. Счета/Порядок оплаты</option>
									<option>Претензия. Тарифы, скидки, акции</option>
									<option>Тарифный план «Игровой»</option>
									<option>Техподдержка. Личный кабинет</option>
								</select>
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="feedback_text" class="w100">Текст обращения<span>*</span></label>
								<textarea id="feedback_text" class="w100" required></textarea>
							</div>
						</div>
						<p><span>*</span>Поля, обязательные для заполения</p>
						<div class="row flex_row">
							<input type="reset" class="button button_submit" value="Очистить">
							<input type="submit" class="button button_submit disabled" disabled>
						</div>
					</form>
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

	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/feedback.js"></script>
	<script src="js/scripts.js"></script>
	<script> function phone() {
        	document.getElementById('phone_req').classList.remove('hidden');
        	document.getElementById('email_req').classList.add('hidden')
		}
		function email() {
			document.getElementById('email_req').classList.remove('hidden');
			document.getElementById('phone_req').classList.add('hidden');
		}
	</script>

</body>

</html>