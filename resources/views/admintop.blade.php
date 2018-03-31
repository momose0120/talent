@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Ta! lent</h1>
        </div>
    </div>
    <div class="row">
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>管理者管理</p>            
                </div>
                <div class="panel-body text-center">
                    <p>{!! link_to_route('signup.get', '管理者登録', null, ['class' => 'btn btn-primary']) !!}</p>
                    <p>{!! link_to_route('users.index', '管理者一覧', null, ['class' => 'btn btn-primary']) !!}</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>募集要項管理</p>            
                </div>
                <div class="panel-body text-center">
                    <p>{!! link_to_route('recruits.create', '募集要項登録', null, ['class' => 'btn btn-primary']) !!}</p>
                    <p>{!! link_to_route('recruits.index', '募集要項一覧', null, ['class' => 'btn btn-primary']) !!}</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>イベント管理</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">イベント登録</p>
                        <p class="btn btn-primary">イベント一覧</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>FAQ管理</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">FAQ登録</p>
                        <p class="btn btn-primary">FAQ一覧</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>働くひと管理</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">働くひと登録</p>
                        <p class="btn btn-primary">働くひと一覧</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>職種管理</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">職種登録</p>
                        <p class="btn btn-primary">職種一覧</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>トップページ</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">トップページ登録・編集</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>代表メッセージ</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">代表メッセージ登録・編集</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>社内制度管理</p>            
                </div>
                <div class="panel-body text-center">
                        <p class="btn btn-primary">社内制度登録・編集</p>
                </div>
            </div>
        </div>
    </div>
@endsection
