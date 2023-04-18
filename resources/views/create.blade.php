@extends('layouts.layout')

@section('title')@parent::{{$title}}

@endsection

@section('content')

    <div class="container mt-5 pt-5">

    <form method="post" action="{{route('posts.store')}}">
    @csrf
        <div class="form-group">
            <label for='title'>Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title"  placeholder="Title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="content" rows="5">{{old('content')}}</textarea>
            @error('content')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for='rubric_id'>Rubric</label>
            <select class="form-control @error('rubric_id') is-invalid @enderror" id="rubric_id" name="rubric_id">
                <option>Select rubric</option>
                @foreach($rubrics as $k=>$v)
                    <option value="{{$k}}"
                            @if(old('rubric_id') == $k) selected @endif
                    >{{$v}}</option>
                @endforeach
            </select>
            @error('rubric_id')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

@endsection
