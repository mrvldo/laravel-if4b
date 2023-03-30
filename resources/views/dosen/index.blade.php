@extends('layout.master')

@section('title','Halaman Fakultas')
@section('subtitle','Fakultas')
@section('content')
    {{-- <p>Ini halaman Fakultas</p>--}}
    //{{-- {{$fikr}}--}}
    <ul>
        @foreach ($dataFakultas as $item)
            <li> {{$item}} </li>
        @endforeach
    </ul>
@endsection