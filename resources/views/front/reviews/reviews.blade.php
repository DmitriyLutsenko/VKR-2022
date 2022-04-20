@if(count($reviews) > 0)
<div class="box box_right">
	<h2 class="heading">Отзывы</h2>
	<div class="box__crop">
		<ul class="box__list">
			@foreach($reviews as $review)
			<li class="box__item">
				<div class="box__item--item">
					<a href="#" class="content">
						{!! $review->description !!}
					</a>
					<div class="box__item__info">{{ $review->author }} {{ $review->author }}</div>
					<div class="box__item__info">{{ date('d-m-Y', strtotime($review->created_at)) }}</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>
@endif