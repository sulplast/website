<div class="sp-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if (count($breadcrumbs))

				    <ol class="breadcrumb">
				        @foreach ($breadcrumbs as $breadcrumb)

				            @if ($breadcrumb->url && !$loop->last)
				                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
				            @else
				                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
				            @endif

				        @endforeach
				    </ol>

				@endif
			</div>
		</div>
	</div>
</div>


