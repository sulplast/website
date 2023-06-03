<div class="col-xl-4">
	<div class="box">
		<h4 class="box-title">Navegação</h4>
		<p class="text-muted">Navega através das páginas para editar as informações.</p>
		<hr>
		<ul>
			@foreach ($paginas as $pagina)
			<li><a href="#">{{ $pagina->titulo }}</a>

				@if (count($pagina->paginas))
				<ul style="margin-top: -10px;">
					@foreach ($pagina->paginas as $s)
					<li><a class="sub" href="#">{{ $s->titulo }}</a></li>
					@endforeach
				</ul>
				@endif

			</li>

			@endforeach
		</ul>
	</div>
</div>