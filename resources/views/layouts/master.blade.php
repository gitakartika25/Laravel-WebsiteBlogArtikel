<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Bagian HEADER</h1>

@section('sidebar')
Ini adalah master sidebar
@show

<div class="container">
	@yield('konten')
</div>

<h1>Bagian FOOTER</h1>

</body>
</html>