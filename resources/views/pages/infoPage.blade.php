	
	@if(strlen($infoPage->h1))
		<h1>{{ $infoPage->h1 }}</h1>
	@endif

	@if(strlen($infoPage->description))
		<div class="content">
			{!! $infoPage->description !!}
		</div>
	@endif