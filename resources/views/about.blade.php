@extends('layouts.default')


@section('pagetitle', 'About Us')

@section('headtag', 'About Us')

@section('content')
<ul>
@foreach($tasks as $task)
<li>{{ $task }} </li>
@endforeach
</ul>

@endsection