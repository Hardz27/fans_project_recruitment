@extends('layouts.app')

@section('content')
<h4>Anggota Baru</h4>
<form action="{{ route('fans.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="title" placeholder="Nama">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Status/Pekerjaan</label>
        <input type="text" class="form-control" name="content" placeholder="Status atau pekerjaan anda">
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('fans.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection