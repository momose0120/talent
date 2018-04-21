@extends('layouts.app')

@section('content')
    <ul class="list-inline">
        <li><a href="{{ route('admin.get') }}" class="btn btn-success">トップへ戻る</a></li>
    </ul>
    <div class="page-header">
        <h2>募集要項一覧</h2>
    </div>
    @if (count($recruits) > 0)
    <?php $i = 1; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>職種</th>
                    <th>タイトル</th>
                    <th>就業場所</th>
                    <th>更新日時</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($recruits as $recruit)
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $recruit->type }}</td>
                    <td>{{ $recruit->title }}</td>
                    <td>{{ $recruit->work_location }}</td>
                    <td>{{ $recruit->updated_at }}</td>
                    <td>
                    {!! Form::open(['route' => ['admin_recruits.edit', $recruit->id], 'method' => 'get']) !!}
                        {!! Form::submit('編集', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    </td>
                    <td>
                    {!! Form::open(['route' => ['admin_recruits.destroy', $recruit->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    @endif
    <div><a href="{{ route('admin_recruits.create') }}" class="btn btn-success">新規登録</a></div>

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