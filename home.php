<?php 
/**
	Template Name: Home
*/
?>

<?php get_header();?>

<section class="nav">
		<div class="container">
		<div class="menu-icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
					</div>
			<div class="row menu">
				<div class="col-lg-1">
					
				</div>
				<div class="col-lg-2">
					<a href="http://www.autoyuvelir.com.ua/#1">О нас</a>
				</div>
				<div class="col-lg-2">
					<a href="http://www.autoyuvelir.com.ua/#2">Отзывы</a>
				</div>
				<div class="col-lg-2">
					<a href="http://www.autoyuvelir.com.ua/#services">Услуги</a>
				</div>
				<div class="col-lg-2">
					<a href="http://www.autoyuvelir.com.ua/#footer">Контакты</a>
				</div>
				<div class="col-lg-2">
					<a href="avto">Авто в наличии</a>
				</div>
				<div class="col-lg-1">	
				</div>
			</div>
		</div>
	</section>
	<section class="slider">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/slide1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/slide1.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/slide1.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/slide1.jpg" alt="Fourth slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/slide1.jpg" alt="Fives slide">
				</div>
			</div>
		</div>
		<div class="containe">
			<div class="row">
					
					<?php echo do_shortcode( '[contact-form-7 id="42" title="хедер"]' ); ?>
			</div>
		</div>
	</section>
	<section class="advantages">
		<div class="container">
			<h2 id="1">Преимущества выбора нашей компании</h2>
			<div class="row">
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/car.png" alt="car">
					<p>Мы несем отвественность<br>  за достоверность информации</p>
					<p>
						Вы приобретаете автомобиль<br> без кредитных и залоговых<br>обязательств, запрета на регистрацию<br> и других ограничений
					</p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/man.png" alt="man">
					<p>Большой опыт работы на рынке<br>  практически во всех напралениях</p>
					<p>
						Мы выполняем работу быстро<br> и качественно. Отзывы довольных<br> клиентов и большой опыт<br> работы - главные показатели<br> качества нашей работы.
					</p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/money.png" alt="money">
					<p>Гарантия 100% возврата денег</p>
					<p>
						Если мы не сможем выполнить все<br> условия сделки, то вернем<br> предоплату в полном объеме.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="services" id="services">
		<h1>Наши услуги<h1>
		<div class="container">
			<div class="row">
				<?php render_services();?>
			</div>
		</div>
	</section>
	<section class="why">
	<h2>Почему стоит обратиться именно к нам</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/porsche.png" alt="">
					<p><strong>Индивидуальный подход</strong><br><span>Подберем автомобиль учитывая<br> все ваши желания и потребности</span></p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/rubin.png" alt="">
					<p><strong>Профессионализм</strong><br><span>Мы постоянно совершенствуем свои навыки <br>и проводим осмотр автомобилей с <br>использованием профессионального оборудования</span></p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/people.png" alt="">
					<p><strong>Без перекупщиков</strong><br><span>Работаем только с частными продавцами,<br>что позволяет находить отличные автомобили</span></p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/finger.png" alt="">
					<p><strong>Удобство</strong><br><span>Никаких больше изнурительных поездок<br>заведомо дефектных авто</span></p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/check.png" alt="">
					<p><strong>Строгая отчетность</strong><br><span>Составляем экспертное заключение с занесением <br>в него всех обнаруженных дефектов <br>и неисправностей</span></p>
				</div>
				<div class="col-lg-4">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/watch.png" alt="">
					<p><strong>Экономия времени</strong><br><span>Вы не тратите лишнего времени на поиск <br>объявлений и взаимодействие с продавцами</span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="comment" id="2">
		<div class="container">
			<h2>Отзывы наших клиентов</h2>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
						<div class="w-100 row">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5">
								<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/comment1.png" alt="comment">
							</div>
							<div class="col-lg-1">
							</div>
							<div class="col-lg-3">
								<h2>Александр</h2>
								<span>Toyota Tundra 2014 г.в.</span>
								<p>Задача:<strong>продать автомобиль до 29 000 $</strong> </p>
								<p>Результат:<strong> автомобиль был продан стоимостью 30 000$, за 15 дней</strong></p>
							</div>
						</div>
				</div>
				<div class="carousel-item">
						<div class="w-100 row">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5">
								<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/comment1.png" alt="comment">
							</div>
							<div class="col-lg-1">
							</div>
							<div class="col-lg-3">
								<h2>Александр</h2>
								<span>Toyota Tundra 2014 г.в.</span>
								<p>Задача:<strong>продать автомобиль до 29 000 $</strong> </p>
								<p>Результат:<strong> автомобиль был продан стоимостью 30 000$, за 15 дней</strong></p>
							</div>
						</div>
				</div>
				<div class="carousel-item">
						<div class="w-100 row">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5">
								<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/comment1.png" alt="comment">
							</div>
							<div class="col-lg-1">
							</div>
							<div class="col-lg-3">
								<h2>Александр</h2>
								<span>Toyota Tundra 2014 г.в.</span>
								<p>Задача:<strong>продать автомобиль до 29 000 $</strong> </p>
								<p>Результат:<strong> автомобиль был продан стоимостью 30 000$, за 15 дней</strong></p>
							</div>
						</div>
				</div>
				<div class="carousel-item">
						<div class="w-100 row">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5">
								<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/comment1.png" alt="comment">
							</div>
							<div class="col-lg-1">
							</div>
							<div class="col-lg-3">
								<h2>Александр</h2>
								<span>Toyota Tundra 2014 г.в.</span>
								<p>Задача:<strong>продать автомобиль до 29 000 $</strong> </p>
								<p>Результат:<strong> автомобиль был продан стоимостью 30 000$, за 15 дней</strong></p>
							</div>
						</div>
				</div>
				<div class="carousel-item">
						<div class="w-100 row">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5">
								<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/comment1.png" alt="comment">
							</div>
							<div class="col-lg-1">
							</div>
							<div class="col-lg-3">
								<h2>Александр</h2>
								<span>Toyota Tundra 2014 г.в.</span>
								<p>Задача:<strong>продать автомобиль до 29 000 $</strong> </p>
								<p>Результат:<strong> автомобиль был продан стоимостью 30 000$, за 15 дней</strong></p>
							</div>
						</div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			
			<a href="#zayav" class="butt">Хочу так же!</a>
		</div>	
	</section>
	<section class="risk">
		<div class="container">
			<h2><span>Чем Вы рискуете</span><br>при самостоятельной покупке автомобиля</h2>
			<div class="row">
				<div class="col-lg-1">
				</div>
				<div class="col-lg-4">
					<h2 class="heart">Здоровьем</h2>
					<p>
						Автомобиль, побывавший в <br>серьезном ДТП, может Вас уже не <br>спасти. Поэтому экономия пары <br>тысяч рублей на проверке может <br>обойтись слишком дорого.
					</p>
				</div>
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<h2 class="time">Временем</h2>
					<p>
						Дни и часы, проведенные в автосервисе <br>во время ремонта приобретенного <br>автомобиля с дефектами или судебные <br>разбирательтва с обременением <br>на автомобиле.
					</p>
				</div>
				<div class="col-lg-1">
				</div>
				
				<div class="col-lg-1">
				</div>
				<div class="col-lg-4">
					<h2 class="money">Деньгами</h2>
					<p>
						Потраченными на ремонт скрытых <br>дефектов и неисправностей или <br>оплата налога на автомобиль, <br>который не платил владелец, а Вы <br>не сможете снять авто с учета, пока <br>он не будет оплачен.
					</p>
				</div>
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<h2 class="smile">Нервами</h2>
					<p>
						Попытки вернуть неисправный <br>автомобиль в салон или сделать <br>что-то по «липовой» гарантии — <br>довольно стрессовое состояние. <br>К тому же — малоперспективное.
					</p>
				
				</div>
				<div class="col-lg-1">
				</div>
			</div>
		</div>
	</section>
	<section class="price">
		<h2>Расчитайте стоимость  вашего авто</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-11">
						<?php echo do_shortcode( '[contact-form-7 id="43" title="Футер"]' ); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="map">
		<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1077.6610903231876!2d36.32315059336604!3d50.02776341618622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a76f690d955d%3A0xb82b3a345f54de92!2z0LLRg9C70LjRhtGPINCT0LXRgNC-0ZfQsiDQn9GA0LDRhtGWLCAy0JMsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1suk!2sua!4v1541536633213" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="met">
				<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/11/met.png"alt="metka">
			<div>
		</div>
	</section>
	<section class="zayav" id="zayav">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<img src="http://www.autoyuvelir.com.ua/wp-content/uploads/2018/09/zayav.png">
				</div>
				<?php echo do_shortcode( '[contact-form-7 id="44" title="ффф"]' ); ?>
			
			</div>
		</div>
	</section>
	
<?php get_footer();?>	