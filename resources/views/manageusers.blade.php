<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
</head>
<body>
<!--  -->
 <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola User</h1>
    </div>

    <div class="starter-template" style="margin-bottom: 15px;">
        <a href="{{ route('home_uts') }}" class="btn btn-outline-info">< Kembali ke Halaman Utama</a>
    </div>
    
    <a href="users/register" class="btn btn-primary">Tambah Data</a><br><br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tgl gabung</th>
                <th scope="col">Role</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user AS $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->created_at }}</td>
                <td>{{ $a->roles }}</td>
                <td><a href="users/editUser/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="users/dropUser/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Hapus User  `{{ $a->name }}`')">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>