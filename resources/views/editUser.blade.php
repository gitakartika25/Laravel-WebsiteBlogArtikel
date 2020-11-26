<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Edit User</h3><br>
        <a href="{{ route('manageusers') }}" class="btn btn-outline-info">< Kembali ke Kelola User</a>
    </div>

<body>
    <form action="/users/updateUser/{{ $user->id }}" method="POST"enctype="multipart/form-data" class="clearfix">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}"><br>
        <div class="form-group">
            <label for="title">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

             </div>
         <div class="form-group">
            <label for="image-upload">Upload Foto Profil</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)"
                    name="featured_image"></br>
                    <label class="custom-file-label" for="image-upload" id="fileName">
                        {{ $user->profil_image }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="{{ asset('storage/'.$user->profil_image) }}" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>
        @if(Auth::user()->id != $user->id)

        </div>
        <div class="form-group">
            <label for="roles">Roles</label>

            <select name="roles" class="form-control" id="roles">
                <optgroup label="Current user">
                    <option value="{{ $user->roles }}">{{ $user->roles }}</option>
                </optgroup>
                <optgroup label="Change user">
                    <option value="User">User</option>
                    <option value="Administrator">Administrator</option>
                     <button type="submit" name="add" class="btn btn-primary float-right">Update Data</button>
                </optgroup>
            </select><br>
              <button type="submit" name="add" class="btn btn-primary float-right">Update Data</button>
        </div>
       
    </form>
    @endif
</main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>