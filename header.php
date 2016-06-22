<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ibike.by</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="wrapper">
	<header>
		<div class="container-fluid head-top-line">
			<nav class=" container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-line"
					        aria-expanded="false">
						<span class="sr-only">Навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="top-line">
					<ul class="nav navbar-nav navbar-right nav-kab">
						<li><a href="#" title="Авторизация">Авторизация</a></li>
						<li><a href="#" title="Регистрация">Регистрация</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right line-menu">
						<li><a href="#" title="Отзывы">Отзывы</a></li>
						<li><a href="#" title="О нас">О нас</a></li>
						<li><a href="#" title="Блог">Блог <sup>2</sup></a></li>
						<li><a href="#" title="Новости">Новости <sup>5</sup></a></li>
						<li><a href="#" title="Команда">Команда</a></li>
						<li><a href="#" title="Контакты">Контакты</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="head container">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-6">
					<a href="/" class="logo" title="ibike.by"><img src="/img/logo.jpg" alt="ibike.by"></a>
				</div>
				<div class="col-md-3  col-sm-6">
					<div class="block-search">
						<form action="#" class="form-search">
							<input type="text" class="field-search">
							<input type="submit" class="field-send">
						</form>
					</div>
					<div class="block-workTime">
						Режим работы: с 11.00 до 20.00, <span>Пн - выходной</span>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-lg-5 col-md-3 col-sm-8">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-6">
							<div class="block-phone">
								<a href="tel:80447737374">8 (044)<span>773-73-74</span></a>
								<a href="tel:80336373730">8 (033)<span>637-37-30</span></a>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 visible-lg-block visible-sm">
							<div class="block-contact">
								<a href="#map" class="adres">г.Минск, ул.Кузьмы Чорного 8</a>
								<a href="mileto:bmxdelo@gmail.com" class="mail">bmxdelo@gmail.com</a>
								<a href="skype:ibike.by?chat" class="skype">ibike.by</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<div class="dropdown block-miniCart">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span>Товаров: 0 шт</span>
							<span>на сумму: 0 руб</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownCart">
							<span class="empty">Ваша корзина пуста</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-top container-fluid">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="menu-top">
					<ul class="nav navbar-nav">
						<li class="item "><a href="/">Главная</a></li>
						<li class="item "><a href="/catalog.php">Велосипеды</a></li>
						<li class="item active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BMX</a>
						<div class="dropdown-menu dropdown-menu-left">
							<div class="container">
								<div class="row">
									<div class="col-lg-2">
										<div class="title">BMX в СБОРЕ</div>
									</div>
									<div class="col-lg-8">
										<div class="title">Запчасти BMX</div>
										<div class="row">
											<ul class="dropdown-menu-level2">
												<li><a href="#">Баренды</a></li>
												<li><a href="#">Вилки</a></li>
												<li><a href="#">Втулки передние</a></li>
												<li><a href="#">Втулки задние</a></li>
												<li><a href="#">Выноса</a></li>
												<li><a href="#">Грипсы</a></li>
											</ul>
											<ul class="dropdown-menu-level2">
												<li><a href="#">Запчасти для втулок</a></li>
												<li class="active"><a href="#">Звёзды </a></li>
												<li><a href="#">Камеры и ободные ленты</a></li>
												<li><a href="#">Каретки</a></li>
												<li><a href="#">Колёса</a></li>
											</ul>
											<ul class="dropdown-menu-level2">
												<li><a href="#">Обода</a></li>
												<li><a href="#">Пеги</a></li>
												<li><a href="#">Педали</a></li>
												<li><a href="#">Подседельные зажимы</a></li>
												<li><a href="#">Подседельные штыри</a></li>
												<li><a href="#">Покрышки</a></li>
											</ul>
											<ul class="dropdown-menu-level2">
												<li><a href="#">Цепи</a></li>
												<li><a href="#">Шатуны</a></li>
												<li><a href="#">Рамы</a></li>
												<li><a href="#">Рулевые</a></li>
												<li><a href="#">Рули</a></li>
												<li><a href="#">Сёдла</a></li>
											</ul>
											<ul class="dropdown-menu-level2">
												<li><a href="#">Спицы</a></li>
												<li><a href="#">Хабгарды</a></li>
											</ul>	
										</div>
										
									</div>
									<div class="col-lg-2">
										<div class="title">Bmx звезда United Metro</div>
									</div>
								</div>
							</div>
						</div>
						</li>
						<li class="item "><a href="/product.php">Трюковые самокаты</a></li>
						<li class="item "><a href="#">Защита</a></li>
						<li class="item "><a href="#">аксессуары</a></li>
						<li class="item "><a href="#">Бренды</a></li>
						<li class="item sale"><a href="#">Скидки</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="content-wrapper">


