@extends('layouts.layout')


@section('title')@parent:: Login @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container mt-5 pt-5">

        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for='email'>E-Mail</label>
                <input type="email" class="form-control"  name="email" id="email" value="{{old('email')}}"  placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control"  name="password" id="password"  placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
