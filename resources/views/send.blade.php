@extends('layouts.layout')


{{--@section('title')@parent::Send Mail@endsection--}}

@section('header')
    @parent
@endsection

@section('content')
    <div class="container mt-5 pt-5">

        <form method="post" action="./send">
            @csrf
            <div class="form-group">
                <label for='name'>Title</label>
                <input type="text" class="form-control"  name="name" id="name"  placeholder="Name">
            </div>
            <div class="form-group">
                <label for='email'>Title</label>
                <input type="email" class="form-control"  name="email" id="email"  placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" id="text" name="text" placeholder="text" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
