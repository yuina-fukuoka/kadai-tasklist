@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>タスク新規作成ページ</h1>

<!--error用のコード-->
 

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection