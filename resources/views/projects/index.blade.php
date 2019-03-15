@extends('layouts.default')


@section('pagecontent')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Projects List</h1>
            </div>
        </div>
        <div class= "row">
            <div class="col">
                <ul class="list-group">
                    @foreach($projects as $project)
                        <ul class="list-group">
                            <li class="list-group-item"> <a href="/projects/{{ $project->id}}">{{ $project->title}}</a></li>
                        </ul>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection