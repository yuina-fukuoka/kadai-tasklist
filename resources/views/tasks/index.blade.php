@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
 <h1>タスクリスト一覧</h1>
<!--before Bootstrap--><!--
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }} > {{ $task->status }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの作成') !!}

    --><!--after Bootstrap-->
    
     @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}
   
@endsection