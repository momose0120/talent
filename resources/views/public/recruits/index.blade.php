<div class="page-header">
    <h3>募集要項一覧</h3>
</div>
@if (count($recruits) > 0)
<?php $i = 1; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>職種</th>
                <th>タイトル</th>
                <th>就業場所</th>
                <th>更新日時</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($recruits as $recruit)
            <tr>
                <th><a href="{{ route('public_recruits.show', $recruit->id) }}"><img src="{{ asset("image/recruits/$recruit->main_image") }}" alt="サムネイル" width="80" height="80" class="img-rounded"></a></th>
                <td>{{ $recruit->type }}</td>
                <td>{{ $recruit->title }}</td>
                <td>{{ $recruit->work_location }}</td>
                <td>{{ $recruit->updated_at }}</td>
            </tr>
        <?php $i++; ?>
        @endforeach
    </tbody>
</table>
@endif
