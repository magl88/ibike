<?php include "header.php" ?>
	<div class="container block-breadcrumb">
		<ul>
			<li><a href="/">Главная</a>→</li>
			<li><a href="#">Велосипеды</a>→</li>
			<li><span>Запчасти к велосипедам</span></li>
		</ul>
	</div>
	<div class="container page-catalog">
		<div class="col-lg-3">
			<div class="">
				<nav class="block-catalog-nav navmenu navmenu-default" role="navigation">
					<a class="navmenu-brand" href="#">Название</a>
					<ul class="nav navmenu-nav">
						<li class="active"><a href="#">Пункт 1</a></li>
						<li><a href="#">Пункт 2</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 3 <b class="caret"></b></a>
							<ul class="dropdown-menu navmenu-nav" role="menu">
								<li><a href="#">Пункт 3.1</a></li>
								<li><a href="#">Пункт 3.2</a>
									<ul class="dropdown-menu navmenu-nav" role="menu">
										<li><a href="#">Пункт 3.1</a></li>
										<li><a href="#">Пункт 3.2</a></li>
										<li><a href="#">Пункт 3.3</a></li>
										<li><a href="#">Пункт 3.4</a></li>
									</ul>
								</li>
								<li><a href="#">Пункт 3.3</a></li>
								<li><a href="#">Пункт 3.4</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-lg-9 main-catalog">
			<div class="row block-sort">
				<div class="col-xs-12">
					<div class="sort-by">
						<span>СортироВАТЬ ПО: </span>
						<ul>
							<li><a href="#">цене</a></li>
							<li class="active"><a href="#">новизне</a></li>
							<li><a href="#">названию</a></li>
							<li><a href="#">скидке</a></li>
							<li><a href="#">весу</a></li>
						</ul>
					</div>
					<div class="page-by hidden-xs">Страница: 1 из 45</div>
				</div>
				<div class="col-xs-12">
					<div class="filter-by">
					<span>Фильтр по товарам:</span>
						<ul>
							<li><select name="select1" id="select1">
									<option selected value="0">пол</option>
									<option value="1">М</option>
									<option value="2">Ж</option>
								</select></li>
							<li><select name="select2" id="select2">
									<option selected value="0">бренд</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select></li>
							<li><select name="select3" id="select3">
									<option selected value="0">цена</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select></li>
							<li><select name="select4" id="select4">
									<option selected value="0">сезон</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select></li>
							<li><select name="select5" id="select5">
									<option selected value="0">размер</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select></li>
							<li><select name="select6" id="select6">
									<option selected value="0">цвет</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title-page">Запчасти к велосипедам</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<span class="sale ilabel">скидка</span>
						<div class="name"><a href="#">Набор ключей SALT PRO</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-1.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
							<div class="price-off">Цена: 145 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">Bmx звезда United Metro</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-2.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<span class="new ilabel">новинка</span>
						<div class="name"><a href="#">BMX велосипед WeThePeople Curse </a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-3.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX велосипед WeThePeople Curse </a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-3.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX втулка Eclat Dynamic.</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-4.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">

						<div class="name"><a href="#">BMX велосипед WeThePeople Curse</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-5.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">Bmx звезда United Metro</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-2.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX велосипед WeThePeople Curse</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-3.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX втулка Eclat Dynamic.</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-1.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">Bmx звезда United Metro</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-2.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX велосипед WeThePeople Curse</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-1.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="name"><a href="#">BMX вилка Eclat Stevie</a></div>
						<div class="img-wrap">
							<a href="#"><img src="/images/product/prod-1.jpg" alt="prod"></a>
						</div>
						<div class="price-wrap">
							<div class="price">Цена: 100 000 руб</div>
						</div>
						<div class="buy"><a href="#">Подробнее</a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="block-prod-pager">
						<div class="btn-wrap">
							<a href="#" class="btn-all">Все товары</a>
						</div>
						<div class="pager-wrap">
							<ul >
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><span>...</span></li>
								<li><a href="#">12</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container block-soc">
		<div class="title">Мы в соцсетях</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<img src="/images/block-vk.png" alt="vk">
			</div>
			<div class="col-lg-3 col-sm-6">
				<img src="/images/block-fb-gp.png" alt="fb">
			</div>
			<div class="col-lg-3 col-sm-6">
				<img src="/images/block-tw.png" alt="tw">
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="block-submit">
					<div class="text">Подпишись и получи подарок а также учавствуй в акциях</div>
					<form action="#">
						<input type="email" class="field-mail" placeholder="Адрес электронной почты">
						<input type="submit" class="field-submit" value="Подписаться">
					</form>
					<span>Вы можете отписаться в любой момент</span>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php" ?>