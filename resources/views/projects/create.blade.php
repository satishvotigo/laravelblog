@extends('layouts.default')


@section('pagecontent')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Create Projects</h1>
            </div>
        </div>
        @if($errors->any() )
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
        @endif
        <div class="container">
            <form method="POST" action="/projects">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="title" class="col-12 col-form-label"></label>
                    <div class="col-12">
                        <input type="text" class="form-control" name="title" id="inputName" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description"></label>
                    <div class="col-12">
                        <textarea class="form-control" name="description" id="" rows="5" placeholder="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Create new Project</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection