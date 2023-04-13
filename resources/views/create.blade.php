@extends('layouts.layout')

@section('title')@parent::{{$title}}

@endsection

@section('content')

    <div class="container mt-5 p-5">
    <form method="post" action="{{route('posts.store')}}">
    @csrf
        <div class="form-group">
            <label for='title'>Title</label>
            <input type="text" class="form-control"  name="title" id="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for='rubric'>Rubric</label>
            <select class="form-control" id="rubric" placeholder="rubric" name="rubric">
                <option>Select rubric</option>
                @foreach($rubrics as $k=>$v)
                    <option value="{{$k}}">{{$v}}</option>
                @endforeach


            </select>
        </div>
        <div class="form-group">
        <button class="mt-3 btn btn-primary">Submit</button>
        </div>

    </form>
    </div>

@endsection
