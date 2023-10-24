@extends('layouts.default')

@section('content')
    <h1 class="">Всем привет</h1>
    <p>Имя: {{ $name }}</p>
    <p>Должность: {{ $position }}</p>

    @if($age > 18)
        <p>Возраст: {{ $age }}</p>
    @else
        <p>Извините, вы слишком молоды.</p>
    @endif
@endsection
