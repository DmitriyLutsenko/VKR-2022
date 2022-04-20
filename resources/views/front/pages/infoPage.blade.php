@extends('front.layout')

@section('title', 'Главная страница')
@section('seo-description', 'Магазин компьютерной техники. Огромный выбор компьютеров, ноутбуков и комплектующих.')

@section('content')
	@if(strlen($infoPage->h1))
		<h1>{{ $infoPage->h1 }}</h1>
	@endif

	@if(strlen($infoPage->description))
		<div class="content">
			{!! $infoPage->description !!}
		</div>
	@endif
@endsection