<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Настройки личного кабинета</title>
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
			<div class="col-lg-10 col-lg-push-1 col-md-12">
				<div class="info_block">
					<h2>Изменение личных данных</h2>
					<div class="box col-lg-10 col-md-10">
						<form action="" method="post" id="change_user_data">
							<div class="row flex_row">
								<div class="flex_block">
									<label for="surname">Фамилия</label>
									<input type="text" id="surname" required>
								</div>
								<div class="flex_block">
									<label for="name">Имя</label>
									<input type="text" id="name" required>
								</div>
								<div class="flex_block">
									<label for="middle_name">Отчество</label>
									<input type="text" id="middle_name" required>
								</div>
								<div class="flex_block">
									<label for="sex">Пол</label>
									<select id="sex" required>
										<option selected>Не определён</option>
										<option>Женский</option>
										<option>Мужской</option>
									</select>
								</div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<label for="cellphone">Мобильный телефон</label>
									<input type="text" id="cellphone" placeholder="+7(9__)___-__-__" pattern="+7(9[0-9]{2})[0-9]{3}-[0-9]{2}-[0-9]{2}">
								</div>
								<div class="flex_block">
									<label for="e-mail">Электронная почта</label>
									<input type="email" id="e-mail">
								</div>
								<div class="flex_block">
									<label for="birthday">Дата рождения</label>
									<input type="date" id="birthday">
								</div>
							</div>
							<div class="row flex_row">
							<div class="flex_block">
								<label for="place_of_residence">Регион проживания</label>
								<select id="place_of_residence">
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
							<div class="flex_row col col-lg-5 col-md-5" style="margin-top:0">
								<div class="flex_block">
									<label for="building">№ дома</label>
									<input type="text" id="building">
								</div>
								<div class="flex_block">
									<label for="apartment">Квартира</label>
									<input type="text" id="apartment">
								</div>
							</div>
						</div>
						<div class="row flex_row">
							<div class="flex_block">
								<label for="conf_curent_pass">Подтвердите текущий пароль</label>
								<input type="password" id="conf_curent_pass" placeholder="***" pattern="[A-Za-z0-9]{9,}" required>
							</div>
							<div class="flex_block">
								<p>Для внесения изменений в Ваш профиль необходимо ввести текущий пароль учетной записи личного кабинета.</p>
							</div>
						</div>
						<div class="row flex_row">
							<input type="reset" class="button button_submit" value="Очистить">
							<input type="submit" class="button button_submit" value="Сохранить">
						</div>
						</form>
					</div>
				</div>
				<div class="info_block">
					<h2>Изменение пароля</h2>
					<div class="box col-lg-10 col-md-10">
						<form action="" method="post" id="change_pass">
							<div class="row flex_row">
								<div class="flex_block">
									<label for="curent_pass">Текущий пароль</label>
									<input type="password" id="curent_pass" placeholder="***" pattern="[A-Za-z0-9]{9,}" required>
								</div>
								<div class="flex_block">
									<label for="new_pass">Новый пароль</label>
									<input type="password" id="new_pass" placeholder="***" pattern="[A-Za-z0-9]{9,}" required>
								</div>
								<div class="flex_block">
									<label for="rep_new_pass">Повторите новый пароль</label>
									<input type="password" id="rep_new_pass" placeholder="***" pattern="[A-Za-z0-9]{9,}" required>
								</div>
							</div>
							<div class="flex_row">
								<div class="flex_block">
									<p>Для смены пароля заполните все поля</p>
								</div>
							</div>
							<div class="row flex_row">
								<input type="reset" class="button button_submit" value="Очистить">
								<input type="submit" class="button button_submit" value="Сохранить">
							</div>
						</form>
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