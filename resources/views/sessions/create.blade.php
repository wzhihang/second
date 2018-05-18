@extends('layouts.default')
@section('title','login')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>login</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form action="{{route('login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password" >password</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="checkbox">
                        <lable><input type="checkbox" name="remember">remember</lable>
                    </div>
                    <button class="btn btn-primary" type="submit">login</button>
                </form>
            </div>
            <hr>
            <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
        </div>
    </div>
@stop