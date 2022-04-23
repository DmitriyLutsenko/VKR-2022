<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
	<meta content="Russian" name="language">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	@hasSection('title')
		<title>@yield('title') — Магазин компьютерной техники</title>
	@else
		<title>Страница сайта — Магазин компьютерной техники</title>
	@endif

	@hasSection('seo-description')
		<meta name="description" content="@yield('seo-description')">
	@endif

	<link href="/css/main.css" rel="stylesheet" type="text/css">
	<link href="/css/colors.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div id="wrapper">
		

		<div class="order-btn"></div>
		<header class="header">
			<nav class="header__center">
				<a href="/" class="logo">
					<span class="logo__in">
						<center>
							<font size="5"><b>ВСЕ ДЛЯ КОМПЬЮТЕРА</b></font>
						</center>
					</span>
				</a>

				<x-main-menu></x-main-menu>

			<ul class="nav">
{{--
			<li class="nav__item">
				<a href="http://themes.diafan.ru/shopcomp/shop/">Каталог продукции</a>
				<ul class="nav__popup">
					<li class="nav__popup__item">
						<a href="http://themes.diafan.ru/shopcomp/shop/protsessory/">Процессоры</a>
					</li>		
				</ul>
			</li>
--}}
	</ul>

				<div class="tel">+7 999-999-99-99
					<br>
				</div>
				<div class="basket">
					<a href="#" class="basket__link"></a> <span id="show_cart" class="js_show_cart"></span></div>
			</nav>
		</header>





		<form method="POST" enctype="multipart/form-data" action="" class="ajax js_bs_form bs_form">
			<input type="hidden" name="module" value="bs">
			<input type="hidden" name="action" value="click">
			<input type="hidden" name="banner_id" value="0">
		</form>
<!--Секция Слайдера-->
	
		@hasSection('header-slider')
			@yield('header-slider')
		@endif
<!--Секция Слайдера-->

		<div class="wrap">
			<div class="wrap__center">

				@yield('content')

				@hasSection('block-about')
				<div class="box box_about">
					@yield('block-about')
				</div>
				@endif

				@hasSection('block-reviews')

					@yield('block-reviews')

				@endif

			</div>
		</div>
		<div class="footer">
			<div class="footer__center">
				<div class="footer__menu"><a href="http://themes.diafan.ru/shopcomp/o-magazine/" class="footer__menu__link">О магазине</a><a href="http://themes.diafan.ru/shopcomp/shop/" class="footer__menu__link">Каталог продукции</a><a href="http://themes.diafan.ru/shopcomp/dostavka-i-oplata/" class="footer__menu__link">Доставка и оплата</a><a href="http://themes.diafan.ru/shopcomp/faq/" class="footer__menu__link">Отзывы</a><a href="http://themes.diafan.ru/shopcomp/kontakty/" class="footer__menu__link">Контакты</a></div>
				<div class="tel">+7 8352 12-11-22
					<br>
					<div class="tel__info">08:00-20:00</div>
				</div>
				<div class="footer__unit">
					<div class="footer__copy">© 2014 - 2022 гг. Все для компьютера —
						<br>Комплектующие для компьютеров</div>
					<div class="search">
						<form action="http://themes.diafan.ru/shopcomp/search/" class="search_form">
							<input type="hidden" name="module" value="search">
							<input name="searchword" placeholder="Поиск по сайту" class="input_search">
							<button type="submit" value="" class="search_sumbit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="soc">
						<a href="#" class="soc__item fa-vk"></a>
						<a href="#" class="soc__item fa-facebook"></a>
						<a href="#" class="soc__item fa-twitter"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="feedback_form pp-order">
			<h3 class="heading">Консультация</h3>
			<form method="POST" enctype="multipart/form-data" action="" class="ajax">
				<input type="hidden" name="module" value="feedback">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="form_tag" value="feedback9f5dd08f91d27659e0ae29770801d5a7">
				<input type="hidden" name="site_id" value="7">
				<input type="hidden" name="tmpcode" value="605ff764c617d3cd28dbbdd72be8f9a2">
				<div class="feedback_form_param1">
					<input name="p1" class="field" placeholder="Ваше имя">
				</div>
				<div class="errors error_p1" style="display:none"></div>
				<div class="feedback_form_param6">
					<input name="p6" class="field" placeholder="Ваш телефон">
				</div>
				<div class="errors error_p6" style="display:none"></div>
				<div class="feedback_form_param3">
					<textarea name="p3" class="textarea" placeholder="Ваше сообщение" cols="66" rows="10"></textarea>
				</div>
				<div class="errors error_p3" style="display:none"></div>
				<button type="submit" class="btn btn_order">Отправить</button>
				<button type="button" class="btn btn_close">Отмена</button>
			</form>
			<div class="errors error" style="display:none"></div>
		</div>
	</div>
	<!--[if lt IE 9]><script src="//yandex.st/jquery/1.10.2/jquery.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="//yandex.st/jquery/2.0.3/jquery.min.js" charset="UTF-8">
	<
	</script>
	<!--<![endif]-->
	<script type="text/javascript" src="//yandex.st/jquery/form/3.14/jquery.form.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="//yandex.st/jquery-ui/1.10.3/jquery-ui.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/timepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/jquery.scrollTo.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/jquery.maskedinput.js" charset="UTF-8"></script>
	<script src="/js/jquery.bd.move.slider.js"></script>
	<script src="/js/main.js"></script>
</body>

</html>