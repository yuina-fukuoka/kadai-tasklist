@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
 <h1>id: {{ $task->id }} のタスク編集ページ</h1>
 
 <!--error用のコード-->
    
    
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection