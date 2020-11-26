<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Tambah User</h3><br>
        <a href="{{ route('manageusers') }}" class="btn btn-outline-info">< Kembali ke Kelola User</a>
    </div>

    <form action="/users/createUser" method="POST"  enctype="multipart/form-data" class="clearfix">
        @csrf
        <div class="form-group">
            <label for="title">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

             <div class="form-group">
            <label for="image-upload">Upload Foto Profil</label>
            <input type="file" class="form-control"class="custom-file-input @error('profile_image') is-invalid @enderror" id="imgName" onchange="previewFile(this)" name="profile_image">
                <div class="custom-file">
                    </label>
                </div>
            </div>

            @error('profile_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="{{ asset('storage/images/default.png') }}" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>

        </div>
        </div>
        <div class="form-group">
            <label for="image">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            
        <div class="form-group">
            <label for="image">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"

            name="password_confirmation" required autocomplete="new-password">

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">{{ __('Tambah User') }}</button>
    </form>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>