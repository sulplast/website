@if(Auth::check())
	<script src="https://cdn.tiny.cloud/1/zkau69nh8rm1ejeyts5q4gx4p8hxiohdcut35qeqfem3m9z0/tinymce/5/tinymce.min.js"></script>
	<script>
		var tinyConfig = {
		  selector: '.tiny-cms',
		  menubar: false, 
		  plugins: 'code autolink lists', 
		  inline: true,
		  toolbar: 'undo redo | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code'
		};

		tinymce.init(tinyConfig);
	</script>
@endif