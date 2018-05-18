@extends('layouts.default')
@section('title','更新个人资料')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>更新个人资料</h5>
            </div>

            <div class="panel-body">
                @include('shared._errors')
                
                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                    </a>
                </div>

                <form action="{{route('users.update',$user->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation">确认密码</label>
                        <input type="password" name="password-confirmation" class="form-control" value="{{old('password')}}">
                    </div>
                    <button type="submit" class="btn btn-pirmary">提交</button>
                </form>
            </div>
        </div>
    </div>
@stop