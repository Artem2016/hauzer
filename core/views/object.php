<main>
		<section class="catalog-wrap">
			<div class="catalog-info-wrap disp">
				<div class="catalog-wrap-head">
					<h1><?=$data[0]['city'] ?> <?=$data[0]['district'] ?></h1>
					<h2><?=$data[0]['price'] ?></h2>
				</div>
				<p><?=$data[0]['basic_description'] ?></p>
				<table>
					<caption>Характеристика</caption>
					<tr class="tr-back">
						<td>Адресс:</td>
						<td>г.<?=$data[0]['city'] ?> ул. <?=$data[0]['street'] ?> <?=$data[0]['house_number'] ?> кв <?=$data[0]['apartament_number'] ?></td>
					</tr>
					<tr>
						<td>Стоимость за 1кв.м:</td>
						<td><?=$data[0]['square_meter'] ?> грн.</td>
					</tr>
					<tr class="tr-back">
						<td>Количество комнат:</td>
						<td><?=$data[0]['rooms'] ?></td>
					</tr>
					<tr>
						<td>Общая площадь:</td>
						<td><?=$data[0]['total_area'] ?> кв.м</td>
					</tr>
					<tr class="tr-back">
						<td>Жилая площадь:</td>
						<td><?=$data[0]['area'] ?> кв.м</td>
					</tr>
				</table>
			</div>
			<div class="catalog-img-wrap">
				<div class="catalog-imgg slider-nav">
					<div onClick='opendialog()'><img src="/assets/img/5.jpg"></div>
					<div onClick='opendialog()'><img src="/assets/img/3.jpg"></div>
					<div onClick='opendialog()'><img src="/assets/img/4.jpg"></div>
				</div>
			</div>
			<div class="back-dialog" id="dialog">
					<div class="dialog-content">
						<div class="dialog-title">
							<span>Город улица дом</span>
							<a class="close-dialog" href="javascript: closedialog()"></a>
						</div>
						<div class="catalog-imgg1">
							<div><img src="/assets/img/5.jpg"></div>
							<div><img src="/assets/img/3.jpg"></div>
							<div><img src="/assets/img/4.jpg"></div>
						</div>
					</div>
				</div>
			<p class="catalog-info"><?=$data[0]['descriptione'] ?>m</p>
		</div>
		<div id="map_canvas"></div>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68788216694!2d30.252507167568886!3d50.40169903727238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LI!5e0!3m2!1sru!2sua!4v1479848168391" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
	</section>
	<section class="info-nas">
		<h1>Почему выберают нас?</h1>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo1.png">
			<p>Вы отправляете нам заявку, мы свяжемся с Вами в ближайшее время и уточняем критерии поиска</p>
		</div>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo2.png">
			<p>Быстро и качественно подбираем Вам квартиру согласна Вашим требованиям и пожеланиям</p>
		</div>
		<div class="info-nas-vib disp">
			<img src="/assets/img/images_content/cnlogo4.png">
			<p>Если Вас всё устраивает, мы берём на себя процедуру оформления документов аренды</p>
		</div>
	</section>
	<section class="reg">
		<h1>Почему выбирают нас?</h1>
		<p>Узнайте о всех специальных предложениях и акциях нашей компании</p>
		<form class="reg-form">
			<input type="text" name="name" placeholder="Ваше имя	"></input>
			<input type="tel" name="tel" placeholder="Ваш телефон"></input>
			<input type="email" name="email" placeholder="Ваш E-mail"></input>
			<button class="butt">Отправить</button>
		</form>
	</section>
	<section class="info-agent">
		<h2>Информация об агенете</h2>
		<img class="disp" src="/assets/img/img_agents/2.png">
		<div class="info disp">
			<h3>Вини Мишка Медведев</h3>
			<p>тел: 000-000-00-00</p>
			<p>mail: mail@mail.ru</p>
			<p>Агент по недвижемости ООО"HOUZER"</p>
		</div>
		<P>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</P>
	</section>

	</main>
