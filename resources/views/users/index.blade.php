@extends('layouts.app')

@section('content')
    @if (count($users) > 0)
    <ul class="media-list">
    @foreach ($users as $user)
        <li class="media">
            <div class="media-left">
                <img class="media-object img-rounded" src="#" alt="">
            </div>
            <div class="media-body">
                <div>
                    {{ $user->name }}
                </div>
                <div>
                    <p>{!! link_to_route('users.show', '編集', ['id' => $user->id]) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    @endif
@endsection