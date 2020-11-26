<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
	table {
            width: 100%;
            border-collapse: collapse;
        }
	table tr td,
	table tr th{
	font-size: 9pt;
	padding: 5px 8px;
    margin: auto;
	}
	</style>
	<center>
	<h5>Laporan Artikel</h4>
	</center>
		<table class='table table-bordered'>
		<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Konten</th>
			<th>Gambar</th>
		</tr>
		</thead>
		<tbody>
		 @if($article->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Data kosong</td>
                </tr>
                @else
                <?php $count = 0; ?>
                @foreach($article as $art)
                <tr>
                    <td>{{ $art->id }}</td>
                    <td>{{$art->title}}</td>
                    <td>{{$art->content}}</td>
                    <td>
                        <img src="{{ public_path('storage/'.$art->featured_image) }}" alt="$art->featured_image" width="50" height="50">
                    </td>
                    
                </tr>
                <?php $count++; ?>
                @endforeach
                <tr>
                    <th colspan="3">Total</th>
                    <td>{{ $count }}</td>
                </tr>
                @endif
		</tbody>
		</table>
</body>
</html>