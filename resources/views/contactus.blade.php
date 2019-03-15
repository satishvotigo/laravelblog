@extends('layouts.default')


@section('pagetitle', 'Contact Us')

@section('headtag', 'Contact Us')

@section('content')

<ul>
@foreach($tasks as $task)
<li>{{ $task }} </li>
@endforeach
</ul>

@endsection