@extends('layouts.layout')


@section('title')@parent:: Reg @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container mt-5 pt-5">

        <form method="post" action="{{route('register.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3">
                <label for='name'>Name</label>
                <input type="text" class="form-control"  name="name" id="name" value="{{old('name')}}" placeholder="Name">
            </div>
            <div class="form-group mt-3">
                <label for='email'>E-Mail</label>
                <input type="email" class="form-control"  name="email" id="email" value="{{old('email')}}"  placeholder="E-mail">
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control"  name="password" id="password"  placeholder="Password">
            </div>
            <div class="form-group mt-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control"  name="password_confirmation" id="password_confirmation"  placeholder="Password">
            </div>
            <div class="form-group mt-3">
                <label for="avatar">Avatar</label>
                <input type="file" class="avatar"  name="avatar" id="avatar">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
