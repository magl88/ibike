<?php include "header.php" ?>
	<div class="container block-breadcrumb">
		<ul>
			<li><a href="/">Главная</a> →</li>
			<li><span>Контакты</span></li>
		</ul>
	</div>
	<div class="container main-page">
		<div class="row">
			<div class="col-xs-12"><h1 class="title-page">Контакты</h1></div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-sm-6">
						<div class="box-cont box-phone">
							<strong>Телефоны</strong>
							8 (044) 773-73-74 <br>
							8 (044) 773-73-74
						</div>
						<div class="box-cont box-grafik">
							<strong>График работы</strong>
							Пн.–Пт.: с 10:00 до 21:00 <br>
							без выходных
						</div>
					</div>
					<div class="col-sm-6">
						<div class="box-cont box-mail">
							<strong>Почта</strong>
							<a href="mailto:bmxdelo@gmail.com">bmxdelo@gmail.com</a>
						</div>
						<div class="box-cont box-skype">
							<strong>Скайп</strong>
							<a href="skype:ibike.by?chat">ibike.by</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="rowss block-contactForm">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div class="title">Форма обратной связи</div>
						</div>
						<div class="col-sm-2"></div>
					</div>
					<form action="#">
						<div class="row field-row">
							<div class="col-sm-2"><label for="fname" class="fname">Ваше имя</label></div>
							<div class="col-sm-8"><input type="text" id="fname"></div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row field-row">
							<div class="col-sm-2"><label for="fmail" class="fmail">Ваша почта</label></div>
							<div class="col-sm-8"><input type="email" id="fmail"></div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row field-row">
							<div class="col-sm-2"><label for="ftext" class="ftext">Ваш вопрос</label></div>
							<div class="col-sm-8"><textarea id="ftext"></textarea></div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row field-row">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<img src="/images/capch.jpg" alt="capch">
							</div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row field-row">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<input type="submit" class="btn btn-send" value="Отправить">
							</div>
							<div class="col-sm-2"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="block-map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=OCpG-Epbfr5Pup7JY_qj_oYt1SfiycE2&width=100%&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>
	</div>
<?php include "footer.php" ?>