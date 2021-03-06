<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Регистрация в Личном кабинете</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="back_sign" id="main">
	<header class="col-xs-12">
		<img src="img/logo.png" id="logo">
	</header>
	<main class="col-xs-12">
		<div class="row" style="margin-top:7%">
			<div class="col-lg-push-2 col-lg-8 col-md-9 col-md-push-1 sign_in">
				<div class="sign_in_box">
					<h3>Регистрация</h3>
					<form method="post" action="settings.php">
						<div class="flex_col">
							<div class="row flex_row">
								<div class="flex_block">
									<label for="login">Электронная почта или мобильный телефон<span>*</span></label>
									<input type="text" id="login" placeholder="e-mail или мобильный телефон" required>
								</div>
								<div class="flex_block">
									<p>Введите адрес электронной почты, к которой у Вас есть доступ, или Ваш номер мобильного телефона</p>
								</div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<label for="pass">Пароль<span>*</span></label>
									<input type="text" id="pass" placeholder="***" pattern="[A-Za-z0-9]{9,}" required>
								</div>
								<div class="flex_block">
									<p>Пароль должен содержать не менее 9 символов, включающих в себя: латинские буквы нижнего (a..z) или верхнего (A..Z) регистров, цифры (0..9).</p>
								</div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<label for="acc_number">Номер лицевого счёта<span>*</span></label>
									<input type="text" id="acc_number" placeholder="НЛС" required>
								</div>
								<div class="flex_block">
									<p>Для регистрации в личном кабинете введите номер существующего личного счёта, к которому не привязан аккаунт личного кабинета.</p>
								</div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<label for="place_of_residence">Регион проживания<span>*</span></label>
									<select id="place_of_residence" required>
										<option selected disabled>Выберите из списка</option>
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
								<div class="flex_block"></div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<p><span>*</span>Поля, обязательные для заполения</p>
								</div>
								<div class="flex_block">
								</div>
							</div>
							<div class="row flex_row">
								<div class="flex_block">
									<input type="button" class="button button_submit" value="Отмена" onclick="location.href='sign_in.php'">
								</div>
								<div class="flex_block">
									<input type="submit" class="button button_submit" value="Продолжить">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
</body>

</html>