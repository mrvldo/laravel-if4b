@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')

    {{-- <h2>Fakultas</h2> --}}
    {{-- {{$fikr}} --}}

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama Fakultas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataFakultas as $item)
                <tr>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
