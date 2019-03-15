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
            {{ $project->title}}
            </div>
        </div>
        <div class= "row">
            <div class="col">
            {{ $project->description}}
            </div>
        </div>

        <div class= "row">
            <div class="col">
                <a href="/projects/{{ $project->id }}/edit">Edit Project</a>
            </div>
        </div>
        <div class= "row">
            <div class="col">
                <form method="POST" action="/projects/{{ $project->id }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group row">
                        <div class="">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection