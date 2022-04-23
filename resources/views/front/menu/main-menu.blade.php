
	<ul class="nav">
		@foreach($menu as $item)
			<li class="nav__item">
				<a href="{{$item->link}}">{{ $item->name }}</a>
			</li>
		@endforeach
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