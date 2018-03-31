@extends('layouts.app')

@section('content')
    <h2>募集要項登録</h2>
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['route' => 'recruits.store', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('type', '職種') !!}
                    {!! Form::text('type', old('type'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', old('title'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('job', '仕事内容') !!}
                    {!! Form::textarea('job', old('job'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('salary', '給与・時給') !!}
                    {!! Form::text('salary', old('salary'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_location', '就業場所') !!}
                    {!! Form::text('work_location', old('work_location'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_hours', '就業時間帯') !!}
                    {!! Form::textarea('work_hours', old('work_hours'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_period', '就業期間') !!}
                    {!! Form::text('work_period', old('work_period'),  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('welfare', '福利厚生') !!}
                    {!! Form::text('welfare', old('welfare'),  ['class' => 'form-control']) !!}
                </div>
                <!--画像アップロード-->
                <div class="form-group">
                    {!! Form::label('main_image', 'メイン画像アップロード', ['class' => 'control-label']) !!}
                    {!! Form::file('main_image') !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@endsection
