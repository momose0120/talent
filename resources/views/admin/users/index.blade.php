@extends('layouts.app')

@section('content')
    <ul class="list-inline">
        <li><a href="{{ route('admin.get') }}" class="btn btn-success">トップへ戻る</a></li>
    </ul>
    <div class="text-center page-header">
        <h2>管理者一覧</h2>
    </div>
    @if (count($users) > 0)
        <?php $i = 1; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>氏名</th>
                    <th>ログインID</th>
                    <th>部署</th>
                    <th>更新日時</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->login_id }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                    {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'get']) !!}
                        {!! Form::submit('編集', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    </td>
                    <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    @endif
    <div><a href="{{ route('signup.get') }}" class="btn btn-success">新規登録</a></div>

<!--　削除確認メッセージ　-->
<script> 
    $(function(){ 
        $(".btn-danger").click(function(){ 
            if(confirm("本当に削除しますか？")){ 
                // 削除処理。 
            }else{ 
                return false; 
            } 
        }); 
    }); 
</script> 
    
@endsection