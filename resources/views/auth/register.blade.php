@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>管理者登録</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post', 'file' => 'true']) !!}
                <div class="form-group">
                    {!! Form::label('department', '部署') !!}
                    {!! Form::text('department', old('department'), ['class' => 'form-control']) !!}
                </div>

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

                <!--画像アップロード-->
                <div class="form-group">
                    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                    {!! Form::file('file') !!}
                </div>
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection