<!DOCTYPE html>
<html>
<head>
 <title>Edit Artikel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Edit Artikel</h3><br>
        <a href="{{ route('manage') }}" class="btn btn-outline-info">< Kembali ke Kelola Artikel</a>
    </div>

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
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)"
                    name="featured_image"></br>
                    <label class="custom-file-label" for="image-upload" id="fileName">
                        {{ $article->featured_image }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="{{ asset('storage/'.$article->featured_image) }}" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
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