@extends('layouts.layout')

@section('title')@parent::{{$title}}

@endsection

@section('content')

    <div class="container mt-5 p-5">
        <div class="mt-5">
            <!-- /resources/views/post/create.blade.php -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Create Post Form -->
        </div>
    <form method="post" action="{{route('posts.store')}}">
    @csrf
        <div class="form-group">
            <label for='title'>Title</label>
            <input type="text" class="form-control"  name="title" id="title" placeholder="Title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="content" rows="5">{{old('content')}}</textarea>
        </div>
        <div class="form-group">
            <label for='rubric_id'>Rubric</label>
            <select class="form-control" id="rubric_id" name="rubric_id">
                <option>Select rubric</option>
                @foreach($rubrics as $k=>$v)
                    <option value="{{$k}}"
                            @if(old('rubric_id') == $k) selected @endif
                    >{{$v}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

@endsection
