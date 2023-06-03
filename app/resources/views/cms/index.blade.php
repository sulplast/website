@extends('cms.layouts.main')
@section('content')
	
	<div class="container mt-5">
		
		<div class="row">

				<!-- Sidebar -->
				@include('cms.partials.sidebar')
				
				<div class="col-xl-8">
					<div class="box">
						<h4 class="h4">Dashboard</h4>
						<hr>
						<a href="{{ url('inicio') }}" class="btn btn-success">Visualizar preview</a>
					</div>
				</div>
		</div>
	</div>

@endsection