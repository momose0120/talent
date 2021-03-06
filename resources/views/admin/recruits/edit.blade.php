@extends('layouts.app')

@section('content')
    <ul class="list-inline">
        <li><a href="{{ route('admin.get') }}" class="btn btn-success">トップへ戻る</a></li>
        <li><a href="{{ route('admin_recruits.index') }}" class="btn btn-success">募集要項一覧</a></li>
    </ul>
    <div class="text-center page-header">
        <h2>募集要項更新</h2>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['admin_recruits.update', $recruit->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('type', '職種') !!}
                    {!! Form::text('type', $recruit->type, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', $recruit->title,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('job', '仕事内容') !!}
                    {!! Form::textarea('job', $recruit->job,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('salary', '給与・時給') !!}
                    {!! Form::text('salary', $recruit->salary,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_location', '就業場所') !!}
                    {!! Form::text('work_location', $recruit->work_location,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_hours', '就業時間帯') !!}
                    {!! Form::textarea('work_hours', $recruit->work_hours,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('work_period', '就業期間') !!}
                    {!! Form::text('work_period', $recruit->work_period,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('welfare', '福利厚生') !!}
                    {!! Form::text('welfare', $recruit->welfare,  ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('更新', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
