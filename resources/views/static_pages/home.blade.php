@extends('layouts.default')

@section('title','主页')
@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>微博列表</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
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
    @endif
@stop