@extends('layouts.app')

@section('content')
    <a href="{{ route('fans.create') }}" class="btn btn-info btn-sm">Anggota Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Status/Pekerjaan</th>
        </thead>
        <tbody>
            @foreach ($fans as $fans)
                <tr>
                    <td>{{ $fans->id }}</td>
                    <td><a href="{{ route('fans.show', $fans->id) }}">{{ $fans->title }}</a></td>
                    <td><a href="{{ route('fans.show', $fans->id) }}">{{ $fans->content }}</a></td>
                    <td>
                        <form action="{{ route('fans.destroy', $fans->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('fans.edit', $fans->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection