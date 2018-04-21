@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $recruit->title }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="#" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="media-list">
                <li class="media">職種：{{ $recruit->type }}</li>
                <li class="media">タイトル：{{ $recruit->title }}</li>
                <li class="media">仕事内容：{{ $recruit->job }}</li>
            </ul>
        </div>
    </div>
@endsection