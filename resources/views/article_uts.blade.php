@extends('layouts.layout_post_uts')


@section('sidebar')
    @parent
@endsection

@section('konten')
    <h2 style="font: bold 25px arial sans-serif; margin-bottom: 10px;">Artikel {{ $id }}</h2>
    <p>Ini adalah artikel Gita.</p>
@endsection

