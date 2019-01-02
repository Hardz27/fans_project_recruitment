@extends('layouts.app')

@section('content')
<h4>{{ $fans->title }}</h4>
<p>{{ $fans->content }}</p>
<a href="{{ route('fans.index') }}" class="btn btn-default">Kembali</a>
@endsection