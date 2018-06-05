<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>Task: {!! nl2br(e($task->content)) !!}</p>
                <p>Status: {!! nl2br(e($task->status)) !!}</p>
            </div>
            <div class='btn-toolbar'>
                <div class="btn-group">
                 @if (Auth::user()->id == $task->user_id)
                
                    {!! Form::open(['route' => ['tasks.edit', $task->id], 'method' => 'get']) !!}
                        {!! Form::submit('Edit', ['class' => 'btn btn-warning btn-xs']) !!}
                    {!! Form::close() !!}
                    
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}

