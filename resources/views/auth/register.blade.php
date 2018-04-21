@extends('layouts.app')

@section('content')
    <ul class="list-inline">
        <li><a href="{{ route('admin.get') }}" class="btn btn-success">トップへ戻る</a></li>
        <li><a href="{{ route('users.index') }}" class="btn btn-success">管理者一覧</a></li>
    </ul>
    <div class="text-center page-header">
        <h2>管理者登録</h2>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}

                <div class="form-group">
                    {!! Form::label('name', '氏名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('login_id', 'ログインID') !!}
                    {!! Form::text('login_id', old('login_id'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('department', '部署') !!}
                    {!! Form::text('department', old('department'), ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('新規登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection