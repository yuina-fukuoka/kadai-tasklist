@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>タスク新規作成ページ</h1>

<!--error用のコード deleted-->
 

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection