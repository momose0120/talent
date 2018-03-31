@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="#" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="media-list">
                <li class="media">ログインID：{{ $user->login_id }}</li>
                <li class="media">パスワード：{{ $user->password }}</li>
                <li class="media">部署：{{ $user->department }}</li>
            </ul>
        </div>
    </div>
@endsection