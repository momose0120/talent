@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>保育所で働きたいひと集合！！</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('public.recruits.index', ['recruits' => $recruits])
@endsection
