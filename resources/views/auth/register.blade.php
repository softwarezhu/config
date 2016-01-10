@extends('layout.auth')
@section('content')
    @parent
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="">用户名</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="">邮箱</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="">密码</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="">确认密码</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </form>

@endsection