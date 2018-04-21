@extends('layouts.app')

@section('content')
    <div class="text-center page-header">
        <h2>トップページ</h2>
    </div>

    <div class="row">
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>管理者管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="{{ route('signup.get') }}">管理者登録</a></li>
                    <li class="list-group-item"><a href="{{ route('users.index') }}">管理者一覧</a></li>
                </ul>
            </div>
        </div>

         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>管理者管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="{{ route('admin_recruits.create') }}">募集要項登録</a></li>
                    <li class="list-group-item"><a href="{{ route('admin_recruits.index') }}">募集要項一覧</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>イベント管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">イベント登録</a></li>
                    <li class="list-group-item"><a href="#">イベント一覧</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>FAQ管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">FAQ登録</a></li>
                    <li class="list-group-item"><a href="#">FAQ一覧</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>働くひと管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">働くひと登録</a></li>
                    <li class="list-group-item"><a href="#">働くひと一覧</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>職種管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">職種登録</a></li>
                    <li class="list-group-item"><a href="#">職種一覧</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>トップページ</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">登録・編集</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>代表メッセージ</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">登録・編集</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p>社内制度管理</p>            
                </div>
                <ul class="panel-body text-center list-group">
                    <li class="list-group-item"><a href="#">登録・編集</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
