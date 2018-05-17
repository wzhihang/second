@extends('layouts.default')

@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>Second Site</h1>
        <p class="lead">
            Is life always this hard,or is it just when you are a kid? <a href=""> Alawys like this</a> he he he
        </p>
        <p>一切将从这里开始</p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
        </p>

    </div>
@stop