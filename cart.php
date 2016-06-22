<?php include "header.php" ?>
	<div class="container block-breadcrumb">
		<ul>
			<li><a href="/">Главная</a> →</li>
			<li><span>Корзина</span></li>
		</ul>
	</div>
	<div class="container cart-page">
		<div class="row">
			<div class="col-xs-12"><h1 class="title-page">Корзина товаров</h1></div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="block-checkout">
					<form action="#" class="form-checkout">
						<div class="table-responsive">
							<table class="table table-checkout">
								<thead>
								<tr>
									<td width="180">Товары</td>
									<td>Название</td>
									<td align="center" width="160">Количество</td>
									<td>Скидка</td>
									<td>Сумма</td>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="img-wrap no-img"></div>
									</td>
									<td>
										<a href="#" class="name">Набор ключей SALT PRO</a>
									</td>
									<td>
										<div class="number">
											<span class="minus">-</span>
											<input type="text" value="1"/>
											<span class="plus">+</span>
										</div>
									</td>
									<td>
										<span class="sale">145 000 руб</span>
									</td>
									<td>
										<div class="price">100 000 руб</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img-wrap"><img src="/images/cart-1.jpg" alt="img"></div>
									</td>
									<td>
										<a href="#" class="name">Набор ключей SALT PRO</a>
									</td>
									<td>
										<div class="number">
											<span class="minus">-</span>
											<input type="text" value="1"/>
											<span class="plus">+</span>
										</div>
									</td>
									<td>
										<span>0 руб</span>
									</td>
									<td>
										<div class="price">100 000 руб</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img-wrap"><img src="/images/cart-2.jpg" alt="img"></div>
									</td>
									<td>
										<a href="#" class="name">Набор ключей SALT PRO</a>
									</td>
									<td>
										<div class="number">
											<span class="minus">-</span>
											<input type="text" value="1"/>
											<span class="plus">+</span>
										</div>
									</td>
									<td>
										<span>0 руб</span>
									</td>
									<td>
										<div class="price">100 000 руб</div>
									</td>
								</tr>
								</tbody>
								<tfoot>
								<tr class="tr-title">
									<td colspan="5" align="right">Общая сумма</td>
								</tr>
								<tr>
									<td colspan="5" align="right">122 000 руб</td>
								</tr>
								</tfoot>
							</table>
						</div>
						<div class="box-buy">
							<div class="field-cupon">
								<label for="fcupon">Использовать купон</label>
								<input type="text" id="fcupon">
							</div>
							<div class="field-itog">
								Итото без доставки: <span>122 000 руб</span>
							</div>
							<div class="field-send">
								<input class="btn" type="submit" value="Оформить">
							</div>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row block-staticInfo">
					<div class="col-md-12 col-sm-4">
						<div class="box-oplata">
							<div class="block-title">Оплата</div>
							<ul>
								<li>Наличными</li>
								<li>Картой</li>
								<li>Безналичный расчет</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 col-sm-4">
						<div class="box-dostavks">
							<div class="block-title">Доставка товара</div>
							<ul>
								<li>Курьером по Минску в течении дня.</li>
								<li>По Беларуси в течении 2-3 дней по тарифам РУП Белпочта.</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 col-sm-4">
						<div class="box-garant">
							<div class="block-title">Гарантия</div>
							<span>Мы гарантируем, что вернем вам деньги за товар в течение 14 дней, если вы обнаружили брак.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php" ?>