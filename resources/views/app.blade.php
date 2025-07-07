<h1>Hello from Laravel Course</h1>
{{date('Y')}}
<p>{{strtoupper($name . ' ' . $surname)}}</p>
<p>{{ Illuminate\Support\Str::after('Hello world', 'Hello ') }}</p>
<p>{!!$job!!}</p>

<?php
$cars = [1, 2, 3];
?>
{{-- same as--}}
@php
$cars = [1, 2, 3];
$cars2 = [];
@endphp

@foreach($cars as $car)
    @include('car.view', ['car' => $car])
@endforeach
@{{$fsaldfa}}
@each('car.view', $cars, 'car', 'car.empty')

@if(empty($cars2))
    @include('hello.alert', ['color' => 'red', 'message' => 'array is empty'])
@endif

@include('layouts.child')