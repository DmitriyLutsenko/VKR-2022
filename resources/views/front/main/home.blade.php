@extends('front.layout')

@section('title', 'Главная страница')
@section('seo-description', 'Магазин компьютерной техники. Огромный выбор компьютеров, ноутбуков и комплектующих.')

@section('header-slider')
<div class="slider">
			
	<div class="slider__list">

		<div class="slider__item">
			<img src="http://themes.diafan.ru/shopcomp/userfiles/bs/air_1.jpg" alt="">
		</div>
				
		<div class="slider__item">
			<img src="http://themes.diafan.ru/shopcomp/userfiles/bs/air_1_6.jpg" alt="">
		</div>	
	</div>

</div>
@endsection

@section('content')

	<div class="p-box p-box_slider">

		<h2 class="heading">Новинки интернет-магазина</h2>
			<div class="p-box__list">
				<div class="p-box p-box_catalog">
					<a href="http://themes.diafan.ru/shopcomp/shop/protsessory/-protsessor-intel-pentium-g2030-oem/" class="p-box__item">
								
						<span class="p-box__item__pic-wrap">
							<img 
								src="http://themes.diafan.ru/shopcomp/userfiles/shop/small/18_protsessorintelpentiumg203.jpg" 
								alt=" Процессор Intel Pentium G2030, OEM" 
								title=" Процессор Intel Pentium G2030, OEM" 
								class="p-box__item__pic"
									>
								</span>

								<span class="p-box__item__unit">
									<span class="p-box__item__title">Процессор Intel Pentium G2030, OEM</span>
								
									<span class="p-box__item__info">
										<p>3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>
									</span>

									<span class="rating rating_wh">
										<span class="js_rating_votes" module_name="shop" element_id="18" element_type="element">
											<span class="rating__item rating__item_active js_rating_votes_item"></span>
											<span class="rating__item rating__item_active js_rating_votes_item"></span>
											<span class="rating__item rating__item_active js_rating_votes_item"></span>
											<span class="rating__item rating__item_active js_rating_votes_item"></span>
											<span class="rating__item js_rating_votes_item"></span>
										</span>
									</span>

									<span class="p-box__item__price">2&nbsp;375 руб.</span>
								
								</span>
							</a>
						</div>
					</div>
				</div>

@endsection


@section('block-about')
<h2>О магазине</h2>
					
					<p>О магазине, услугах и прочая подобная информация будет написана на этой странице. Можно написать любой объем текста, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность. Лучше&nbsp;<b>выделить</b>&nbsp;какие-то значимые участки, текст можно&nbsp;<i>отформатировать</i>, как в Word, разместить таблицы, изображения и&nbsp;<a href="http://theme.diafantest.ru/">ссылки</a>&nbsp;на другие страницы.</p>
					<p>Чтобы отредактировать этот текст прямо на этой странице, нажмите "режим редактирования" на панели вверху страницы. Или иконку карандашика, чтобы перейти на редактирование этой страницы в административной панели.</p>
					<p><a href="http://themes.diafan.ru/shopcomp/o-magazine/" class="btn btn_box">Подробнее</a></p>
@endsection

@section('block-reviews')
				<div class="box box_right">
					<h2 class="heading">Отзывы</h2>
					<div class="box__crop">
						<ul class="box__list">
							<li class="box__item">
								<div class="box__item--item"><a href="http://themes.diafan.ru/shopcomp/faq/otzyvy-voprosy-i-otvety-budut-napisany-na-etoy-str3/" class="content">Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета...</a>
									<div class="box__item__info">31 января 2015 г.</div>
								</div>
								<div class="box__item--item"><a href="http://themes.diafan.ru/shopcomp/faq/otzyvy-voprosy-i-otvety-budut-napisany-na-etoy-str/" class="content">Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета...</a>
									<div class="box__item__info">04 января 2015 г.</div>
								</div>
							</li>
							<li class="box__item">
								<div class="box__item--item"><a href="http://themes.diafan.ru/shopcomp/faq/vyzvala-mastera-na-dom-dlya-diagnosti-noutbuka-pri/" class="content">Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета...</a>
									<div class="box__item__info">Олеся 03 января 2015 г.</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
@endsection