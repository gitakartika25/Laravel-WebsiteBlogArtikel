<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
	 <link href="{{ asset('css/master-css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/master-css/main-css/bs/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master-css/main-css/tambahan/masterHome.css') }}" rel="stylesheet">
</head>
<body>
	<form action="/article/update/{{$article->id}}" method="post" enctype="multipart/form-data" class="clearfix">
	 @csrf
        <input type="hidden" name="id" value="{{ $article->id }}"><br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"
            required="required" name="title" value="{{ $article->title }}" placeholder="Judul.."></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" required="required" name="content" placeholder="konten.." id="exampleFormControlTextarea1" row="5">{{ $article->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image-upload">Upload Gambar</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)" required="required" name="image"></br>
                    <label class="custom-file-label" for="image-upload" id="fileName">
                        {{ $article->image }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="{{ asset('storage/'.$article->image) }}" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>
        <div class="form-group">
            <label for="image">Diposting oleh</label>
            <input type="text" class="form-control"
            required="required" name="writer" value="{{ $article->writer }}" readonly></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Update Data</button>
	 </form>

	  <script src="{{ asset('js/master-js/tambahan/functionReadUrl.js') }}"></script>
    <script src="{{ asset('js/master-js/tambahan/filenameDisplay.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="{{ asset("vendor/jquery.slim.min.js") }}"><\/script>')</script><script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/master-js/tambahan/offcanvas.js') }}"></script></body>
</body>
</html>