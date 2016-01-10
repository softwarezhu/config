@extends('layout.auth')
@section('content')
    @parent
    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/auth/login" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="">用户名：</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="">密码：</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember" value="1"> 记住密码</label>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="登录">
        </div>

    </form>

@endsection